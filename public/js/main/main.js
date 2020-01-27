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


//addproducto
$(".btn-add-producto").on('click',function(e){
    e.preventDefault();
    let id = $(this).data('id');
    let token = $("meta[name=csrf-token]").attr('content');

    var datasend = ({'id':id,'_token':token,'_method':'POST'});

    $.ajax({
        url:'/addproduct',
        type:'POST',
        dataType:'json',
        data:datasend,
        success:function(response){
            if(response.rpta=='ok'){
                $("#modaladdprod").modal('show');
            }
        }
    });


});

$(".btn-remove-prod").on('click',function(e){
    e.preventDefault();

    let id = $(this).data('id');
    let token = $("meta[name=csrf-token]").attr('content');

    var datasend = ({'id':id,'_token':token,'_method':'POST'});

    $.ajax({
        url:'/getremoveitem',
        type:'POST',
        dataType:'json',
        data:datasend,
        success:function(response){
            if(response.rpta=='ok'){
                window.location.reload();
            }
        }
    });


});


$(".btn-modificar-address").on('click',function(e){
    e.preventDefault();
    $(".adractivo").hide();
    $(".adrselect").show();
});


$(".btn-edit-address").on('click',function(e){
    e.preventDefault();
    $("#ModalBilling").modal('show');
});


$(".btn-save-billing").on('click',function(e){
    e.preventDefault();

    let token = $("meta[name=csrf-token]").attr('content');
    let tipo = $("input[name=tipo]").val();

    let nombre = $("#nombre").val();
    let apellidos =  $("#apellidos").val();
    let celular =  $("#celular").val();
    let telefono =  $("#telefono").val();
    let direccion =  $("#direccion").val();
    let ciudad =  $("#ciudad").val();
    let estado =  $("#estado").val();
    let zipcode =  $("#zipcode").val();

    var datasendbilling = ({'_token':token,'_method':'POST', 'tipo':tipo, 'nombre':nombre, 'apellidos':apellidos, 'celular':celular,'telefono':telefono,'direccion':direccion,'ciudad':ciudad,'estado':estado,'zipcode':zipcode});

    $.ajax({
        url:'/checkout/savebilling',
        type:'POST',
        dataType:'json',
        data:datasendbilling,
        success:function(response){
            if(response.rpta=='ok'){
                window.location.reload();
            }
        }
    });



});

$(".btn-add-address").on('click',function(e){
    e.preventDefault();
    $("#ModalBilling").modal('show');
});


$(".option-card").on('click',function(){


    let token = $("meta[name=csrf-token]").attr('content');
    let id =  $(this).data('id');
    let userid = $(this).data('userid');
    $(".inputdeterminado").removeAttr("checked");

    let idem = $(this).children('label').children('.opcion').children("input").attr("checked",true);

    var datasend = ({'_token':token,'_method':'POST', 'id':id,'userid':userid});

    $.ajax({
        url:'/checkout/activestatus',
        type:'POST',
        dataType:'json',
        data:datasend,
        success:function(response){
            if(response.rpta=='ok'){
                window.location.reload();
            }
        }
    });
});
