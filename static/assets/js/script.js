window.clie

let menuBtn = document.getElementById("menuBtn");
let navbar = document.getElementById("navbar");

menuBtn.addEventListener('click', () => {
    let a = document.documentElement.clientHeight;
    let b = document.querySelector('.menu').clientHeight;
    let c = Number(a) - Number(b) + 'px';

    if (navbar.style.height === c) {
        navbar.style.height = '0';
    } else {
        navbar.style.height = c;
    };
});