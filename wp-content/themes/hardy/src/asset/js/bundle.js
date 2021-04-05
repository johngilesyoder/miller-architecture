var jQueryBridget = require('jquery-bridget');
var Flickity = require('flickity');
var asNavFor = require('flickity-as-nav-for');
var fade = require('flickity-fade');
require('flickity-imagesloaded');
require('flickity-bg-lazyload');

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
  
    // // enable prev/next buttons at 768px
    // if ( matchMedia('screen and (min-width: 768px)').matches ) {
    //   options.fade = true
    // }
  
    // show
    var $thumbCarousel = $('.thumb-carousel');
    // trigger redraw for transition
    $thumbCarousel[0].offsetHeight;
    // init Flickity
    $thumbCarousel.flickity(options);
  
    $thumbCarousel.addClass('flickity-loaded');

  var $carousel = jQuery('.gallery').removeClass('is-hidden');
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
		setGallerySize: false,
		//lazyLoad: 2,
    autoPlay: 4000,
    prevNextButtons: false,
    pauseAutoPlayOnHover: false,
	});

	$carousel.addClass('flickity-loaded');

});