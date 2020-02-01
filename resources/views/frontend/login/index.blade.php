
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/css/login.css"/>



</head>
<body>


<div class="cont">
    <div class="demo">
      <div class="login">
        <div class="login_check">
            <img src="/images/logo.jpg" width="150" alt="Exposure.mx" srcset="/images/logo.jpg">
        </div>
        <div class="login__form">
          <div class="login__row">
            <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
              <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
            </svg>
            <input type="text" class="login__input name" placeholder="Username"/>
          </div>
          <div class="login__row">
            <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
              <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
            </svg>
            <input type="password" class="login__input pass" placeholder="Password"/>
          </div>
          <button type="button" class="login__submit">Ingresar</button>
          <p class="login__signup">¿No tiene registro? &nbsp;<a>Registrate</a></p>
        </div>
      </div>
      <div class="app">
        <div class="app__top">
          <div class="app__menu-btn">
            <span></span>
          </div>

          <p class="app__hello">Registro</p>


        </div>
        <div class="app__bot">

        </div>
        <div class="app__logout">
          <svg class="app__logout-icon svg-icon" viewBox="0 0 20 20">
            <path d="M6,3 a8,8 0 1,0 8,0 M10,0 10,12"/>
          </svg>
        </div>
      </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

$(document).ready(function() {

var animating = false,
    submitPhase1 = 1100,
    submitPhase2 = 400,
    logoutPhase1 = 800,
    $login = $(".login"),
    $app = $(".app");

function ripple(elem, e) {
  $(".ripple").remove();
  var elTop = elem.offset().top,
      elLeft = elem.offset().left,
      x = e.pageX - elLeft,
      y = e.pageY - elTop;
  var $ripple = $("<div class='ripple'></div>");
  $ripple.css({top: y, left: x});
  elem.append($ripple);
};

$(document).on("click", ".login__submit", function(e) {
  if (animating) return;
  animating = true;
  var that = this;
  ripple($(that), e);
  $(that).addClass("processing");
  setTimeout(function() {
    $(that).addClass("success");
    setTimeout(function() {
      $app.show();
      $app.css("top");
      $app.addClass("active");
    }, submitPhase2 - 70);
    setTimeout(function() {
      $login.hide();
      $login.addClass("inactive");
      animating = false;
      $(that).removeClass("success processing");
    }, submitPhase2);
  }, submitPhase1);
});

$(document).on("click", ".app__logout", function(e) {
  if (animating) return;
  $(".ripple").remove();
  animating = true;
  var that = this;
  $(that).addClass("clicked");
  setTimeout(function() {
    $app.removeClass("active");
    $login.show();
    $login.css("top");
    $login.removeClass("inactive");
  }, logoutPhase1 - 120);
  setTimeout(function() {
    $app.hide();
    animating = false;
    $(that).removeClass("clicked");
  }, logoutPhase1);
});

});

</script>
</body>
</html>



