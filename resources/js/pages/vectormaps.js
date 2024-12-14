(function ($) {
    'use strict';

    $(document).ready(function () {
        $('#vmapworld').vectorMap({
            map: 'world_en',
            backgroundColor: '#ffffff',
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#045707', '#84F088'],
            normalizeFunction: 'polynomial',
        });
        $('#vmaprussia').vectorMap({
            map: 'russia_en',
            backgroundColor: '#ffffff',
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#094980', '#ACD2F2'],
            normalizeFunction: 'polynomial',
        });
        $('#vmapgermany').vectorMap({
            map: 'germany_en',
            backgroundColor: '#ffffff',
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#d84a38', '#F5B4AB'],
            normalizeFunction: 'polynomial',
        });
        $('#vmapeurope').vectorMap({
            map: 'europe_en',
            backgroundColor: '#ffffff',
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#ffb848', '#F5D5A4'],
            normalizeFunction: 'polynomial',
        });
        $('#vmapusa').vectorMap({
            map: 'usa_en',
            backgroundColor: '#ffffff',
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#5bc0de', '#D6DBDE'],
            normalizeFunction: 'polynomial',
        });
    });
    $('.map_size')
        .closest('.card-body')
        .on('resize', function () {
            $(window).trigger('resize');
        });
    $('#slim1').slimscroll({
        height: '500px',
        size: '3px',
        color: '#D84A38',
        opacity: 1,
    });
})(jQuery);
