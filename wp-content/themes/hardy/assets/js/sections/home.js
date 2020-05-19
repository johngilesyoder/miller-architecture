(function ($, root, undefined) {

  $(function () {

    'use strict';

    $('#modal-video').on('hidden.bs.modal', function (e) {
  	  // do something...
  	  $('#modal-video iframe').attr("src", $("#modal-video iframe").attr("src"));
  	});

  });

})(jQuery, this);
