// WARNING: Menu derecho fixed
var contadorfixed = 0;
$('.iconomenufixed').click(menuderechofixed);
$('.cerrartodo').click(cerrartodo);
$('.iconomenufixedcerrar').click(ocultarmenuderechofixed);

function menuderechofixed(){

  if (contadorfixed == 0) {
    $('.menuizquierdofixed').animate({left: '0'});
    $('.cerrartodo').css({'display': 'block'});
    contadorfixed = 1;
  }
}

function ocultarmenuderechofixed(){
   if (contadorfixed == 1) {
     $('.menuizquierdofixed').animate({left: '-100%'});
     $('.cerrartodo').css({'display': 'none'});
     contadorfixed = 0;
   }
}

// WARNING: SESION
var contadorsesionfixed = 0;
$('.registrooiniciofixed').click(registrooiniciofixed);
$('.iconosesionheader').click(iconosesionheader);
$('.iconosesioncerrar').click(iconosesioncerrar);

function registrooiniciofixed(){

  if (contadorsesionfixed == 0) {
    $('.sesion').animate({top: '12%'});
    $('.cerrartodo').css({'display': 'block'});
    contadorsesionfixed = 1;
  }
}

function iconosesionheader(){

  if (contadorsesionfixed == 0) {
    $('.sesion').animate({top: '12%'});
    $('.cerrartodo').css({'display': 'block'});
    contadorsesionfixed = 1;
  }
}

function iconosesioncerrar(){
   if (contadorsesionfixed == 1) {
     $('.sesion').animate({top: '-5000%'});
     $('.cerrartodo').css({'display': 'none'});
     contadorsesionfixed = 0;
   }
}


// WARNING: REGISTRO
var contadorregistrofixed = 0;
$('.iconoregistroensesion').click(iconoregistroensesion);
$('.iconoregistroheader').click(iconoregistroheader);
$('.iconoregistrocerrar').click(iconoregistrocerrar);

function iconoregistroensesion(){

  if (contadorregistrofixed == 0) {
    $('.registro').animate({top: '12%'});
    $('.cerrartodo').css({'display': 'block'});
    contadorregistrofixed = 1;
  }
}

function iconoregistroheader(){

  if (contadorregistrofixed == 0) {
    $('.registro').animate({top: '12%'});
    $('.cerrartodo').css({'display': 'block'});
    contadorregistrofixed = 1;
  }
}

function iconoregistrocerrar(){
   if (contadorregistrofixed == 1) {
     $('.registro').animate({top: '-5000%'});
     $('.cerrartodo').css({'display': 'none'});
     contadorregistrofixed = 0;
   }
}


// WARNING: Cerrartodo

function cerrartodo(){
   if (contadorfixed == 1) {
     $('.menuizquierdofixed').animate({left: '-100%'});
     $('.cerrartodo').css({'display': 'none'});
     contadorfixed = 0;
   }

   if (contadorsesionfixed == 1) {
     $('.sesion').animate({top: '-5000%'});
     $('.cerrartodo').css({'display': 'none'});
     contadorsesionfixed = 0;
   }

   if (contadorregistrofixed == 1) {
     $('.registro').animate({top: '-5000%'});
     $('.cerrartodo').css({'display': 'none'});
     contadorregistrofixed = 0;
   }
}

// WARNING: Slider

var contadorimagenes = $('.slider ul li').length;
var contador2 = 1;
for (var i = 1; i <= contadorimagenes; i++) {
  $('.slider ol').append('<li><div class="iconopaginacion"><i class="fas fa-scrubber"></i></div></li>');
}

$('.slider ul li').hide();
$('.slider ul li:first').show();
$('.slider ol li:first').css({'color':'#131311b8'});


$('.slider ol li').click(iconopaginacion);
$('.flechaderecha').click(flechaderecha);
$('.flechaisquierda').click(flechaisquierda);

function iconopaginacion(){
  var contador = $(this).index()+1;

  $('.slider ul li').hide();
  $('.slider ul li:nth-child('+contador+')').fadeIn();

  $('.slider ol li').css({'color':'#7b7b7ab8'});
  $(this).css({'color':'#131311b8'});

  contador2 = contador;
}

function flechaderecha(){
  if (contador2 >= contadorimagenes) {
    contador2 = 1;
  }else {
    contador2++;
  }

  $('.slider ul li').hide();
  $('.slider ul li:nth-child('+contador2+')').fadeIn();

  $('.slider ol li').css({'color':'#7b7b7ab8'});
  $('.slider ol li:nth-child('+contador2+')').css({'color':'#131311b8'});
}

function flechaisquierda(){
  if (contador2 <= 1) {
    contador2 = contadorimagenes;
  }else {
    contador2--;
  }

  $('.slider ul li').hide();
  $('.slider ul li:nth-child('+contador2+')').fadeIn();

  $('.slider ol li').css({'color':'#7b7b7ab8'});
  $('.slider ol li:nth-child('+contador2+')').css({'color':'#131311b8'});
}

setInterval(function(){
  flechaderecha();
},6000);

// WARNING: Matchmedia Horizontal y Vertical

var mediaqueryhorizontal = matchMedia("(orientation: landscape)");
const mqlhorizontal = mql => {

  if (mql.matches) {

    // WARNING: Slider 2
    var contadorimagenes2 = $('.slider2 ul li').length;

    $('.slider2 ul li').hide();
    $('.slider2 ul li:nth-child(-n+2)').show();
    var carril1 = 1;
    var carril2 = 2;


    $('.flechaderecha2').click(flechaderecha2);
    $('.flechaisquierda2').click(flechaisquierda2);

    function flechaderecha2(){
      if (carril2 >= contadorimagenes2) {
        carril1 = 1;
        carril2 = 2;
      }else {
        carril1++;
        carril2++;
      }

      $('.slider2 ul li').hide();
      $('.slider2 ul li:nth-child('+carril1+')').show();
      $('.slider2 ul li:nth-child('+carril2+')').show();
    }

    function flechaisquierda2(){
      if (carril1 <= 1) {
        carril1 = contadorimagenes2 - 1;
        carril2 = contadorimagenes2;
      }else {
        carril1--;
        carril2--;
      }

      $('.slider2 ul li').hide();
      $('.slider2 ul li:nth-child('+carril1+')').show();
      $('.slider2 ul li:nth-child('+carril2+')').show();
    }

    // WARNING: Slider 3
    var contadorimagenes3 = $('.slider3 ul li').length;

    $('.slider3 ul li').hide();
    $('.slider3 ul li:nth-child(-n+3)').show();
    var carril1slider3 = 1;
    var carril2slider3 = 2;
    var carril3slider3 = 3;


    $('.flechaderecha3').click(flechaderecha3);
    $('.flechaisquierda3').click(flechaisquierda3);

    function flechaderecha3(){
      if (carril3slider3 >= contadorimagenes3) {
        carril1slider3 = 1;
        carril2slider3 = 2;
        carril3slider3 = 3;
      }else {
        carril1slider3++;
        carril2slider3++;
        carril3slider3++;
      }

      $('.slider3 ul li').hide();
      $('.slider3 ul li:nth-child('+carril1slider3+')').show();
      $('.slider3 ul li:nth-child('+carril2slider3+')').show();
      $('.slider3 ul li:nth-child('+carril3slider3+')').show();
    }

    function flechaisquierda3(){
      if (carril1slider3 <= 1) {
        carril1slider3 = contadorimagenes3 - 2;
        carril2slider3 = contadorimagenes3 - 1;
        carril3slider3 = contadorimagenes3;
      }else {
        carril1slider3--;
        carril2slider3--;
        carril3slider3--;
      }

      $('.slider3 ul li').hide();
      $('.slider3 ul li:nth-child('+carril1slider3+')').show();
      $('.slider3 ul li:nth-child('+carril2slider3+')').show();
      $('.slider3 ul li:nth-child('+carril3slider3+')').show();
    }

    // WARNING: Slider 4
    var contadorimagenes4 = $('.slider4 ul li').length;

    $('.slider4 ul li').hide();
    $('.slider4 ul li:nth-child(-n+2)').show();
    var carril1slider4 = 1;
    var carril2slider4 = 2;


    $('.flechaderecha4').click(flechaderecha4);
    $('.flechaisquierda4').click(flechaisquierda4);

    function flechaderecha4(){
      if (carril2slider4 >= contadorimagenes4) {
        carril1slider4 = 1;
        carril2slider4 = 2;
      }else {
        carril1slider4++;
        carril2slider4++;
      }

      $('.slider4 ul li').hide();
      $('.slider4 ul li:nth-child('+carril1slider4+')').show();
      $('.slider4 ul li:nth-child('+carril2slider4+')').show();
    }

    function flechaisquierda4(){
      if (carril1slider4 <= 1) {
        carril1slider4 = contadorimagenes4 - 1;
        carril2slider4 = contadorimagenes4;
      }else {
        carril1slider4--;
        carril2slider4--;
      }

      $('.slider4 ul li').hide();
      $('.slider4 ul li:nth-child('+carril1slider4+')').show();
      $('.slider4 ul li:nth-child('+carril2slider4+')').show();
    }

    // WARNING: Slider 5
    var contadorimagenes5 = $('.slider5 ul li').length;

    $('.slider5 ul li').hide();
    $('.slider5 ul li:nth-child(-n+2)').show();
    var carril1slider5 = 1;
    var carril2slider5 = 2;


    $('.flechaderecha5').click(flechaderecha5);
    $('.flechaisquierda5').click(flechaisquierda5);

    function flechaderecha5(){
      if (carril2slider5 >= contadorimagenes5) {
        carril1slider5 = 1;
        carril2slider5 = 2;
      }else {
        carril1slider5++;
        carril2slider5++;
      }

      $('.slider5 ul li').hide();
      $('.slider5 ul li:nth-child('+carril1slider5+')').show();
      $('.slider5 ul li:nth-child('+carril2slider5+')').show();
    }

    function flechaisquierda5(){
      if (carril1slider5 <= 1) {
        carril1slider5 = contadorimagenes5 - 1;
        carril2slider5 = contadorimagenes5;
      }else {
        carril1slider5--;
        carril2slider5--;
      }

      $('.slider5 ul li').hide();
      $('.slider5 ul li:nth-child('+carril1slider5+')').show();
      $('.slider5 ul li:nth-child('+carril2slider5+')').show();
    }

    // WARNING: Slider 6
    var contadorimagenes6 = $('.slider6 ul li').length;

    $('.slider6 ul li').hide();
    $('.slider6 ul li:nth-child(-n+2)').show();
    var carril1slider6 = 1;
    var carril2slider6 = 2;


    $('.flechaderecha6').click(flechaderecha6);
    $('.flechaisquierda6').click(flechaisquierda6);

    function flechaderecha6(){
      if (carril2slider6 >= contadorimagenes6) {
        carril1slider6 = 1;
        carril2slider6 = 2;
      }else {
        carril1slider6++;
        carril2slider6++;
      }

      $('.slider6 ul li').hide();
      $('.slider6 ul li:nth-child('+carril1slider6+')').show();
      $('.slider6 ul li:nth-child('+carril2slider6+')').show();
    }

    function flechaisquierda6(){
      if (carril1slider6 <= 1) {
        carril1slider6 = contadorimagenes6 - 1;
        carril2slider6 = contadorimagenes6;
      }else {
        carril1slider6--;
        carril2slider6--;
      }

      $('.slider6 ul li').hide();
      $('.slider6 ul li:nth-child('+carril1slider6+')').show();
      $('.slider6 ul li:nth-child('+carril2slider6+')').show();
    }

    // WARNING: Slider 7
    var contadorimagenes7 = $('.slider7 ul li').length;

    $('.slider7 ul li').hide();
    $('.slider7 ul li:nth-child(-n+3)').show();
    var carril1slider7 = 1;
    var carril2slider7 = 2;
    var carril3slider7 = 3;


    $('.flechaderecha7').click(flechaderecha7);
    $('.flechaisquierda7').click(flechaisquierda7);

    function flechaderecha7(){
      if (carril3slider7 >= contadorimagenes7) {
        carril1slider7 = 1;
        carril2slider7 = 2;
        carril3slider7 = 3;
      }else {
        carril1slider7 += 3;
        carril2slider7 += 3;
        carril3slider7 += 3;
      }

      $('.slider7 ul li').hide();
      $('.slider7 ul li:nth-child('+carril1slider7+')').show();
      $('.slider7 ul li:nth-child('+carril2slider7+')').show();
      $('.slider7 ul li:nth-child('+carril3slider7+')').show();
    }

    function flechaisquierda7(){
      if (carril1slider7 <= 1) {
        carril1slider7 = contadorimagenes7 - 2;
        carril2slider7 = contadorimagenes7 - 1;
        carril3slider7 = contadorimagenes7;
      }else {
        carril1slider7 -= 3;
        carril2slider7 -= 3;
        carril3slider7 -= 3;
      }

      $('.slider7 ul li').hide();
      $('.slider7 ul li:nth-child('+carril1slider7+')').show();
      $('.slider7 ul li:nth-child('+carril2slider7+')').show();
      $('.slider7 ul li:nth-child('+carril3slider7+')').show();
    }

    // WARNING: Slider 8
    var contadorimagenes8 = $('.slider8 ul li').length;

    $('.slider8 ul li').hide();
    $('.slider8 ul li:nth-child(-n+3)').show();
    var carril1slider8 = 1;
    var carril2slider8 = 2;
    var carril3slider8 = 3;


    $('.flechaderecha8').click(flechaderecha8);
    $('.flechaisquierda8').click(flechaisquierda8);

    function flechaderecha8(){
      if (carril3slider8 >= contadorimagenes8) {
        carril1slider8 = 1;
        carril2slider8 = 2;
        carril3slider8 = 3;
      }else {
        carril1slider8++;
        carril2slider8++;
        carril3slider8++;
      }

      $('.slider8 ul li').hide();
      $('.slider8 ul li:nth-child('+carril1slider8+')').show();
      $('.slider8 ul li:nth-child('+carril2slider8+')').show();
      $('.slider8 ul li:nth-child('+carril3slider8+')').show();
    }

    function flechaisquierda8(){
      if (carril1slider8 <= 1) {
        carril1slider8 = contadorimagenes8 - 2;
        carril2slider8 = contadorimagenes8 - 1;
        carril3slider8 = contadorimagenes8;
      }else {
        carril1slider8--;
        carril2slider8--;
        carril3slider8--;
      }

      $('.slider8 ul li').hide();
      $('.slider8 ul li:nth-child('+carril1slider8+')').show();
      $('.slider8 ul li:nth-child('+carril2slider8+')').show();
      $('.slider8 ul li:nth-child('+carril3slider8+')').show();
    }


  }else {

    // WARNING: Slider 2
    var contadorimagenes2 = $('.slider2 ul li').length;

    $('.slider2 ul li').hide();
    $('.slider2 ul li:nth-child(-n+1)').show();
    var carril1 = 1;


    $('.flechaderecha2').click(flechaderecha2);
    $('.flechaisquierda2').click(flechaisquierda2);

    function flechaderecha2(){
      if (carril1 >= contadorimagenes2) {
        carril1 = 1;
      }else {
        carril1++;
      }

      $('.slider2 ul li').hide();
      $('.slider2 ul li:nth-child('+carril1+')').show();
    }

    function flechaisquierda2(){
      if (carril1 <= 1) {
        carril1 = contadorimagenes2;
      }else {
        carril1--;
      }

      $('.slider2 ul li').hide();
      $('.slider2 ul li:nth-child('+carril1+')').show();
    }

    // WARNING: Slider 3
    var contadorimagenes3 = $('.slider3 ul li').length;

    $('.slider3 ul li').hide();
    $('.slider3 ul li:nth-child(-n+1)').show();
    var carril1slider3 = 1;


    $('.flechaderecha3').click(flechaderecha3);
    $('.flechaisquierda3').click(flechaisquierda3);

    function flechaderecha3(){
      if (carril1slider3 >= contadorimagenes3) {
        carril1slider3 = 1;
      }else {
        carril1slider3++;
      }

      $('.slider3 ul li').hide();
      $('.slider3 ul li:nth-child('+carril1slider3+')').show();
    }

    function flechaisquierda3(){
      if (carril1slider3 <= 1) {
        carril1slider3 = contadorimagenes3;
      }else {
        carril1slider3--;
      }

      $('.slider3 ul li').hide();
      $('.slider3 ul li:nth-child('+carril1slider3+')').show();
    }

    // WARNING: Slider 4
    var contadorimagenes4 = $('.slider4 ul li').length;

    $('.slider4 ul li').hide();
    $('.slider4 ul li:nth-child(-n+1)').show();
    var carril1slider4 = 1;


    $('.flechaderecha4').click(flechaderecha4);
    $('.flechaisquierda4').click(flechaisquierda4);

    function flechaderecha4(){
      if (carril1slider4 >= contadorimagenes4) {
        carril1slider4 = 1;
      }else {
        carril1slider4++;
      }

      $('.slider4 ul li').hide();
      $('.slider4 ul li:nth-child('+carril1slider4+')').show();
    }

    function flechaisquierda4(){
      if (carril1slider4 <= 1) {
        carril1slider4 = contadorimagenes4;
      }else {
        carril1slider4--;
      }

      $('.slider4 ul li').hide();
      $('.slider4 ul li:nth-child('+carril1slider4+')').show();
    }

    // WARNING: Slider 5
    var contadorimagenes5 = $('.slider5 ul li').length;

    $('.slider5 ul li').hide();
    $('.slider5 ul li:nth-child(-n+1)').show();
    var carril1slider5 = 1;


    $('.flechaderecha5').click(flechaderecha5);
    $('.flechaisquierda5').click(flechaisquierda5);

    function flechaderecha5(){
      if (carril1slider5 >= contadorimagenes5) {
        carril1slider5 = 1;
      }else {
        carril1slider5++;
      }

      $('.slider5 ul li').hide();
      $('.slider5 ul li:nth-child('+carril1slider5+')').show();
    }

    function flechaisquierda5(){
      if (carril1slider5 <= 1) {
        carril1slider5 = contadorimagenes5;
      }else {
        carril1slider5--;
      }

      $('.slider5 ul li').hide();
      $('.slider5 ul li:nth-child('+carril1slider5+')').show();
    }

    // WARNING: Slider 6
    var contadorimagenes6 = $('.slider6 ul li').length;

    $('.slider6 ul li').hide();
    $('.slider6 ul li:nth-child(-n+1)').show();
    var carril1slider6 = 1;


    $('.flechaderecha6').click(flechaderecha6);
    $('.flechaisquierda6').click(flechaisquierda6);

    function flechaderecha6(){
      if (carril1slider6 >= contadorimagenes6) {
        carril1slider6 = 1;
      }else {
        carril1slider6++;
      }

      $('.slider6 ul li').hide();
      $('.slider6 ul li:nth-child('+carril1slider6+')').show();
    }

    function flechaisquierda6(){
      if (carril1slider6 <= 1) {
        carril1slider6 = contadorimagenes6;
      }else {
        carril1slider6--;
      }

      $('.slider6 ul li').hide();
      $('.slider6 ul li:nth-child('+carril1slider6+')').show();
    }

    // WARNING: Slider 7
    var contadorimagenes7 = $('.slider7 ul li').length;

    $('.slider7 ul li').hide();
    $('.slider7 ul li:nth-child(-n+2)').show();
    var carril1slider7 = 1;
    var carril2slider7 = 2;


    $('.flechaderecha7').click(flechaderecha7);
    $('.flechaisquierda7').click(flechaisquierda7);

    function flechaderecha7(){
      if (carril2slider7 >= contadorimagenes7) {
        carril1slider7 = 1;
        carril2slider7 = 2;
      }else {
        carril1slider7 += 2;
        carril2slider7 += 2;
      }

      $('.slider7 ul li').hide();
      $('.slider7 ul li:nth-child('+carril1slider7+')').show();
      $('.slider7 ul li:nth-child('+carril2slider7+')').toggle();
    }

    function flechaisquierda7(){
      if (carril1slider7 <= 1) {
        carril1slider7 = contadorimagenes7 - 1;
        carril2slider7 = contadorimagenes7;
      }else {
        carril1slider7 -= 2;
        carril2slider7 -= 2;
      }

      $('.slider7 ul li').hide();
      $('.slider7 ul li:nth-child('+carril1slider7+')').toggle();
      $('.slider7 ul li:nth-child('+carril2slider7+')').show();
    }

    // WARNING: Slider 8
    var contadorimagenes8 = $('.slider8 ul li').length;

    $('.slider8 ul li').hide();
    $('.slider8 ul li:nth-child(-n+1)').show();
    var carril1slider8 = 1;


    $('.flechaderecha8').click(flechaderecha8);
    $('.flechaisquierda8').click(flechaisquierda8);

    function flechaderecha8(){
      if (carril1slider8 >= contadorimagenes8) {
        carril1slider8 = 1;
      }else {
        carril1slider8++;
      }

      $('.slider8 ul li').hide();
      $('.slider8 ul li:nth-child('+carril1slider8+')').show();
    }

    function flechaisquierda8(){
      if (carril1slider8 <= 1) {
        carril1slider8 = contadorimagenes8;
      }else {
        carril1slider8--;
      }

      $('.slider8 ul li').hide();
      $('.slider8 ul li:nth-child('+carril1slider8+')').show();
    }


  }
}
mediaqueryhorizontal.addListener(mqlhorizontal);
mqlhorizontal(mediaqueryhorizontal);

// WARNING: Matchmedia Resolucion 1024

var mediaqueryresolucion1024 = matchMedia("(min-width: 1024px)");
const mqlresolucion1024 = mql1024 => {

  if (mql1024.matches) {

    // WARNING: Slider 2
    var contadorimagenes2 = $('.slider2 ul li').length;

    $('.slider2 ul li').hide();
    $('.slider2 ul li:nth-child(-n+3)').show();
    var carril1 = 1;
    var carril2 = 2;
    var carril3 = 3;


    $('.flechaderecha2').click(flechaderecha2);
    $('.flechaisquierda2').click(flechaisquierda2);

    function flechaderecha2(){
      if (carril3 >= contadorimagenes2) {
        carril1 = 1;
        carril2 = 2;
        carril3 = 3;
      }else {
        carril1++;
        carril2++;
        carril3++;
      }

      $('.slider2 ul li').hide();
      $('.slider2 ul li:nth-child('+carril1+')').show();
      $('.slider2 ul li:nth-child('+carril2+')').show();
      $('.slider2 ul li:nth-child('+carril3+')').show();
    }

    function flechaisquierda2(){
      if (carril1 <= 1) {
        carril1 = contadorimagenes2 - 2;
        carril2 = contadorimagenes2 - 1;
        carril3 = contadorimagenes2;
      }else {
        carril1--;
        carril2--;
        carril3--;
      }

      $('.slider2 ul li').hide();
      $('.slider2 ul li:nth-child('+carril1+')').show();
      $('.slider2 ul li:nth-child('+carril2+')').show();
      $('.slider2 ul li:nth-child('+carril3+')').show();
    }

    // WARNING: Slider 3
    var contadorimagenes3 = $('.slider3 ul li').length;

    $('.slider3 ul li').hide();
    $('.slider3 ul li:nth-child(-n+4)').show();
    var carril1slider3 = 1;
    var carril2slider3 = 2;
    var carril3slider3 = 3;
    var carril4slider3 = 4;


    $('.flechaderecha3').click(flechaderecha3);
    $('.flechaisquierda3').click(flechaisquierda3);

    function flechaderecha3(){
      if (carril4slider3 >= contadorimagenes3) {
        carril1slider3 = 1;
        carril2slider3 = 2;
        carril3slider3 = 3;
        carril4slider3 = 4;
      }else {
        carril1slider3++;
        carril2slider3++;
        carril3slider3++;
        carril4slider3++;
      }

      $('.slider3 ul li').hide();
      $('.slider3 ul li:nth-child('+carril1slider3+')').show();
      $('.slider3 ul li:nth-child('+carril2slider3+')').show();
      $('.slider3 ul li:nth-child('+carril3slider3+')').show();
      $('.slider3 ul li:nth-child('+carril4slider3+')').show();
    }

    function flechaisquierda3(){
      if (carril1slider3 <= 1) {
        carril1slider3 = contadorimagenes3 - 3;
        carril2slider3 = contadorimagenes3 - 2;
        carril3slider3 = contadorimagenes3 - 1;
        carril4slider3 = contadorimagenes3;
      }else {
        carril1slider3--;
        carril2slider3--;
        carril3slider3--;
        carril4slider3--;
      }

      $('.slider3 ul li').hide();
      $('.slider3 ul li:nth-child('+carril1slider3+')').show();
      $('.slider3 ul li:nth-child('+carril2slider3+')').show();
      $('.slider3 ul li:nth-child('+carril3slider3+')').show();
      $('.slider3 ul li:nth-child('+carril4slider3+')').show();
    }

    // WARNING: Slider 4
    var contadorimagenes4 = $('.slider4 ul li').length;

    $('.slider4 ul li').hide();
    $('.slider4 ul li:nth-child(-n+3)').show();
    var carril1slider4 = 1;
    var carril2slider4 = 2;
    var carril3slider4 = 3;


    $('.flechaderecha4').click(flechaderecha4);
    $('.flechaisquierda4').click(flechaisquierda4);

    function flechaderecha4(){
      if (carril3slider4 >= contadorimagenes4) {
        carril1slider4 = 1;
        carril2slider4 = 2;
        carril3slider4 = 3;
      }else {
        carril1slider4++;
        carril2slider4++;
        carril3slider4++;
      }

      $('.slider4 ul li').hide();
      $('.slider4 ul li:nth-child('+carril1slider4+')').show();
      $('.slider4 ul li:nth-child('+carril2slider4+')').show();
      $('.slider4 ul li:nth-child('+carril3slider4+')').show();
    }

    function flechaisquierda4(){
      if (carril1slider4 <= 1) {
        carril1slider4 = contadorimagenes4 - 2;
        carril2slider4 = contadorimagenes4 - 1;
        carril3slider4 = contadorimagenes4;
      }else {
        carril1slider4--;
        carril2slider4--;
        carril3slider4--;
      }

      $('.slider4 ul li').hide();
      $('.slider4 ul li:nth-child('+carril1slider4+')').show();
      $('.slider4 ul li:nth-child('+carril2slider4+')').show();
      $('.slider4 ul li:nth-child('+carril3slider4+')').show();
    }

    // WARNING: Slider 5
    var contadorimagenes5 = $('.slider5 ul li').length;

    $('.slider5 ul li').hide();
    $('.slider5 ul li:nth-child(-n+3)').show();
    var carril1slider5 = 1;
    var carril2slider5 = 2;
    var carril3slider5 = 3;


    $('.flechaderecha5').click(flechaderecha5);
    $('.flechaisquierda5').click(flechaisquierda5);

    function flechaderecha5(){
      if (carril3slider5 >= contadorimagenes5) {
        carril1slider5 = 1;
        carril2slider5 = 2;
        carril3slider5 = 3;
      }else {
        carril1slider5++;
        carril2slider5++;
        carril3slider5++;
      }

      $('.slider5 ul li').hide();
      $('.slider5 ul li:nth-child('+carril1slider5+')').show();
      $('.slider5 ul li:nth-child('+carril2slider5+')').show();
      $('.slider5 ul li:nth-child('+carril3slider5+')').show();
    }

    function flechaisquierda5(){
      if (carril1slider5 <= 1) {
        carril1slider5 = contadorimagenes5 - 2;
        carril2slider5 = contadorimagenes5 - 1;
        carril3slider5 = contadorimagenes5;
      }else {
        carril1slider5--;
        carril2slider5--;
        carril3slider5--;
      }

      $('.slider5 ul li').hide();
      $('.slider5 ul li:nth-child('+carril1slider5+')').show();
      $('.slider5 ul li:nth-child('+carril2slider5+')').show();
      $('.slider5 ul li:nth-child('+carril3slider5+')').show();
    }

    // WARNING: Slider 6
    var contadorimagenes6 = $('.slider6 ul li').length;

    $('.slider6 ul li').hide();
    $('.slider6 ul li:nth-child(-n+3)').show();
    var carril1slider6 = 1;
    var carril2slider6 = 2;
    var carril3slider6 = 3;


    $('.flechaderecha6').click(flechaderecha6);
    $('.flechaisquierda6').click(flechaisquierda6);

    function flechaderecha6(){
      if (carril3slider6 >= contadorimagenes6) {
        carril1slider6 = 1;
        carril2slider6 = 2;
        carril3slider6 = 3;
      }else {
        carril1slider6++;
        carril2slider6++;
        carril3slider6++;
      }

      $('.slider6 ul li').hide();
      $('.slider6 ul li:nth-child('+carril1slider6+')').show();
      $('.slider6 ul li:nth-child('+carril2slider6+')').show();
      $('.slider6 ul li:nth-child('+carril3slider6+')').show();
    }

    function flechaisquierda6(){
      if (carril1slider6 <= 1) {
        carril1slider6 = contadorimagenes6 - 2;
        carril2slider6 = contadorimagenes6 - 1;
        carril3slider6 = contadorimagenes6;
      }else {
        carril1slider6--;
        carril2slider6--;
        carril3slider6--;
      }

      $('.slider6 ul li').hide();
      $('.slider6 ul li:nth-child('+carril1slider6+')').show();
      $('.slider6 ul li:nth-child('+carril2slider6+')').show();
      $('.slider6 ul li:nth-child('+carril3slider6+')').show();
    }

    // WARNING: Slider 7
    var contadorimagenes7 = $('.slider7 ul li').length;

    $('.slider7 ul li').hide();
    $('.slider7 ul li:nth-child(-n+4)').show();
    var carril1slider7 = 1;
    var carril2slider7 = 2;
    var carril3slider7 = 3;
    var carril4slider7 = 4;


    $('.flechaderecha7').click(flechaderecha7);
    $('.flechaisquierda7').click(flechaisquierda7);

    function flechaderecha7(){
      if (carril4slider7 >= contadorimagenes7) {
        carril1slider7 = 1;
        carril2slider7 = 2;
        carril3slider7 = 3;
        carril4slider7 = 4;
      }else {
        carril1slider7 += 4;
        carril2slider7 += 4;
        carril3slider7 += 4;
        carril4slider7 += 4;
      }

      $('.slider7 ul li').hide();
      $('.slider7 ul li:nth-child('+carril1slider7+')').show();
      $('.slider7 ul li:nth-child('+carril2slider7+')').show();
      $('.slider7 ul li:nth-child('+carril3slider7+')').show();
      $('.slider7 ul li:nth-child('+carril4slider7+')').show();
    }

    function flechaisquierda7(){
      if (carril1slider7 <= 1) {
        carril1slider7 = contadorimagenes7 - 3;
        carril2slider7 = contadorimagenes7 - 2;
        carril3slider7 = contadorimagenes7 - 1;
        carril4slider7 = contadorimagenes7;
      }else {
        carril1slider7 -= 4;
        carril2slider7 -= 4;
        carril3slider7 -= 4;
        carril4slider7 -= 4;
      }

      $('.slider7 ul li').hide();
      $('.slider7 ul li:nth-child('+carril1slider7+')').show();
      $('.slider7 ul li:nth-child('+carril2slider7+')').show();
      $('.slider7 ul li:nth-child('+carril3slider7+')').show();
      $('.slider7 ul li:nth-child('+carril4slider7+')').show();
    }

    // WARNING: Slider 8
    var contadorimagenes8 = $('.slider8 ul li').length;

    $('.slider8 ul li').hide();
    $('.slider8 ul li:nth-child(-n+4)').show();
    var carril1slider8 = 1;
    var carril2slider8 = 2;
    var carril3slider8 = 3;
    var carril4slider8 = 4;


    $('.flechaderecha8').click(flechaderecha8);
    $('.flechaisquierda8').click(flechaisquierda8);

    function flechaderecha8(){
      if (carril4slider8 >= contadorimagenes8) {
        carril1slider8 = 1;
        carril2slider8 = 2;
        carril3slider8 = 3;
        carril4slider8 = 4;
      }else {
        carril1slider8++;
        carril2slider8++;
        carril3slider8++;
        carril4slider8++;
      }

      $('.slider8 ul li').hide();
      $('.slider8 ul li:nth-child('+carril1slider8+')').show();
      $('.slider8 ul li:nth-child('+carril2slider8+')').show();
      $('.slider8 ul li:nth-child('+carril3slider8+')').show();
      $('.slider8 ul li:nth-child('+carril4slider8+')').show();
    }

    function flechaisquierda8(){
      if (carril1slider8 <= 1) {
        carril1slider8 = contadorimagenes8 - 3;
        carril2slider8 = contadorimagenes8 - 2;
        carril3slider8 = contadorimagenes8 - 1;
        carril4slider8 = contadorimagenes8;
      }else {
        carril1slider8--;
        carril2slider8--;
        carril3slider8--;
        carril4slider8--;
      }

      $('.slider8 ul li').hide();
      $('.slider8 ul li:nth-child('+carril1slider8+')').show();
      $('.slider8 ul li:nth-child('+carril2slider8+')').show();
      $('.slider8 ul li:nth-child('+carril3slider8+')').show();
      $('.slider8 ul li:nth-child('+carril4slider8+')').show();
    }

  }
}

mediaqueryresolucion1024.addListener(mqlresolucion1024);
mqlresolucion1024(mediaqueryresolucion1024);

// WARNING: Matchmedia Resolucion 1280

var mediaqueryresolucion1280 = matchMedia("(min-width: 1280px)");
const mqlresolucion1280 = mql1280 => {

  if (mql1280.matches) {

    // WARNING: Slider 2
    var contadorimagenes2 = $('.slider2 ul li').length;

    $('.slider2 ul li').hide();
    $('.slider2 ul li:nth-child(-n+4)').show();
    var carril1 = 1;
    var carril2 = 2;
    var carril3 = 3;
    var carril4 = 4;


    $('.flechaderecha2').click(flechaderecha2);
    $('.flechaisquierda2').click(flechaisquierda2);

    function flechaderecha2(){
      if (carril4 >= contadorimagenes2) {
        carril1 = 1;
        carril2 = 2;
        carril3 = 3;
        carril4 = 4;
      }else {
        carril1++;
        carril2++;
        carril3++;
        carril4++;
      }

      $('.slider2 ul li').hide();
      $('.slider2 ul li:nth-child('+carril1+')').show();
      $('.slider2 ul li:nth-child('+carril2+')').show();
      $('.slider2 ul li:nth-child('+carril3+')').show();
      $('.slider2 ul li:nth-child('+carril4+')').toggle(1200);
    }

    function flechaisquierda2(){
      if (carril1 <= 1) {
        carril1 = contadorimagenes2 - 3;
        carril2 = contadorimagenes2 - 2;
        carril3 = contadorimagenes2 - 1;
        carril4 = contadorimagenes2;
      }else {
        carril1--;
        carril2--;
        carril3--;
        carril4--;
      }

      $('.slider2 ul li').hide();
      $('.slider2 ul li:nth-child('+carril1+')').toggle(1200);
      $('.slider2 ul li:nth-child('+carril2+')').show();
      $('.slider2 ul li:nth-child('+carril3+')').show();
      $('.slider2 ul li:nth-child('+carril4+')').show();
    }

    // WARNING: Slider 3
    var contadorimagenes3 = $('.slider3 ul li').length;

    $('.slider3 ul li').hide();
    $('.slider3 ul li:nth-child(-n+6)').show();
    var carril1slider3 = 1;
    var carril2slider3 = 2;
    var carril3slider3 = 3;
    var carril4slider3 = 4;
    var carril5slider3 = 5;
    var carril6slider3 = 6;


    $('.flechaderecha3').click(flechaderecha3);
    $('.flechaisquierda3').click(flechaisquierda3);

    function flechaderecha3(){
      if (carril6slider3 >= contadorimagenes3) {
        carril1slider3 = 1;
        carril2slider3 = 2;
        carril3slider3 = 3;
        carril4slider3 = 4;
        carril5slider3 = 5;
        carril6slider3 = 6;
      }else {
        carril1slider3++;
        carril2slider3++;
        carril3slider3++;
        carril4slider3++;
        carril5slider3++;
        carril6slider3++;
      }

      $('.slider3 ul li').hide();
      $('.slider3 ul li:nth-child('+carril1slider3+')').show();
      $('.slider3 ul li:nth-child('+carril2slider3+')').show();
      $('.slider3 ul li:nth-child('+carril3slider3+')').show();
      $('.slider3 ul li:nth-child('+carril4slider3+')').show();
      $('.slider3 ul li:nth-child('+carril5slider3+')').show();
      $('.slider3 ul li:nth-child('+carril6slider3+')').toggle(1200);
    }

    function flechaisquierda3(){
      if (carril1slider3 <= 1) {
        carril1slider3 = contadorimagenes3 - 5;
        carril2slider3 = contadorimagenes3 - 4;
        carril3slider3 = contadorimagenes3 - 3;
        carril4slider3 = contadorimagenes3 - 2;
        carril5slider3 = contadorimagenes3 - 1;
        carril6slider3 = contadorimagenes3;
      }else {
        carril1slider3--;
        carril2slider3--;
        carril3slider3--;
        carril4slider3--;
        carril5slider3--;
        carril6slider3--;
      }

      $('.slider3 ul li').hide();
      $('.slider3 ul li:nth-child('+carril1slider3+')').slideToggle(1200);
      $('.slider3 ul li:nth-child('+carril2slider3+')').show();
      $('.slider3 ul li:nth-child('+carril3slider3+')').show();
      $('.slider3 ul li:nth-child('+carril4slider3+')').show();
      $('.slider3 ul li:nth-child('+carril5slider3+')').show();
      $('.slider3 ul li:nth-child('+carril6slider3+')').show();
    }

    // WARNING: Slider 4
    var contadorimagenes4 = $('.slider4 ul li').length;

    $('.slider4 ul li').hide();
    $('.slider4 ul li:nth-child(-n+4)').show();
    var carril1slider4 = 1;
    var carril2slider4 = 2;
    var carril3slider4 = 3;
    var carril4slider4 = 4;


    $('.flechaderecha4').click(flechaderecha4);
    $('.flechaisquierda4').click(flechaisquierda4);

    function flechaderecha4(){
      if (carril4slider4 >= contadorimagenes4) {
        carril1slider4 = 1;
        carril2slider4 = 2;
        carril3slider4 = 3;
        carril4slider4 = 4;
      }else {
        carril1slider4++;
        carril2slider4++;
        carril3slider4++;
        carril4slider4++;
      }

      $('.slider4 ul li').hide();
      $('.slider4 ul li:nth-child('+carril1slider4+')').show();
      $('.slider4 ul li:nth-child('+carril2slider4+')').show();
      $('.slider4 ul li:nth-child('+carril3slider4+')').show();
      $('.slider4 ul li:nth-child('+carril4slider4+')').toggle(1200);
    }

    function flechaisquierda4(){
      if (carril1slider4 <= 1) {
        carril1slider4 = contadorimagenes4 - 3;
        carril2slider4 = contadorimagenes4 - 2;
        carril3slider4 = contadorimagenes4 - 1;
        carril4slider4 = contadorimagenes4;
      }else {
        carril1slider4--;
        carril2slider4--;
        carril3slider4--;
        carril4slider4--;
      }

      $('.slider4 ul li').hide();
      $('.slider4 ul li:nth-child('+carril1slider4+')').toggle(1200);
      $('.slider4 ul li:nth-child('+carril2slider4+')').show();
      $('.slider4 ul li:nth-child('+carril3slider4+')').show();
      $('.slider4 ul li:nth-child('+carril4slider4+')').show();
    }

    // WARNING: Slider 5
    var contadorimagenes5 = $('.slider5 ul li').length;

    $('.slider5 ul li').hide();
    $('.slider5 ul li:nth-child(-n+4)').show();
    var carril1slider5 = 1;
    var carril2slider5 = 2;
    var carril3slider5 = 3;
    var carril4slider5 = 4;


    $('.flechaderecha5').click(flechaderecha5);
    $('.flechaisquierda5').click(flechaisquierda5);

    function flechaderecha5(){
      if (carril4slider5 >= contadorimagenes5) {
        carril1slider5 = 1;
        carril2slider5 = 2;
        carril3slider5 = 3;
        carril4slider5 = 4;
      }else {
        carril1slider5++;
        carril2slider5++;
        carril3slider5++;
        carril4slider5++;
      }

      $('.slider5 ul li').hide();
      $('.slider5 ul li:nth-child('+carril1slider5+')').show();
      $('.slider5 ul li:nth-child('+carril2slider5+')').show();
      $('.slider5 ul li:nth-child('+carril3slider5+')').show();
      $('.slider5 ul li:nth-child('+carril4slider5+')').toggle(1200);
    }

    function flechaisquierda5(){
      if (carril1slider5 <= 1) {
        carril1slider5 = contadorimagenes5 - 3;
        carril2slider5 = contadorimagenes5 - 2;
        carril3slider5 = contadorimagenes5 - 1;
        carril4slider5 = contadorimagenes5;
      }else {
        carril1slider5--;
        carril2slider5--;
        carril3slider5--;
        carril4slider5--;
      }

      $('.slider5 ul li').hide();
      $('.slider5 ul li:nth-child('+carril1slider5+')').toggle(1200);
      $('.slider5 ul li:nth-child('+carril2slider5+')').show();
      $('.slider5 ul li:nth-child('+carril3slider5+')').show();
      $('.slider5 ul li:nth-child('+carril4slider5+')').show();
    }

    // WARNING: Slider 6
    var contadorimagenes6 = $('.slider6 ul li').length;

    $('.slider6 ul li').hide();
    $('.slider6 ul li:nth-child(-n+4)').show();
    var carril1slider6 = 1;
    var carril2slider6 = 2;
    var carril3slider6 = 3;
    var carril4slider6 = 4;


    $('.flechaderecha6').click(flechaderecha6);
    $('.flechaisquierda6').click(flechaisquierda6);

    function flechaderecha6(){
      if (carril4slider6 >= contadorimagenes6) {
        carril1slider6 = 1;
        carril2slider6 = 2;
        carril3slider6 = 3;
        carril4slider6 = 4;
      }else {
        carril1slider6++;
        carril2slider6++;
        carril3slider6++;
        carril4slider6++;
      }

      $('.slider6 ul li').hide();
      $('.slider6 ul li:nth-child('+carril1slider6+')').show();
      $('.slider6 ul li:nth-child('+carril2slider6+')').show();
      $('.slider6 ul li:nth-child('+carril3slider6+')').show();
      $('.slider6 ul li:nth-child('+carril4slider6+')').toggle(1200);
    }

    function flechaisquierda6(){
      if (carril1slider6 <= 1) {
        carril1slider6 = contadorimagenes6 - 3;
        carril2slider6 = contadorimagenes6 - 2;
        carril3slider6 = contadorimagenes6 - 1;
        carril4slider6 = contadorimagenes6;
      }else {
        carril1slider6--;
        carril2slider6--;
        carril3slider6--;
        carril4slider6--;
      }

      $('.slider6 ul li').hide();
      $('.slider6 ul li:nth-child('+carril1slider6+')').toggle(1200);
      $('.slider6 ul li:nth-child('+carril2slider6+')').show();
      $('.slider6 ul li:nth-child('+carril3slider6+')').show();
      $('.slider6 ul li:nth-child('+carril4slider6+')').show();
    }

    // WARNING: Slider 7
    var contadorimagenes7 = $('.slider7 ul li').length;

    $('.slider7 ul li').hide();
    $('.slider7 ul li:nth-child(-n+6)').show();
    var carril1slider7 = 1;
    var carril2slider7 = 2;
    var carril3slider7 = 3;
    var carril4slider7 = 4;
    var carril5slider7 = 5;
    var carril6slider7 = 6;


    $('.flechaderecha7').click(flechaderecha7);
    $('.flechaisquierda7').click(flechaisquierda7);

    function flechaderecha7(){
      if (carril6slider7 >= contadorimagenes7) {
        carril1slider7 = 1;
        carril2slider7 = 2;
        carril3slider7 = 3;
        carril4slider7 = 4;
        carril5slider7 = 5;
        carril6slider7 = 6;
      }else {
        carril1slider7 += 6;
        carril2slider7 += 6;
        carril3slider7 += 6;
        carril4slider7 += 6;
        carril5slider7 += 6;
        carril6slider7 += 6;
      }

      $('.slider7 ul li').hide();
      $('.slider7 ul li:nth-child('+carril1slider7+')').toggle(10);
      $('.slider7 ul li:nth-child('+carril2slider7+')').toggle(600);
      $('.slider7 ul li:nth-child('+carril3slider7+')').toggle(700);
      $('.slider7 ul li:nth-child('+carril4slider7+')').toggle(800);
      $('.slider7 ul li:nth-child('+carril5slider7+')').toggle(900);
      $('.slider7 ul li:nth-child('+carril6slider7+')').toggle(1200);
    }

    function flechaisquierda7(){
      if (carril1slider7 <= 1) {
        carril1slider7 = contadorimagenes7 - 5;
        carril2slider7 = contadorimagenes7 - 4;
        carril3slider7 = contadorimagenes7 - 3;
        carril4slider7 = contadorimagenes7 - 2;
        carril5slider7 = contadorimagenes7 - 1;
        carril6slider7 = contadorimagenes7;
      }else {
        carril1slider7 -= 6;
        carril2slider7 -= 6;
        carril3slider7 -= 6;
        carril4slider7 -= 6;
        carril5slider7 -= 6;
        carril6slider7 -= 6;
      }

      $('.slider7 ul li').hide();
      $('.slider7 ul li:nth-child('+carril1slider7+')').toggle(1200);
      $('.slider7 ul li:nth-child('+carril2slider7+')').toggle(900);
      $('.slider7 ul li:nth-child('+carril3slider7+')').toggle(800);
      $('.slider7 ul li:nth-child('+carril4slider7+')').toggle(700);
      $('.slider7 ul li:nth-child('+carril5slider7+')').toggle(600);
      $('.slider7 ul li:nth-child('+carril6slider7+')').toggle(10);
    }

    setInterval(function(){
      flechaderecha7();
    },10000);

    // WARNING: Slider 8
    var contadorimagenes8 = $('.slider8 ul li').length;

    $('.slider8 ul li').hide();
    $('.slider8 ul li:nth-child(-n+6)').show();
    var carril1slider8 = 1;
    var carril2slider8 = 2;
    var carril3slider8 = 3;
    var carril4slider8 = 4;
    var carril5slider8 = 5;
    var carril6slider8 = 6;


    $('.flechaderecha8').click(flechaderecha8);
    $('.flechaisquierda8').click(flechaisquierda8);

    function flechaderecha8(){
      if (carril6slider8 >= contadorimagenes8) {
        carril1slider8 = 1;
        carril2slider8 = 2;
        carril3slider8 = 3;
        carril4slider8 = 4;
        carril5slider8 = 5;
        carril6slider8 = 6;
      }else {
        carril1slider8++;
        carril2slider8++;
        carril3slider8++;
        carril4slider8++;
        carril5slider8++;
        carril6slider8++;
      }

      $('.slider8 ul li').hide();
      $('.slider8 ul li:nth-child('+carril1slider8+')').show();
      $('.slider8 ul li:nth-child('+carril2slider8+')').show();
      $('.slider8 ul li:nth-child('+carril3slider8+')').show();
      $('.slider8 ul li:nth-child('+carril4slider8+')').show();
      $('.slider8 ul li:nth-child('+carril5slider8+')').show();
      $('.slider8 ul li:nth-child('+carril6slider8+')').toggle(1200);
    }

    function flechaisquierda8(){
      if (carril1slider8 <= 1) {
        carril1slider8 = contadorimagenes8 - 5;
        carril2slider8 = contadorimagenes8 - 4;
        carril3slider8 = contadorimagenes8 - 3;
        carril4slider8 = contadorimagenes8 - 2;
        carril5slider8 = contadorimagenes8 - 1;
        carril6slider8 = contadorimagenes8;
      }else {
        carril1slider8--;
        carril2slider8--;
        carril3slider8--;
        carril4slider8--;
        carril5slider8--;
        carril6slider8--;
      }

      $('.slider8 ul li').hide();
      $('.slider8 ul li:nth-child('+carril1slider8+')').slideToggle(1200);
      $('.slider8 ul li:nth-child('+carril2slider8+')').show();
      $('.slider8 ul li:nth-child('+carril3slider8+')').show();
      $('.slider8 ul li:nth-child('+carril4slider8+')').show();
      $('.slider8 ul li:nth-child('+carril5slider8+')').show();
      $('.slider8 ul li:nth-child('+carril6slider8+')').show();
    }

  }
}

mediaqueryresolucion1280.addListener(mqlresolucion1280);
mqlresolucion1280(mediaqueryresolucion1280);
