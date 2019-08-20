var target = $('#primary').offset().top,
  timeout = null;

jQuery(window).scroll(function() {
  if (!timeout) {
    timeout = setTimeout(function() {
      clearTimeout(timeout);
      timeout = null;
      if (
        $(window).scrollTop() >= target &&
        !$('body').hasClass('header-is-sticky')
      ) {
        $('body').addClass('header-is-sticky');
        console.log('dodata klasa');
      } else if (
        $(window).scrollTop() < target &&
        $('body').hasClass('header-is-sticky')
      ) {
        $('body').removeClass('header-is-sticky');
        console.log('izbrisana klasa');
      }
    }, 100);
  }
});
