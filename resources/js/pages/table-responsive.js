(function ($) {
    'use strict';
    $('table.example').DataTable({
        responsive: true,
    });
    $(document).ready(function () {
        $('#example').DataTable({
            scrollX: true,
        });
    });
})(jQuery);
