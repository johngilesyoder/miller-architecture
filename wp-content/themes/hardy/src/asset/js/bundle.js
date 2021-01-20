var jQueryBridget = require('jquery-bridget');
var Flickity = require('flickity');
var asNavFor = require('flickity-as-nav-for');
var bgLazyLoad = require('flickity-bg-lazyload');
var fade = require('flickity-fade');

// Use Flickity with jQuery via jQuery Bridget
Flickity.setJQuery( $ );
jQueryBridget( 'flickity', Flickity, $ );

$(document).ready(() => {

  // Flickity options, defaults
  var options = {
    initialIndex: 0,
    wrapAround: true,
    // lazyLoad: 2,
    prevNextButtons: false,
    autoPlay: true,
    draggable: false,
    pauseAutoPlayOnHover: false,
    imagesLoaded: true, 
    setGallerySize: false,
    bgLazyLoad: true,
    cellAlign: "left"
  };

  // enable prev/next buttons at 768px
  if ( matchMedia('screen and (min-width: 768px)').matches ) {
    options.fade = true
  }

  // show
  var $carousel = $('.carousel').removeClass('is-hidden');
  // trigger redraw for transition
  $carousel[0].offsetHeight;
  // init Flickity
  $carousel.flickity(options);

  $carousel.addClass('flickity-loaded');

});
