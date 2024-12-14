(function ($) {
    'use strict';
    $(document).ready(function () {
        $('input[type="checkbox"].custom-checkbox, input[type="radio"].custom-radio').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue',
            increaseArea: '20%',
        });
        $('#reset').on('click', function () {
            $('input').iCheck('uncheck');
        });
    });
    $(document).on('click', '#close-preview', function () {
        $('.image-preview').popover('hide');
        // Hover befor close the preview
        $('.image-preview').on(
            'hover',
            function () {
                $('.image-preview').popover('show');
            },
            function () {
                $('.image-preview').popover('hide');
            }
        );
    });

    $(function () {
        // Create the close button
        var closebtn = $('<button/>', {
            type: 'button',
            text: 'x',
            id: 'close-preview',
            style: 'font-size: initial;',
        });
        closebtn.attr('class', 'close float-end');
        // Set the popover default content
        $('.image-preview').popover({
            trigger: 'manual',
            html: true,
            title: '<strong>Preview</strong>' + $(closebtn)[0].outerHTML,
            content: "There's no image",
            placement: 'bottom',
        });
        // Clear event
        $('.image-preview-clear').on('click', function () {
            $('.image-preview').attr('data-content', '').popover('hide');
            $('.image-preview-filename').val('');
            $('.image-preview-clear').hide();
            $('.image-preview-input input:file').val('');
            $('.image-preview-input-title').text('Browse');
        });
        // Create the preview image
        $('.image-preview-input input:file').on('change', function () {
            var img = {
                id: 'dynamic',
                width: 250,
                height: 200,
            };
            var file = this.files[0];
            var reader = new FileReader();
            // Set preview image into the popover data-content
            reader.onload = function (e) {
                $('.image-preview-input-title').text('Change');
                $('.image-preview-clear').show();
                $('.image-preview-filename').val(file.name);
            };
            reader.readAsDataURL(file);
        });
    });
})(jQuery);
