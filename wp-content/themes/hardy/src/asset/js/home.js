var jQueryBridget = require('jquery-bridget');
var Flickity = require('flickity');
var asNavFor = require('flickity-as-nav-for');
var fade = require('flickity-fade');

// Use Flickity with jQuery via jQuery Bridget
Flickity.setJQuery( $ );
jQueryBridget( 'flickity', Flickity, $ );

$(document).ready(() => {

  $('#modal-video').on('hidden.bs.modal', function (e) {
    // do something...
    $('#modal-video iframe').attr("src", $("#modal-video iframe").attr("src"));
  });

  // show
  var $carousel = $('.gallery').removeClass('is-hidden');
  // trigger redraw for transition
  $carousel[0].offsetHeight;
  // init Flickity
  $carousel.flickity({
    // options
    fade: true,
    // cellAlign: 'center',
    // contain: true,
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
  });

  $carousel.addClass('flickity-loaded');

  // Gets the video src from the data-src on each button
  
  var $videoSrc;  
  $('.video-btn').click(function() {
      $videoSrc = $(this).data( "src" );
  });
  
  // when the modal is opened autoplay it  
  $('#videoModal').on('shown.bs.modal', function (e) {
      
  // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
  $("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
  })
  
  // stop playing the youtube video when I close the modal
  $('#videoModal').on('hide.bs.modal', function (e) {
      // a poor man's stop video
      $("#video").attr('src',$videoSrc); 
  }) 
    

});
