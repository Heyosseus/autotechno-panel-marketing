document.addEventListener('DOMContentLoaded', function () {
    const carousel = document.getElementById('carouselExampleControls');
    const items = carousel.querySelectorAll('[data-carousel-item]');
    const prevButton = carousel.querySelector('[data-carousel-prev]');
    const nextButton = carousel.querySelector('[data-carousel-next]');

    let currentIndex = 0;
    let slideInterval;

    function showSlide(index) {
        items.forEach((item, i) => {
            item.classList.toggle('hidden', i !== index);
        });

        // Reset the interval whenever a slide changes
        resetInterval();
    }

    function resetInterval() {
        clearInterval(slideInterval);
        slideInterval = setInterval(() => {
            currentIndex = (currentIndex === items.length - 1) ? 0 : currentIndex + 1;
            showSlide(currentIndex);
        }, 3000);
    }

    prevButton.addEventListener('click', () => {
        currentIndex = (currentIndex === 0) ? items.length - 1 : currentIndex - 1;
        showSlide(currentIndex);
    });

    nextButton.addEventListener('click', () => {
        currentIndex = (currentIndex === items.length - 1) ? 0 : currentIndex + 1;
        showSlide(currentIndex);
    });

    // Initialize carousel with the first slide and start the interval
    showSlide(currentIndex);
});
