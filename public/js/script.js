// Hero Swiper - Wait for window load
window.addEventListener("load", function() {
    // Check if hero swiper exists before initializing
    const heroSwiper = document.querySelector(".hero-swiper");
    if (heroSwiper) {
        new Swiper(".hero-swiper", {
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            simulateTouch: true,
            grabCursor: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
        });
    } else {
        console.warn("Hero Swiper element not found");
    }
});

// Toggle Description - Wait for DOMContentLoaded
document.addEventListener("DOMContentLoaded", function() {
    const toggleBtn = document.querySelector(".toggle-description");
    const desc = document.querySelector(".brand-description");

    // Only add event listener if elements exist
    if (toggleBtn && desc) {
        toggleBtn.addEventListener("click", function(e) {
            e.preventDefault();
            desc.classList.toggle("collapsed");
            desc.classList.toggle("expanded");
            toggleBtn.textContent = desc.classList.contains("collapsed") ? "Show More" : "Show Less";
        });
    } else {
        console.warn("Toggle description elements not found");
    }
});