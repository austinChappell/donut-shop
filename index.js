$(document).ready(function(){
  $('#home').on('click', function(){
    $('html, body').animate({
      scrollTop: $('#home-section').offset().top
    }, 1000);
    $('#bs-example-navbar-collapse-1').removeClass('in');
  });
  $('#our-story').on('click', function(){
    $('html, body').animate({
      scrollTop: $('#story-section').offset().top - 60
    }, 1000);
    $('#bs-example-navbar-collapse-1').removeClass('in');
  });
  $('#our-menu').on('click', function(){
    $('html, body').animate({
      scrollTop: $('#menu-section').offset().top - 60
    }, 1000);
    $('#bs-example-navbar-collapse-1').removeClass('in');
  });
  $('#locations').on('click', function(){
    $('html, body').animate({
      scrollTop: $('#locations-section').offset().top - 60
    }, 1000);
    $('#bs-example-navbar-collapse-1').removeClass('in');
  });
  $('#order').on('click', function(){
    $('html, body').animate({
      scrollTop: $('#order-section').offset().top - 60
    }, 1000);
    $('#bs-example-navbar-collapse-1').removeClass('in');
  });
});
