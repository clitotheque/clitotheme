import 'corejs-typeahead/dist/typeahead.bundle.min'

export default {
  init() {
    // JavaScript to be fired on all pages

    /* Menu button */
    $('#menu-switch').click(() => $('#menu').toggleClass('open'));

    $('.check_age').click((e) => {
      const message = $(this).context.activeElement.dataset.message;
      if (!confirm(message.replace(".", ".\r\n"))) {
        e.preventDefault();
      }
    });

    /* Typeahead

    var substringMatcher = function(strs) {
      return function findMatches(q, cb) {
        var matches, substrRegex;

        // an array that will be populated with substring matches
        matches = [];

        // regex used to determine if a string contains the substring `q`
        substrRegex = new RegExp(q, 'i');

        // iterate through the pool of strings and for any string that
        // contains the substring `q`, add it to the `matches` array
        $.each(strs, function(i, str) {
          if (substrRegex.test(str)) {
            matches.push(str);
          }
        });

        cb(matches);
      };
    };

    $('.main-search').typeahead({
      hint: true,
      highlight: true,
      minLength: 1
    },
    {
      name: 'states',
      source: substringMatcher(terms_res_types)
    });

    $('.main-search').bind('typeahead:select', function(ev, suggestion) {
      $('#main-search').submit();
    });*/
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
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
