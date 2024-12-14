

let currentIndex = 0;
const items = document.querySelectorAll('.slider .list .item');
const thumbnails = document.querySelectorAll('.thumbnail .item');
const prevButton = document.querySelector('.nextPrevArrows .prev');
const nextButton = document.querySelector('.nextPrevArrows .next');

function showSlide(index) {
    items.forEach((item, i) => {
        item.style.opacity = i === index ? '1' : '0';
    });
    thumbnails.forEach((thumb, i) => {
        thumb.style.opacity = i === index ? '1' : '0.5';
    });
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % items.length;
    showSlide(currentIndex);
}

function prevSlide() {
    currentIndex = (currentIndex - 1 + items.length) % items.length;
    showSlide(currentIndex);
}

nextButton.addEventListener('click', nextSlide);
prevButton.addEventListener('click', prevSlide);

setInterval(nextSlide, 5000); // Change slide every 5 seconds
showSlide(currentIndex); // Initial call to show the first slide




