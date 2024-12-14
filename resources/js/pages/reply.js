(function ($) {
    'use strict';
    $('#summernote').summernote({
        fontNames: ['Lato', 'Arial', 'Courier New'],
    });
    $('body').on('click', '.btn-codeview', function (e) {
        if ($('.note-editor').hasClass('fullscreen')) {
            var windowHeight = $(window).height();
            $('.note-editable').css('min-height', windowHeight);
        } else {
            $('.note-editable').css('min-height', '300px');
        }
    });
    $('body').on('click', '.btn-fullscreen', function (e) {
        setTimeout(function () {
            if ($('.note-editor').hasClass('fullscreen')) {
                var windowHeight = $(window).height();
                $('.note-editable').css('min-height', windowHeight);
            } else {
                $('.note-editable').css('min-height', '300px');
            }
        }, 500);
    });
    $('.note-link-url').on('keyup', function () {
        if ($('.note-link-text').val() != '') {
            $('.note-link-btn').attr('disabled', false).removeClass('disabled');
        }
    });

    $('#slimscrollside').slimscroll({
        height: '700px',
        size: '3px',
        color: 'black',
        opacity: 0.3,
    });
    $('#ccb').on('click', function () {
        $('#cci').toggle(500);
        $('#ccb').hide();
    });
    $('#bccb').on('click', function () {
        $('#bcci').toggle(500);
        $('#bccb').hide();
    });
})(jQuery);
