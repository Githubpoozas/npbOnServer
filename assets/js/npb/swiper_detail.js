var galleryThumbs = new Swiper(".gallery-thumbs", {
  spaceBetween: 5,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
  allowTouchMove: false
});
var galleryTop = new Swiper(".gallery-top", {
  slidesPerView: "auto",
  spaceBetween: 3,
  thumbs: {
    swiper: galleryThumbs
  },
  grabCursor: true
});
