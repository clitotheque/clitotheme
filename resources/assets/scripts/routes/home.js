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
      mobileFirst: true,
      autoplaySpeed: 3000,
      slidesToShow: 1,
      slidesToScroll: 1,
      swipeToSlide: true,
      responsive: [{
        breakpoint: 2000,
        settings: {
          slidesToShow: 5
        }
      }, {
        breakpoint: 1500,
        settings: {
          slidesToShow: 4
        }
      }, {
        breakpoint: 1050,
        settings: {
          slidesToShow: 3
        }
      }, {
        breakpoint: 630,
        settings: {
          slidesToShow: 2
        }
      }]
    });
  },
};
