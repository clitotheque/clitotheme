import 'corejs-typeahead/dist/typeahead.bundle.min'

export default {
  init() {
    // JavaScript to be fired on all pages

    /* Menu button */
    $('#menu-switch').click(() => $('#menu').toggleClass('open'));

    /* Typeahead */

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
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
