(function ($) {
    'use strict';

    $('#gender, #gender1').select2({
        theme: 'bootstrap',
        placeholder: '',
        width: '100%',
    });
    $('#commentForm').bootstrapValidator({
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: 'The User name is required',
                    },
                },
                required: true,
                minlength: 3,
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required',
                    },
                    different: {
                        field: 'first_name,last_name',
                        message: 'Password should not match user Name',
                    },
                },
            },
            confirm: {
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
            },
            fname: {
                validators: {
                    notEmpty: {
                        message: 'The first name is required ',
                    },
                },
            },
            lname: {
                validators: {
                    notEmpty: {
                        message: 'The last name is required ',
                    },
                },
            },
            password3: {
                validators: {
                    notEmpty: {
                        message: 'This field is required and mandatory',
                    },
                },
                required: true,
                minlength: 3,
            },
            age: {
                validators: {
                    notEmpty: {},
                    digits: {},
                    greaterThan: {
                        value: 18,
                    },
                    lessThan: {
                        value: 100,
                    },
                },
            },
            phone1: {
                validators: {
                    notEmpty: {
                        message: 'The home number is required',
                    },
                    regexp: {
                        regexp: /^(\+\d{1,3}[- ]?)?\d{10}$/,
                        message: 'Enter valid phone number',
                    },
                },
            },
            phone2: {
                validators: {
                    notEmpty: {
                        message: 'The personal number is required',
                    },
                    regexp: {
                        regexp: /^(\+\d{1,3}[- ]?)?\d{10}$/,
                        message: 'Enter valid phone number',
                    },
                },
            },
            phone3: {
                validators: {
                    notEmpty: {
                        message: 'Alternate number is required',
                    },
                    different: {
                        field: 'phone1',
                        message: 'The alternate number must be different from Home number',
                    },
                    regexp: {
                        regexp: /^(\+\d{1,3}[- ]?)?\d{10}$/,
                        message: 'Enter valid phone number',
                    },
                },
            },
            acceptTerms: {
                validators: {
                    notEmpty: {
                        message: 'The checkbox must be checked',
                    },
                },
            },
        },
    });

    $('#acceptTerms').on('ifChanged', function (event) {
        $('#commentForm').bootstrapValidator('revalidateField', $('#acceptTerms'));
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
            var successModal = new bootstrap.Modal(document.getElementById('myModal'));
            successModal.show();
        }
    });

    document.getElementById('commentForm').addEventListener('keypress', function (event) {
        if (event.key === 'Enter') {
            event.preventDefault();
        }
    });

    showTab(currentIndex);
})(jQuery);
