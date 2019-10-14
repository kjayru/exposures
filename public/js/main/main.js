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
});
