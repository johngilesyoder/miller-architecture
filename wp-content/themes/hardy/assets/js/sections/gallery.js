(function ($, root, undefined) {

  $(function () {

    'use strict';

    //init Isotope after all images have loaded
    var $grid = $('.grid').imagesLoaded( function() {
      $grid.isotope({
        itemSelector: '.grid-item',
        percentPosition: true,
        masonry: {
          columnWidth: '.grid-sizer'
        }
      });
    });

    // Function that filters the images
    function filterImages($element) {
      var filterValue = $element.attr('data-filter');
      $grid.isotope({ filter: filterValue });
    }

    // Add class once Isotope is completely laid out
    $grid.on( 'layoutComplete', function( event, laidOutItems ) {
      $('.grid').addClass('layout-complete');
    });

    // bind events to buttons
    $(document).on( 'click', '[data-filter]', function() {
      // do the thing
      filterImages($(this));
      // Mirror the <select>
      $('#filter-select').find('option[data-filter="' + $(this).data('filter') + '"]').attr('selected', 'selected');
    });
    // bind events to select
    $(document).on('change', '#filter-select', function() {
      var $selectedOption = $(this).find('option:selected')
      // do the thing
      filterImages($selectedOption);
      // Mirror the buttons
      $('.filter-buttons .is-checked').removeClass('is-checked');
      $('button[data-filter="' + $selectedOption.data('filter') + '"]').addClass('is-checked');
    });

    // change is-checked class on buttons
    $('.filter-buttons').each( function( i, buttonGroup ) {
      var $buttonGroup = $( buttonGroup );
      $buttonGroup.on( 'click', 'button', function() {
        $buttonGroup.find('.is-checked').removeClass('is-checked');
        $( this ).addClass('is-checked');
      });
    });

  });

})(jQuery, this);
