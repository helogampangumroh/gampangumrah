(function ($) {
    'use strict';
    $(document).ready(function () {
        $('a[data-bs-toggle="tab"]').on('show.bs.tab', function (e) {
            e.target; // newly activated tab
            e.relatedTarget; // previous active tab
            $('#clothing-nav-content .tab-pane').removeClass('show active');
        });
        $('input[type="checkbox"].custom-checkbox, input[type="radio"].custom-radio').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue',
            increaseArea: '20%',
        });
        $.mockjax({
            url: '/post',
            responseTime: 200,
        });
    });
})(jQuery);
