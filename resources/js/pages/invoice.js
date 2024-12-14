(function ($) {
    'use strict';
    $('li.bg-primary').on('click', function () {
        $('#invoice, #footer-bg').removeAttr('class');
        $('#invoice, #footer-bg').addClass('bg-primary text-white');
    });
    $('li.bg-success').on('click', function () {
        $('#invoice, #footer-bg').removeAttr('class');
        $('#invoice, #footer-bg').addClass('bg-success text-white');
    });
    $('li.bg-warning').on('click', function () {
        $('#invoice, #footer-bg').removeAttr('class');
        $('#invoice, #footer-bg').addClass('bg-warning text-white');
    });
    $('li.bg-danger').on('click', function () {
        $('#invoice, #footer-bg').removeAttr('class');
        $('#invoice, #footer-bg').addClass('bg-danger text-white');
    });
    $('li.bg-info').on('click', function () {
        $('#invoice, #footer-bg').removeAttr('class');
        $('#invoice, #footer-bg').addClass('bg-info text-white');
    });

    $('li.bg-default').on('click', function () {
        $('#invoice, #footer-bg').removeAttr('class');
        $('#invoice, #footer-bg').addClass('bg-default text-white');
    });
})(jQuery);
