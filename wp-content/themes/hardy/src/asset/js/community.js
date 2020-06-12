var jQueryBridget = require('jquery-bridget');
var Flickity = require('flickity');
var asNavFor = require('flickity-as-nav-for');

// Use Flickity with jQuery via jQuery Bridget
Flickity.setJQuery( $ );
jQueryBridget( 'flickity', Flickity, $ );

$(document).ready(() => {

  // init Flickity
  $('.gallery').flickity({
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

  // show carousel after modal shown
  $('.modal').on( 'shown.bs.modal', function( event ) {
    // Inject the dynamic data into the modal
    var button = $(event.relatedTarget); // Button that triggered the modal
    var title = button.data('modal-title'); // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this);
    modal.find('.modal-title').text(title);
    // Resize the flickity carousel
    $('.gallery').flickity('resize');
  });

});