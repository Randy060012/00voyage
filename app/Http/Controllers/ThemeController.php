<?php

namespace App\Http\Controllers;

use App\Models\ThemeHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Config;
use Barryvdh\Debugbar\Facades\Debugbar;

class ThemeController extends Controller
{
    private $cssPath = 'public/vitour/app/css/app.css';
    private $envPath;

    public function __construct()
    {
        $this->envPath = base_path('.env');
    }

    public function saveColors(Request $request)
    {
        Debugbar::info('Début saveColors', $request->all());

        $request->validate([
            'variable' => 'required|string',
            'value' => 'required|string'
        ]);

        try {
            $history = ThemeHistory::create([
                'user_id' => 1,
                'variable' => $request->variable,
                'value' => $request->value,
            ]);
            Debugbar::info('Historique créé', $history->toArray());

            $this->updateCssFile($request->variable, $request->value);

            $this->updateEnvFile($request->variable, $request->value);

            ThemeHistory::where('user_id', 1)
                ->orderBy('created_at', 'desc')
                ->skip(5)
                ->take(PHP_INT_MAX)
                ->delete();

            return response()->json([
                'success' => true,
                'message' => 'Couleur sauvegardée avec succès',
                'history' => $this->getHistory()
            ]);

        } catch (\Exception $e) {
            Debugbar::error('Erreur dans saveColors', $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Erreur: ' . $e->getMessage()
            ], 500);
        }
    }

    private function updateCssFile($variable, $value)
    {
        Debugbar::info('Mise à jour CSS', [$variable, $value]);

        $cssPath = base_path($this->cssPath);
        if (!File::exists($cssPath)) {
            throw new \Exception("Fichier CSS non trouvé: {$cssPath}");
        }

        $css = File::get($cssPath);
        $varName = $this->getCssVariableName($variable);

        $pattern = '/(--' . preg_quote(substr($varName, 2)) . ':\s*)[^;]+/';

        if (preg_match($pattern, $css)) {
            $css = preg_replace($pattern, '$1' . $value, $css);
        } else {
            $css = preg_replace('/:root\s*{/', ":root {\n  $varName: $value;", $css);
        }

        File::put($cssPath, $css);
        Debugbar::info('CSS mis à jour avec succès');
    }

    private function updateEnvFile($variable, $value)
    {
        Debugbar::info('Mise à jour ENV', [$variable, $value]);

        $envKey = $this->getEnvKey($variable);
        $envContent = File::get($this->envPath);

        if (preg_match("/^{$envKey}=.*/m", $envContent)) {
            $envContent = preg_replace(
                "/^{$envKey}=.*/m",
                "{$envKey}={$value}",
                $envContent
            );
        } else {
            $envContent .= "\n{$envKey}={$value}";
        }

        File::put($this->envPath, $envContent);
        Debugbar::info('ENV mis à jour avec succès');
    }

    private function getCssVariableName($variable)
    {
        $mapping = [
            'primary_color' => '--primary-color',
            'secondary_color' => '--secondary-color'
        ];
        return $mapping[$variable] ?? $variable;
    }

    private function getEnvKey($variable)
    {
        $mapping = [
            'primary_color' => 'PRIMARY_COLOR',
            'secondary_color' => 'SECONDARY_COLOR'
        ];
        return $mapping[$variable] ?? strtoupper($variable);
    }

    public function getHistory()
    {
        return ThemeHistory::orderBy('created_at', 'desc')
            ->take(5)
            ->get();
    }
}
