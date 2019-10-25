$(window).on('load',function(){
  console.log('cargado...');
  $(".slide-home").slick({
    dots: true,
    infinite: false,
    autoplay: true,
    speed: 500,
    fade: true,
    cssEase: 'linear'
  });

  $(".paginas img").addClass('img-fluid');
  $(".wp-block-group__inner-container").addClass('row');

});

