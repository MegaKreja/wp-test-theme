var target = $('#primary').offset().top,
  timeout = null;

jQuery(window).scroll(function() {
  if (
    $(window).scrollTop() >= target &&
    !$('nav').hasClass('header-is-sticky')
  ) {
    $('nav').addClass('header-is-sticky animated bounceInDown');
    $('.navbar').css({ position: 'fixed' });
    console.log('dodata klasa');
  } else if (
    $(window).scrollTop() < target &&
    $('nav').hasClass('header-is-sticky')
  ) {
    $('nav').removeClass('header-is-sticky animated bounceInDown');
    $('.navbar').css({ position: 'absolute' });
    console.log('izbrisana klasa');
  }
});

$(
  '.menu-item-47 .menu-item-46 .menu-item-45 .menu-item-44 .menu-item-43'
).click(function() {
  $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 500);
});
