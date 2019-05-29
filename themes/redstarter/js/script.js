(function($) {
  $('.icon-search').on('click', function(event) {
    event.preventDefault();
    // $('.search-field').toggle('slow');
    $('#search-label').toggleClass('after-click');
    $('#search-label').focus();
  });
  $('#search-label').on('blur', function(event) {
    event.preventDefault();
    
    $('#search-label').removeClass('after-click');
  });
})(jQuery);
