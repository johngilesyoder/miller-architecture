(function ($, root, undefined) {

  $(function () {

    'use strict';

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

    $(document).ready(function() { 
      $('#category').on('change', function(){
        window.location.href = this.value;
      }); 
    });

  });

})(jQuery, this);
