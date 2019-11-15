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

$('#sliderHome').nivoSlider({
  effect: 'random',
    slices: 15,
    boxCols: 8,
    boxRows: 4,
    animSpeed: 500,
    pauseTime: 3000,
    startSlide: 0,
    directionNav: true,
    controlNav: true,
    controlNavThumbs: false,
    pauseOnHover: true,
    manualAdvance: false,
    prevText: 'Prev',
    nextText: 'Next'
});

$('#sliderEmpresa').nivoSlider({
  effect: 'random',
    slices: 15,
    boxCols: 8,
    boxRows: 4,
    animSpeed: 500,
    pauseTime: 3000,
    startSlide: 0,
    directionNav: true,
    controlNav: true,
    controlNavThumbs: false,
    pauseOnHover: true,
    manualAdvance: false,
    prevText: 'Prev',
    nextText: 'Next'
});

$(".dealer iframe").addClass('mapsFrame');

$('.carousel').carousel({
    interval: 10000
  })
