let offset = 0;
const sliderLine = document.querySelector('.slider-line');

document.querySelector('.slider-next').addEventListener('click', function(){
    offset = offset + 1674;
    if (offset > 5022) {
        offset = 0;
    }
    
    sliderLine.style.left = -offset + 'px';
});

document.querySelector('.slider-prev').addEventListener('click', function () {
    offset = offset - 1674;
    if (offset < 0) {
        offset = 5022;
    }
    sliderLine.style.left = -offset + 'px';
});