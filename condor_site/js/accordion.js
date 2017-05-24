
  $(document).ready(function () {
    $('.toggle li').click(function () {
      $('div.panel').slideUp('500');
      $('li').children('span').html('+');
      var text = $(this).children('div.panel');

      if (text.is(':hidden')) {
	 text.slideDown('500');
	 $(this).children('span').html('-');
      } else {
	 text.slideUp('500');
	 $(this).children('span').html('+');
      }

    });
  });
