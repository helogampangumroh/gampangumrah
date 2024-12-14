$(function () {
    'use strict';
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('ckeditor_full');
    CKEDITOR.replace('ckeditor_standard');

    // // TinyMCE Basic

    tinymce.init({
        selector: '#tinymce_basic',
        license_key: 'gpl',
        toolbar:
            ' undo redo | styles | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        image_advtab: true,
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tinymce.com/css/codepen.min.css',
        ],
    });

    // TinyMCE Full
    tinymce.init({
        selector: '#tinymce_full',
        license_key: 'gpl',
        toolbar1:
            'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true,
    });
});
