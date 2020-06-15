var jQueryBridget = require('jquery-bridget');
var Flickity = require('flickity');
var asNavFor = require('flickity-as-nav-for');
var fade = require('flickity-fade');

// Use Flickity with jQuery via jQuery Bridget
Flickity.setJQuery( $ );
jQueryBridget( 'flickity', Flickity, $ );

$(document).ready(() => {

  // Flickity options, defaults
  var options = {
    initialIndex: 0,
    wrapAround: true,
    imagesLoaded: true,
    pageDots: false,
    setGallerySize: false,
    lazyLoad: 2,
    prevNextButtons: false,
    autoPlay: true,
    draggable: false,
    pauseAutoPlayOnHover: false
  };

  // enable prev/next buttons at 768px
  if ( matchMedia('screen and (min-width: 768px)').matches ) {
    options.fade = true
  }

  // show
  var $carousel = $('.gallery').removeClass('is-hidden');
  // trigger redraw for transition
  $carousel[0].offsetHeight;
  // init Flickity
  $carousel.flickity(options);

  $carousel.addClass('flickity-loaded');

});
