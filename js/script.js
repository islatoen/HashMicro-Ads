// Owlcarousel
$(document).ready(function () {
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    center: true,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      992: {
        items: 3,
      },
    },
  });
});

$(function ($) {
  $('.panel_button').click(function () {
    $('.fly-content').animate({
      width: 'toggle',
      opacity: 'toggle',
    });
  });
  $('.fly-box').click(function () {
    $('.fly-content').animate({
      width: 'toggle',
      opacity: 'toggle',
    });
  });
});
