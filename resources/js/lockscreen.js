(function ($) {
    'use strict';
    $(function () {
        var textfield = $('input[name=user]');
        $('button[type="submit"]').on('click', function (e) {
            e.preventDefault();
            //little validation just to check username
            if (textfield.val() !== '') {
                //$("body").scrollTo("#output");
                $('#output')
                    .addClass('alert alert-success animated fadeInUp')
                    .html('Welcome back Admin');
                $('#output').removeClass(' alert-danger');
                $('input').css({
                    height: '0',
                    padding: '0',
                    margin: '0',
                    opacity: '0',
                });
                //change button text
                $('button[type="submit"]')
                    .html('continue')
                    .removeClass('btn-info')
                    .addClass('btn-success')
                    .on('click', function () {
                        window.location.href = '../../admin';
                    });

                //show avatar
                $('.avatar').css({
                    'background-image': "url('../img/img_holder/400-x-699-green.jpg')",
                });
            } else {
                //remove success mesage replaced with error message
                $('#output').removeClass(' alert alert-success');
                $('#output')
                    .addClass('alert alert-danger animated fadeInUp')
                    .html('sorry enter Your Password ');
            }
            //console.log(textfield.val());
        });
    });

    $(document).ready(function () {
        $('button[type="submit"]').on('click', function (e) {
            e.preventDefault();
            if ($('#password').val() == '') {
                $('#output').addClass('alert alert-danger').text('Please enter password');
                setTimeout(function () {
                    $('#output').removeClass('alert alert-danger').text('');
                }, 3500);
            } else {
                $.ajax({
                    type: 'POST',
                    url: 'lockscreen',
                    data: {
                        password: $('#password').val(),
                        _token: $('meta[name="_token"]').attr('content'),
                    },
                    success: function (result) {
                        if (result == 'error') {
                            $('#output')
                                .addClass('alert alert-danger')
                                .text('You have entered a Wrong Password');
                            setTimeout(function () {
                                $('#output').removeClass('alert alert-danger').text('');
                            }, 2500);
                        } else {
                            $('#output')
                                .addClass(
                                    'alert alert-success animate__animated animate__fadeInUp user_name_max2'
                                )
                                .text('Welcome ' + '{!! $user->first_name !!}');
                            setTimeout(function () {
                                window.location.href = '../../admin';
                            }, 1000);
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(xhr.responseText);
                    },
                });
            }
            //show avatar
            $('.avatar').css({
                'background-image': "url('../../img/authors/avatar3.jpg')",
            });
        });
    });
})(jQuery);
