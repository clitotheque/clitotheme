import 'slick-carousel'


export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    $("#featured_slider").slick({
      infinite: true,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 3000,
      slidesToShow: 3,
      slidesToScroll: 1,
      swipeToSlide: true,
      responsive: [{
        breakpoint: 1100,
        settings: {
          slidesToShow: 2
        }
      }, {
        breakpoint: 512,
        settings: {
          slidesToShow: 1
        }
      }]
    });
  },
};
