
const swiper = new Swiper(".swiper", {
  effect: "coverflow",
  grabcursor: true,
  centeredSlides: true,
  slidesPerView: "3",
  direction: "horizontal",
  spaceBetween: 70,


  coverflowEffect: {
    rotate: 55,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: false,
  },

  loop: true,
  loopedSlides: 3,
  loopAdditionalSlides: 0,
  autoplay: {
    delay: 1000,
    disableOnInteraction: false,
  },

  speed: 800,
});
