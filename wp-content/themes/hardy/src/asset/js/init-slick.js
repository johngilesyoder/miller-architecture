(function ($, root, undefined) {
  $(function () {
    'use strict';
    // DOM ready, take it away
    $(document).ready(function() {
      $('.gallery').slick({
        autoplay: true,
        autoPlaySpeed: 4000,
        arrows: false,
        dots: true,
        infinite: true,
        pauseOnFocus: false,
        pauseOnHover: false,
        speed: 3000,
        fade: true,
        cssEase: 'linear'
      });
    });
  });
});