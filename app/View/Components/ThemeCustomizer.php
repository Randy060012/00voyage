<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Config;
use App\Models\ThemeHistory;

class ThemeCustomizer extends Component
{
    public $primaryColor;
    public $secondaryColor;
    public $colorHistory;

    public function __construct()
    {
        $this->primaryColor = Config::get('app.primary_color');
        $this->secondaryColor = Config::get('app.secondary_color');
        $this->colorHistory = ThemeHistory::orderBy('created_at', 'desc')
            ->take(5)
            ->get();
    }

    public function render()
    {
        return view('components.theme-customizer', [
            'primaryColor' => $this->primaryColor,
            'secondaryColor' => $this->secondaryColor,
            'colorHistory' => $this->colorHistory
        ]);
    }
}
