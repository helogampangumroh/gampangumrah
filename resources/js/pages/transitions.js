'use strict';
function testAnim(x, str) {
    const element = document.getElementById('animationSandbox' + str);
    element.className = '';
    element.classList.add('animate__animated', 'animate__' + x);
    element.addEventListener('animationend', function () {
        element.className = '';
    });
}

function testAnim1(str) {
    const x = document.getElementById('s' + str).value;
    const element = document.getElementById('animationSandbox' + str);
    element.className = '';
    element.classList.add('animate__animated', 'animate__' + x);
    element.addEventListener('animationend', function () {
        element.className = '';
    });
}
