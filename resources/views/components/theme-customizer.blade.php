<div class="theme-customizer">
    <button class="theme-customizer-toggle">
        <i class="fa-duotone fa-palette"></i>
    </button>

    <div class="theme-customizer-panel">
        <h3>Personnalisation du thème</h3>

        <div class="color-section">
            <div class="color-item">
                <label>Couleur principale</label>
                <input type="color" id="primary-color" value="{{ $primaryColor }}"
                       data-var="primary_color">
            </div>
            <div class="color-item">
                <label>Couleur secondaire</label>
                <input type="color" id="secondary-color" value="{{ $secondaryColor }}"
                       data-var="secondary_color">
            </div>
        </div>

        <div class="color-history"></div>
            <h4>Historique</h4>
            <div id="color-history-list">
                @foreach($colorHistory as $item)
                    <div class="color-history-item" data-variable="{{ $item->variable }}" data-value="{{ $item->value }}">
                        <div style="background-color: {{ $item->value }}; width: 20px; height: 20px; margin-right: 10px; border-radius: 4px;"></div>
                        <span>{{ $item->variable }}: {{ $item->value }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
