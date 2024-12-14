(function ($) {
    'use strict';
    $(document).ready(function () {
        $('input[type="checkbox"].square-blue, input[type="radio"].radio-blue').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue',
            increaseArea: '20%',
        });
        $('button[type="reset"]').on('click', function () {
            $('input').iCheck('uncheck');
        });
        $('input[type="reset"]').on('click', function () {
            $('input').iCheck('uncheck');
        });
    });
})(jQuery);
