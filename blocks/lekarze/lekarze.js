var swiper = new Swiper(".lek", {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  grabCursor: true,
  autoplay: {
    delay: 3500,
    disableOnInteraction: false
  },
  pagination: {
    el: ".swiper-pagination"
  },
  breakpoints: {
    640: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    1024: {
      slidesPerView: 2,
      spaceBetween: 30
    }
  }
});
