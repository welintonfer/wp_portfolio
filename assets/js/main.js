window.addEventListener('scroll', function () {
    var header = document.getElementById('header');
    if (window.scrollY > 70) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const carousel = document.querySelector('.carousel');
    const bullets = document.querySelectorAll('.bullets a');
    const items = document.querySelectorAll('.carousel li');
    const itemsPerPage = 3;
    const totalItems = items.length;
    let currentIndex = 0;

    // Clone the first itemsPerPage items and append them to the end of the carousel
    for (let i = 0; i < itemsPerPage; i++) {
        const clone = items[i].cloneNode(true);
        carousel.appendChild(clone);
    }

    function updateCarousel() {
        const offset = -currentIndex * (100 / itemsPerPage);
        carousel.style.transition = 'transform 0.5s ease';
        carousel.style.transform = `translateX(${offset}%)`;

        bullets.forEach((bullet, index) => {
            bullet.querySelector('.the-bullet').classList.toggle('active', index === Math.floor(currentIndex / itemsPerPage));
        });
    }

    function resetCarousel() {
        if (currentIndex >= totalItems) {
            carousel.style.transition = 'none';
            currentIndex = 0;
            const offset = -currentIndex * (100 / itemsPerPage);
            carousel.style.transform = `translateX(${offset}%)`;
        }
    }

    bullets.forEach((bullet) => {
        bullet.addEventListener('click', function (event) {
            event.preventDefault();
            currentIndex = parseInt(bullet.getAttribute('data-index'));
            updateCarousel();
        });
    });

    // Add auto navigation
    setInterval(() => {
        currentIndex++;
        updateCarousel();
        setTimeout(resetCarousel, 600); // Delay to allow the transition to complete
    }, 3000); // Change every 3 seconds

    updateCarousel();
});
