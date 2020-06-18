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


$("#estadodealer").on('change', function() {

    window.location.href="/distribuidores/zona/"+this.value;
  });

  $("#marcadealer").on('change', function() {

    window.location.href="/distribuidores/marca/"+this.value;
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


$(document).on('click',".btn-edit-billing",function(e){
    e.preventDefault();




    let id = $(this).data('id');


    $.ajax({
        url:'/getdatabill/'+id,
        type:'GET',
        dataType:'json',

        success:function(response){


            /*address1: "asddd asd s122"
address2: null
city_id: 18
colony: null
created_at: "2020-06-02 23:13:21"
email: "demo@demoo.com"
id: 2
lastname: "demo"
name: "demo"
other_phone: "3423423"
phone: "1313123"
state_id: 3
status: 1
type_address: null
updated_at: "2020-06-02 23:55:04"
user_id: 2
zipcode: "234234"*/

            $("#nombre").val(response.name);
            $("#apellidos").val(response.lastname);
            $("#email").val(response.email);
            $("#celular").val(response.phone);
            $("#telefono").val(response.other_phone);
            $("#direccion").val(response.address1);

            //$("#estado").val(response[0].state_id);
            $(`#estado option[value=${response.state_id}]`).attr('selected','selected');
            $("#zipcode").val(response.zipcode);
            $("#tipo").val("editar");
            $("#ciudad").html(`<option value="${response.city_id}">${response.city_name}</option>`);
            $("input[name='_method']").val('PUT');
            $("#ModalBilling form").append(`<input type='hidden' name='id' value='${response.id}'>`);
            $("#ModalBilling").modal('show');
        }
    });


});


$(".btn-save-billing").on('click',function(e){
    e.preventDefault();

    let token = $("meta[name=csrf-token]").attr('content');
    let tipo = $("input[name=_method]").val();

    let nombre = $("#nombre").val();
    let apellidos =  $("#apellidos").val();
    let email =  $("#email").val();
    let celular =  $("#celular").val();
    let telefono =  $("#telefono").val();
    let direccion =  $("#direccion").val();
    let ciudad =  $("#ciudad").val();
    let estado =  $("#estado").val();
    let zipcode =  $("#zipcode").val();
    let id =  $("input[name=id]").val();


    if(tipo=='POST'){

        var datasendbilling = ({'_token':token,'_method':'POST', 'tipo':tipo, 'nombre':nombre, 'apellidos':apellidos, 'celular':celular,'telefono':telefono,'email':email,'direccion':direccion,'ciudad':ciudad,'estado':estado,'zipcode':zipcode});

        $.ajax({
            url:'/checkout/savebilling/',
            type:'POST',
            dataType:'json',
            data:datasendbilling,
            success:function(response){
                if(response.rpta=='ok'){
                    window.location.reload();
                }
            }
        });
    }else{

        var datasendbilling = ({'_token':token,'_method':'PUT','id':id, 'tipo':tipo, 'nombre':nombre, 'apellidos':apellidos, 'celular':celular,'telefono':telefono,'email':email,'direccion':direccion,'ciudad':ciudad,'estado':estado,'zipcode':zipcode});


        $.ajax({
            url:'/checkout/updatebilling/'+id,
            type:'POST',
            dataType:'json',
            data:datasendbilling,
            success:function(response){
                if(response.rpta=='ok'){
                    window.location.reload();
                }
            }
        });
    }



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


/*sidebar*/
jQuery(function ($) {

    $(".sidebar-dropdown > a").click(function() {
    $(".sidebar-submenu").slideUp(200);
    if (
        $(this)
        .parent()
        .hasClass("active")
    ) {
        $(".sidebar-dropdown").removeClass("active");
        $(this)
        .parent()
        .removeClass("active");
    } else {
        $(".sidebar-dropdown").removeClass("active");
        $(this)
        .next(".sidebar-submenu")
        .slideDown(200);
        $(this)
        .parent()
        .addClass("active");
    }
    });

    $("#close-sidebar").click(function() {
    $(".page-wrapper").removeClass("toggled");
    });
    $("#show-sidebar").click(function() {
    $(".page-wrapper").addClass("toggled");
    });


});

$(".recientes").slick({
    slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  centerMode:true,
  });


  $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
    if (!$(this).next().hasClass('show')) {
      $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
    }
    var $subMenu = $(this).next(".dropdown-menu");
    $subMenu.toggleClass('show');


    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
      $('.dropdown-submenu .show').removeClass("show");
    });


    return false;
  });

  $('#search').keypress(function(event){
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13'){
        return true;
    }
});




$('#slideproducto').slick({
    centerMode:true,
    dots: true,
    infinite: true,
    speed: 600,

    cssEase: 'linear',
    arrows: true,
    prevArrow: '<button type="button" class="slick-anterior"><i class="fas fa-chevron-left"></i></button>',
    nextArrow: '<button type="button" class="slick-siguiente"><i class="fas fa-chevron-right"></i></ button>',
    autoplay: true,
    autoplaySpeed: 6000,
    onAfterChange: function() {
        player.stopVideo();
    }

});


$("#estado").change(function(){
    var valor = $(this).val();

    var ciudades = null;
    let token = $("meta[name=csrf-token]").attr('content');


    var datasend = ({'id':valor,'_token':token,'_method':'POST'});

     $.ajax({
         url:'/getciudades',
         type:'POST',
         dataType:'json',
         data:datasend,
         success:function(response){
             $.each(response,function(i,e){

                 ciudades +=`<option value="${e.id}">${e.name}</option>`;
             })

           $("#ciudad").html(ciudades);
         }
     });
})


$('#recientes').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 4,
    dots: true,
    speed: 600,
    cssEase: 'linear',

    arrows: true,
    prevArrow: '<button type="button" class="slick-anterior"><i class="fas fa-chevron-left"></i></button>',
    nextArrow: '<button type="button" class="slick-siguiente"><i class="fas fa-chevron-right"></i></ button>',
    autoplay: true,
    autoplaySpeed: 6000,
    onAfterChange: function() {
        player.stopVideo();
    }

});



    $('.btn-face').click(function(e){
        e.preventDefault();
        var paginaget = window.location.href;
        var ogname = document.querySelector('meta[property="og:title"]').content;
        var ogdescripcion = document.querySelector('meta[property="og:description"]').content;
        var ogimagen = $(this).data('image');
        FB.ui({
            method: 'feed',
            name:`${ogname}`,
            link: `${paginaget}`,
            caption: `${ogdescripcion}`,
            image: `${ogimagen}`,
            description: `${ogdescripcion}`

        });
    });

