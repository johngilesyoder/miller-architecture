var $ = require('jquery');
var jQueryBridget = require('jquery-bridget');
var Flickity = require('flickity');
var asNavFor = require('flickity-as-nav-for');

// Use Flickity with jQuery via jQuery Bridget
Flickity.setJQuery( $ );
jQueryBridget( 'flickity', Flickity, $ );

if ( !Modernizr.objectfit ) {
  $('.project-block').each(function () {
    var $container = $(this),
        imgUrl = $container.find('img').prop('src');
    if (imgUrl) {
      $container
        .css('backgroundImage', 'url(' + imgUrl + ')')
        .addClass('compat-object-fit');
    }
  });
}

$(document).ready(() => {

  // show
  var $carousel = $('.gallery').removeClass('is-hidden');
  // trigger redraw for transition
  $carousel[0].offsetHeight;
  // init Flickity
  $carousel.flickity({
    // options
    cellAlign: 'center',
    contain: true,
    initialIndex: 0,
    wrapAround: true,
    imagesLoaded: true,
    pageDots: false,
    setGallerySize: false,
    lazyLoad: 2
  });

  $carousel.addClass('flickity-loaded');

});
