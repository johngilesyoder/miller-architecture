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