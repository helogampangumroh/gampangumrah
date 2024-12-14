/*Created by lorvent on 1/20/2016.*/
(function ($) {
    'use strict';
    $('.custom-control-indicator')
        .removeClass('custom-control-indicator')
        .addClass('custom-control-label');
    $('.modal-footer').addClass('mx-auto');

    $('#bootstrap-editor2').wysihtml5({
        toolbar: {
            fa: true,
        },
    });
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

    $.trumbowyg.svgPath = '../vendors/trumbowyg/css/ui/icons.svg';
    $('#split_editor').trumbowyg({
        svgPath: false,
        hideButtonTexts: true,
    });
    jQuery.trumbowyg.langs.fr = {
        _dir: 'ltr', // This line is optionnal, but usefull to override the `dir` option
        bold: 'Gras',
        close: 'Fermer',
    };
})(jQuery);
