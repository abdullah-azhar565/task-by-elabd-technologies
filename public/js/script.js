window.addEventListener("load", function () {
    var swiper = new Swiper(".hero-swiper", {
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
            delay: 4000, // 4 seconds between slides
            disableOnInteraction: false, // don't stop autoplay when user interacts
        },
    });
});






// Second Page 

  document.addEventListener("DOMContentLoaded", function () {
    const toggleBtn = document.querySelector(".toggle-description");
    const desc = document.querySelector(".brand-description");

    toggleBtn.addEventListener("click", function (e) {
      e.preventDefault();
      desc.classList.toggle("collapsed");
      desc.classList.toggle("expanded");
      toggleBtn.textContent = desc.classList.contains("collapsed") ? "Show More" : "Show Less";
    });
  });

