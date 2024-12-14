(function ($) {
    'use strict';
    $(document).ready(function () {
        $('#sortable_portlets').find('.column').sortable({
            connectWith: '#sortable_portlets .column',
            items: '.portlet',
            opacity: 0.8,
            coneHelperSize: true,
            placeholder: 'sortable-box-placeholder round-all',
            forcePlaceholderSize: true,
            tolerance: 'pointer',
        });

        $('.column').disableSelection();
    });
})(jQuery);
