import 'swiper/css/bundle';
import Swiper from 'swiper/bundle';

let swiper2 = new Swiper(".mySwiper", {
    effect: "cube",
    grabCursor: true,
    cubeEffect: {
      shadow: true,
      slideShadows: true,
      shadowOffset: 20,
      shadowScale: 0.94,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });


const swiper = new Swiper(".my-slider", {
    // تنظیمات اختیاری
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

const titleElement = document.getElementById("product-title");

// انیمیشن اسکرول به بالا
window.addEventListener("scroll", () => {
  if (window.scrollY > 100) {
    titleElement.classList.add("animated");
  } else {
    titleElement.classList.remove("animated");
  }
});

// انیمیشن اسکرول به پایین
window.addEventListener("scroll", () => {
  if (window.scrollY > 500) {
    titleElement.classList.add("animated-down");
  } else {
    titleElement.classList.remove("animated-down");
  }
});

// انیمیشن کلیک
titleElement.addEventListener("click", () => {
  titleElement.classList.add("animated-click");
  setTimeout(() => {
    titleElement.classList.remove("animated-click");
  }, 300);
});
