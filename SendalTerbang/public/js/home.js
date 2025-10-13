document.addEventListener("DOMContentLoaded", function () {
    const track = document.querySelector(".slider-track");
    const slides = document.querySelectorAll(".slide");
    const dots = document.querySelectorAll(".slider-dot");
    const prevBtn = document.querySelector(".slider-arrow.prev");
    const nextBtn = document.querySelector(".slider-arrow.next");
    let currentSlide = 0;
    const slideCount = slides.length;

    // Function to update slider position
    function updateSlider() {
        track.style.transform = `translateX(-${currentSlide * 100}%)`;

        // Update active dot
        dots.forEach((dot, index) => {
            dot.classList.toggle("active", index === currentSlide);
        });
    }

    // Next slide function
    function nextSlide() {
        currentSlide = (currentSlide + 1) % slideCount;
        updateSlider();
    }

    // Previous slide function
    function prevSlide() {
        currentSlide = (currentSlide - 1 + slideCount) % slideCount;
        updateSlider();
    }

    // Event listeners for buttons
    nextBtn.addEventListener("click", nextSlide);
    prevBtn.addEventListener("click", prevSlide);

    // Event listeners for dots
    dots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
            currentSlide = index;
            updateSlider();
        });
    });

    // Auto slide (optional)
    let slideInterval = setInterval(nextSlide, 5000);

    // Pause auto slide on hover
    const sliderContainer = document.querySelector(".slider-container");
    sliderContainer.addEventListener("mouseenter", () => {
        clearInterval(slideInterval);
    });

    sliderContainer.addEventListener("mouseleave", () => {
        slideInterval = setInterval(nextSlide, 5000);
    });
});
