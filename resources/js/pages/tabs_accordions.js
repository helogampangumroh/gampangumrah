(function ($) {
    'use strict';
    const popoverTriggerLst = document.querySelectorAll('[data-bs-toggle="popover"]');
    const popoverList = [...popoverTriggerLst].map(
        (popoverTriggerEl) => new bootstrap.Popover(popoverTriggerEl)
    );

    const popoverTriggerList = document.querySelectorAll('.po-markup > .po-link');

    [...popoverTriggerList].forEach((popoverTriggerEl) => {
        popoverTriggerEl.addEventListener('click', function () {
            const titleContent = this.parentElement.querySelector('.po-title').innerHTML;
            const bodyContent = this.parentElement.querySelector('.po-body').innerHTML;
            const popover = new bootstrap.Popover(this, {
                html: true,
                title: titleContent,
                content: bodyContent,
                container: 'body',
                placement: 'right',
            });
            popover.show();
        });
    });

    const tooltipTriggerEls = document.querySelectorAll('.tooltip-examples a');

    tooltipTriggerEls.forEach((element) => {
        new bootstrap.Tooltip(element, {
            placement: 'top',
        });
    });

    $('#myTabContent').slimscroll({
        height: '130px',
        size: '3px',
        color: '#D84A38',
        opacity: 1,
    });
    $('#slim1').slimscroll({
        height: '100px',
        size: '3px',
        color: '#D84A38',

        opacity: 1,
    });
    $('#slim2').slimscroll({
        height: '120px',
        size: '3px',
        color: '#35AA47',
        opacity: 1,
    });
    $('#slim3').slimscroll({
        height: '100px',
        size: '3px',
        color: '#FE6A0A',
        opacity: 1,
    });
})(jQuery);
