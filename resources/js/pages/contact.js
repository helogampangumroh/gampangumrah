(function ($) {
    'use strict';
    $(document).ready(function () {
        var map = new GMaps({
            el: '#map',
            lat: 38.8921021,
            lng: -77.0260358,
        });
        map.addMarker({
            lat: 38.8921021,
            lng: -77.0260358,
            title: 'Washington',
        });
    });
})(jQuery);
