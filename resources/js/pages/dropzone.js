(function ($) {
    'use strict';

    var FormDropzone = (function () {
        return {
            //main function to initiate the module
            init: function () {
                Dropzone.options.myDropzone = {
                    init: function () {
                        this.on('success', function (file, responseText) {
                            var obj = $.parseJSON(responseText);
                            file.id = obj.id;
                            file.filename = obj.filename;
                            // Create the remove button
                            var removeButton = Dropzone.createElement(
                                "<button style='margin: 10px 0 0 15px;'>Remove file</button>"
                            );

                            // Capture the Dropzone instance as closure.
                            var _this = this;

                            // Listen to the click event
                            removeButton.addEventListener('click', function (e) {
                                // Make sure the button click doesn't submit the form:
                                e.preventDefault();
                                e.stopPropagation();

                                $.ajax({
                                    url: 'file/delete',
                                    type: 'DELETE',
                                    data: {
                                        id: file.id,
                                        _token: '{{ csrf_token() }}',
                                    },
                                });
                                // Remove the file preview.
                                _this.removeFile(file);
                            });

                            // Add the button to the file preview element.
                            file.previewElement.appendChild(removeButton);
                        });
                    },
                };
            },
        };
    })();
    $(document).ready(function () {
        FormDropzone.init();
    });
})(jQuery);
