(function ($) {
    'use strict';
    document.addEventListener('DOMContentLoaded', function () {
        var image = '../../images/c1.jpg';
        var image1 = '../../images/c2.jpg';
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger',
            },
            buttonsStyling: false,
        });

        document.getElementById('btn1').addEventListener('click', function () {
            swalWithBootstrapButtons.fire("Here's your text message in the sweet alert!");
        });
        document.getElementById('btn2').addEventListener('click', function () {
            swalWithBootstrapButtons.fire("Here's your text message in the sweet alert!");
        });
        document.getElementById('btn3').addEventListener('click', function () {
            swalWithBootstrapButtons.fire('Good job!', 'You clicked the button!', 'success');
        });
        document.getElementById('btn4').addEventListener('click', function () {
            swalWithBootstrapButtons
                .fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                })
                .then((result) => {
                    if (result.value) {
                        swalWithBootstrapButtons.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        );
                    }
                });
        });
        document.getElementById('btn5').addEventListener('click', function () {
            swalWithBootstrapButtons
                .fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true,
                })
                .then((result) => {
                    if (result.value) {
                        swalWithBootstrapButtons.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        );
                    } else if (
                        // Read more about handling dismissals
                        result.dismiss === swalWithBootstrapButtons.DismissReason.cancel
                    ) {
                        swalWithBootstrapButtons.fire(
                            'Cancelled',
                            'Your imaginary file is safe :)',
                            'error'
                        );
                    }
                });
        });
        document.getElementById('btn6').addEventListener('click', function () {
            swalWithBootstrapButtons.fire({
                title: 'Sweet!',
                text: 'Modal with a custom image.',
                imageUrl: image,
                imageAlt: 'Custom image',
                animation: false,
            });
        });
        document.getElementById('btn7').addEventListener('click', function () {
            swalWithBootstrapButtons.fire({
                title: 'Sweet!',
                text: 'Modal with a custom image.',
                imageUrl: image1,
                imageAlt: 'Custom image',
                animation: false,
            });
        });
        document.getElementById('btn8').addEventListener('click', function () {
            let timerInterval;
            swalWithBootstrapButtons
                .fire({
                    title: 'Auto close alert!',
                    html: 'I will close in <strong></strong> seconds.',
                    timer: 2000,
                    didOpen: () => {
                        Swal.showLoading();
                        timerInterval = setInterval(() => {
                            Swal.getPopup().querySelector(
                                'strong'
                            ).textContent = `${Swal.getTimerLeft()}`;
                        }, 100);
                    },
                    willClose: () => {
                        clearInterval(timerInterval);
                    },
                })
                .then((result) => {
                    if (
                        // Read more about handling dismissals
                        result.dismiss === Swal.DismissReason.timer
                    ) {
                        // console.log('I was closed by the timer');
                    }
                });
        });
        document.getElementById('btn9').addEventListener('click', function () {
            swalWithBootstrapButtons
                .fire({
                    title: 'Enter your name',
                    input: 'text',
                    showCancelButton: true,
                    confirmButtonText: 'Submit',
                    showLoaderOnConfirm: true,
                    preConfirm: async (name) => {
                        await new Promise((resolve) => setTimeout(resolve, 2000));
                        if (name) {
                            return {
                                isValid: true,
                                message: `Welcome, ${name}!`,
                            };
                        } else {
                            return {
                                isValid: true,
                                message: `Please enter a value`,
                            };
                        }
                    },
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(`${result.value.message}!`);
                    }
                });
        });
        document.getElementById('btn10').addEventListener('click', function () {
            swalWithBootstrapButtons.fire({
                title: 'Custom animation with Animate.css',
                showClass: {
                    popup: `
                  animate__animated
                  animate__tada
                `,
                },
            });
        });
        document.getElementById('btn11').addEventListener('click', function () {
            swalWithBootstrapButtons.fire({
                title: 'Custom animation with Animate.css',
                showClass: {
                    popup: `
                    animate__animated
                    animate__rubberBand
                `,
                },
            });
        });
        document.getElementById('btn12').addEventListener('click', function () {
            swalWithBootstrapButtons.fire({
                title: 'Custom animation with Animate.css',
                showClass: {
                    popup: `
                  animate__animated
                  animate__swing
                `,
                },
            });
        });
        document.getElementById('btn16').addEventListener('click', function () {
            swalWithBootstrapButtons.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1500,
            });
        });
        document.getElementById('btn17').addEventListener('click', function () {
            swalWithBootstrapButtons.fire({
                position: 'bottom-start',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1500,
            });
        });
        document.getElementById('btn14').addEventListener('click', async function () {
            const Queue = Swal.mixin({
                text: 'Give your answer below',
                input: 'text',
                confirmButtonText: 'Next &rarr;',
                showCancelButton: true,
                progressSteps: ['1', '2', '3'],
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger',
                },
                buttonsStyling: false,
            });
            const answers = [];
            const name = await Queue.fire({
                title: 'What is your name ?',
                currentProgressStep: 0,
            });
            if (name.isDismissed) return;
            answers.push(name.value);

            const age = await Queue.fire({
                title: 'How old are you ?',
                currentProgressStep: 1,
            });
            if (age.isDismissed) return;
            answers.push(age.value);

            const country = await Queue.fire({
                title: 'Which city you are from ?',
                currentProgressStep: 2,
                confirmButtonText: 'OK',
            });
            if (country.isDismissed) return;
            answers.push(country.value);
            swalWithBootstrapButtons.fire({
                title: 'All done!',
                html: 'Your answers: <pre><code>' + `${answers.join(' ')}` + '</code></pre>',
                confirmButtonText: 'Lovely!',
            });
        });
        document.getElementById('btn15').addEventListener('click', function () {
            const ipAPI = 'https://api.ipify.org?format=json';
            swalWithBootstrapButtons.fire({
                title: 'Your public IP',
                confirmButtonText: 'Show my public IP',
                text: 'Your public IP will be received ' + 'via AJAX request',
                showLoaderOnConfirm: true,
                preConfirm: async () => {
                    return fetch(ipAPI)
                        .then((response) => response.json())
                        .then((data) => swalWithBootstrapButtons.fire(data.ip))
                        .catch(() => {
                            swalWithBootstrapButtons.fire({
                                icon: 'error',
                                title: 'Unable to get your public IP',
                            });
                        });
                },
            });
        });
    });
})(jQuery);
