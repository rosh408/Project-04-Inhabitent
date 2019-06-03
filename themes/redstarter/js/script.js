(function($) {
  $(function() {
    const $search = $('#search-label');
    $('.icon-search').on('click', function(event) {
      event.preventDefault();
      $search.toggleClass('after-click');
      $search.focus();
    });
    $search.on('blur', function(event) {
      event.preventDefault();

      if ($search.val().length > 0) {
        $('after-click').css('display', 'block');
      } else {
        $search.removeClass('after-click');
      }

    });
  });
})(jQuery);
