(function ($) {
    'use strict';
    // bootstrap wizard//
    $('#gender, #gender1').select2({
        theme: 'bootstrap',
        placeholder: '',
        width: '100%',
    });
    $('input[type="checkbox"].custom-checkbox, input[type="radio"].custom-radio').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue',
        increaseArea: '20%',
    });
    $('#dob').datetimepicker({
        format: 'YYYY-MM-DD',
        widgetPositioning: {
            vertical: 'bottom',
        },
        keepOpen: false,
        useCurrent: false,
        maxDate: moment().add(1, 'h').toDate(),
    });
    function formatState(state) {
        if (!state.id) {
            return state.text;
        }
        var $state = $(
            '<span><img src="/img/countries_flags/' +
                state.element.value.toLowerCase() +
                '.png" class="img-flag" width="20px" height="20px" /> ' +
                state.text +
                '</span>'
        );
        return $state;
    }
    $('#countries').select2({
        templateResult: formatState,
        templateSelection: formatState,
        placeholder: 'select a country',
        theme: 'bootstrap',
    });
    $('#commentForm').bootstrapValidator({
        fields: {
            first_name: {
                validators: {
                    notEmpty: {
                        message: 'The first name is required',
                    },
                    stringLength: {
                        min: 3,
                        message: 'The first name must be at least 3 characters',
                    },
                },
            },
            last_name: {
                validators: {
                    notEmpty: {
                        message: 'The last name is required',
                    },
                    stringLength: {
                        min: 3,
                        message: 'The last name must be at least 3 characters',
                    },
                },
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'Password is required',
                    },
                    different: {
                        field: 'first_name',
                        message: 'Password should not match first name',
                    },
                    different: {
                        field: 'last_name',
                        message: 'Password should not match last name',
                    },
                    stringLength: {
                        min: 8,
                        message: 'The password must be at least 8 characters',
                    },
                },
            },
            password_confirm: {
                validators: {
                    notEmpty: {
                        message: 'Confirm Password is required',
                    },
                    identical: {
                        field: 'password',
                    },
                    different: {
                        field: 'first_name,last_name',
                        message: 'Confirm Password should match with password',
                    },
                },
                required: true,
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required',
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address',
                    },
                },
                required: true,
            },
            activate: {
                validators: {
                    notEmpty: {
                        message: 'Please check the checkbox to activate',
                    },
                },
            },
            role: {
                validators: {
                    notEmpty: {
                        message: 'You must select a role',
                    },
                },
            },
        },
    });
    var rootwizard = document.getElementById('rootwizard');
    var tabs = rootwizard.querySelectorAll('.nav-link');
    var tabContent = rootwizard.querySelectorAll('.tab-pane');
    var previousBtn = rootwizard.querySelector('.previous a');
    var nextBtn = rootwizard.querySelector('.next a');
    var finishBtn = rootwizard.querySelector('.finish a');
    var currentIndex = 0;

    function showTab(index) {
        for (var i = 0; i < tabs.length; i++) {
            var tab = tabs[i];
            var content = tabContent[i];
            if (i === index) {
                tab.classList.add('active');
                content.classList.add('active');
            } else {
                tab.classList.remove('active');
                content.classList.remove('active');
            }
        }
        previousBtn.parentElement.style.visibility = index === 0 ? 'hidden' : 'visible';
        nextBtn.parentElement.style.display = index === tabs.length - 1 ? 'none' : 'inline-block';
        finishBtn.parentElement.style.display = index === tabs.length - 1 ? 'inline-block' : 'none';
    }

    previousBtn.addEventListener('click', function (e) {
        e.preventDefault();
        if (currentIndex > 0) {
            currentIndex--;
            showTab(currentIndex);
        }
    });

    nextBtn.addEventListener('click', function (e) {
        e.preventDefault();
        var validator = $('#commentForm').data('bootstrapValidator').validate();
        if (validator.isValid() && currentIndex < tabs.length - 1) {
            currentIndex++;
            showTab(currentIndex);
        }
    });

    finishBtn.addEventListener('click', function (e) {
        e.preventDefault();
        var validator = $('#commentForm').data('bootstrapValidator').validate();
        if (validator.isValid()) {
            document.getElementById('commentForm').submit();
        }
    });
    document.getElementById('activate').addEventListener('change', function (event) {
        $('#commentForm').bootstrapValidator('revalidateField', $('#activate'));
    });
    document.getElementById('commentForm').addEventListener('keypress', function (event) {
        if (event.key === 'Enter') {
            event.preventDefault();
        }
    });

    showTab(currentIndex);
})(jQuery);
