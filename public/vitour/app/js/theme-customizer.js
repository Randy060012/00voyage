$(document).ready(function() {
    const MAX_HISTORY = 5;

    let colorHistory = JSON.parse(localStorage.getItem('colorHistory') || '[]');

    $('.theme-customizer-toggle').on('click', function() {
        $('.theme-customizer-panel').toggleClass('active');
    });

    $(document).on('click', function(e) {
        if (!$(e.target).closest('.theme-customizer').length) {
            $('.theme-customizer-panel').removeClass('active');
        }
    });

    function updateCssVariable(variable, value) {
        const cssVarName = `--${variable.replace('_', '-')}`;
        document.documentElement.style.setProperty(cssVarName, value);
    }

    function saveColorHistory(variable, value) {
        const entry = {
            variable,
            value,
            timestamp: new Date().toISOString()
        };

        colorHistory.unshift(entry);
        if (colorHistory.length > MAX_HISTORY) {
            colorHistory.pop();
        }

        localStorage.setItem('colorHistory', JSON.stringify(colorHistory));
        updateHistoryDisplay(colorHistory);
    }

    function updateHistoryDisplay(history) {
        const $history = $('#color-history-list');
        $history.empty();

        history.forEach(item => {
            const $item = $(`
                <div class="color-history-item" data-variable="${item.variable}" data-value="${item.value}">
                    <div style="background-color: ${item.value}; width: 20px; height: 20px; margin-right: 10px; border-radius: 4px;"></div>
                    <span>${item.variable}: ${item.value}</span>
                </div>
            `);

            $history.append($item);
        });
    }

    $('input[type="color"]').on('change', function() {
        const variable = $(this).data('var');
        const value = $(this).val();

        updateCssVariable(variable, value);

        $.ajax({
            url: '/api/theme/save-colors',
            method: 'POST',
            data: { variable, value },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
        .done(function(response) {
            if (response.success) {
                console.log('Couleur sauvegardée:', response.message);
                updateHistoryDisplay(response.history);
            } else {
                console.error('Erreur:', response.message);
            }
        })
        .fail(function(xhr, status, error) {
            console.error('Erreur Ajax:', error);
        });
    });

    $(document).on('click', '.color-history-item', function() {
        const variable = $(this).data('variable');
        const value = $(this).data('value');

        updateCssVariable(variable, value);
        $(`input[data-var="${variable}"]`).val(value);

        $.ajax({
            url: '/api/theme/save-colors',
            method: 'POST',
            data: { variable, value },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });

    function loadHistory() {
        $.get('/api/theme/history')
            .done(function(history) {
                colorHistory = history;
                updateHistoryDisplay(history);
            })
            .fail(function(xhr, status, error) {
                console.error('Erreur lors du chargement de l\'historique:', error);
            });
    }

    loadHistory();
});
