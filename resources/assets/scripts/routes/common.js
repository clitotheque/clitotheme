export default {
  init() {
    // JavaScript to be fired on all pages
    $('#menu-switch').click(() => $('#menu').toggleClass('open'))
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
