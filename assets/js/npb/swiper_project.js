// slide 2
var swiper2 = new Swiper(".swiper-container__slide2", {
  autoplay: {
    delay: 3000,
    disableOnInteraction: false
  },
      slidesPerView: 5,
      slidesPerColumn: 2,
      slidesPerGroup: 5,
      spaceBetween: 0,
  breakpoints: {
    600: {
      slidesPerView: 5,
      slidesPerColumn: 2,
      slidesPerGroup: 5,
      spaceBetween: 10,
    },
       900: {
      slidesPerView: 5,
      slidesPerColumn: 2,
      slidesPerGroup: 5,
      spaceBetween: 10,
    }
  },

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  },
  grabCursor: true
});

