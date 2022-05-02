let scroller = document.querySelector('.slider-container');
let slider = document.querySelector('.slider');
let slide = document.getElementsByClassName('slide');
// add slide width set slider 100% * slide length
slider.style.width = slide.length * 100 + "%";
let prev = document.getElementById('prev');
let next = document.getElementById('next');

show = (e) => {
    scroller.scroll({
        left: scroller.scrollLeft + e,
        behavior: 'smooth'
    });
};
let slider_width = (slide.length - 1) * innerWidth;

// for prev button
prev.addEventListener('click', () => {
    show(-innerWidth);
    if (scroller.scrollLeft == 0) {
        setTimeout(() => {
            scroller.scrollLeft = slider_width;
            show(-innerWidth);
        }, 0);
    }
});

next.addEventListener('click', () => {
    show(innerWidth);
    if (scroller.scrollLeft == slider_width) {
        setTimeout(() => {
            scroller.scrollLeft = 0;
            show(innerWidth);
        }, 0);
    }
});
// for suto slider
setInterval(() => {
    show(innerWidth);
    if (scroller.scrollLeft === slider_width) {
        setTimeout(() => {
            scroller.scrollLeft = 0;
            show(innerWidth);
        }, 0);
    }
}, 3000);