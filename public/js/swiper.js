const swiper1 = new Swiper(".heroswiper", {
  // Optional parameters
  loop: true,
  direction: "vertical",
  // effect: "coverflow",
  speed: 800,
  mousewheelControl: false,
  watchSlidesProgress: true,
  slidesPerView: 1,
  spaceBetween: 30,
  allowTouchMove: false,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  keyboard: {
    enabled: true,
  },
  autoplay: {
    delay: 10000, // Delay between slides in milliseconds (3 seconds in this example)
    disableOnInteraction: false, // Autoplay continues even when user interacts with the slider
  },
});
var testimonialVideo = new Swiper(".testimonialVideo", {
  effect: "coverflow",
  grabCursor: false,
  centeredSlides: true,
  slidesPerView: 2,
  initialSlide: 1,
  spaceBetween: 50,
  loop: true,
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 180,
    modifier: 3,
    slideShadows: true,
  },
  keyboard: {
    enabled: true,
  },
  autoplay: {
    delay: 10000, // Delay between slides in milliseconds (3 seconds in this example)
    disableOnInteraction: false, // Autoplay continues even when user interacts with the slider
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 0,
      effect: "slide",
      allowTouchMove: false,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 0,
    },
  },
});
var testimonialReview = new Swiper(".testimonialReview", {
  loop: true,
  effect: "flip",
  grabCursor: true,
  flipEffect: {
    rotate: 30,
    slideShadows: false,
  },
  autoplay: {
    delay: 10000,
    disableOnInteraction: false,
  },
});
var clientPartners = new Swiper(".mySwiper", {
  slidesPerView:1,
  spaceBetween: 10,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 50,
    },
  },
});
var scoreCardSlide = new Swiper(".scoreCardSlide", {
  effect: "coverflow",
  grabCursor: false,
  centeredSlides: true,
  slidesPerView: 3,
  initialSlide: 1,
  spaceBetween: 0,
  loop: true,
  coverflowEffect: {
    rotate: 48,
    stretch: 0,
    depth: 180,
    modifier: 3,
    slideShadows: false,
  },

  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 0,
      effect: "slide",
      allowTouchMove: false,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 0,
    },
  },
  navigation: {
    nextEl: ".card-next",
    prevEl: ".card-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});