var jQueryBridget = require('jquery-bridget');
var Flickity = require('flickity');
var asNavFor = require('flickity-as-nav-for');
var fade = require('flickity-fade');

// Use Flickity with jQuery via jQuery Bridget
Flickity.setJQuery( $ );
jQueryBridget( 'flickity', Flickity, $ );

$(document).ready(() => {

  var $projectCarousel = jQuery('.project-gallery').removeClass('is-hidden');
	// trigger redraw for transition
	$projectCarousel[0].offsetHeight;
	// init Flickity
	$projectCarousel.flickity({
		// options
		cellAlign: 'center',
		contain: true,
		initialIndex: 0,
		wrapAround: true,
		imagesLoaded: true,
		pageDots: false,
		setGallerySize: false,
		lazyLoad: 2,
    autoPlay: 4000,
    prevNextButtons: false,
    pauseAutoPlayOnHover: false,
	});

	$projectCarousel.addClass('flickity-loaded');

});