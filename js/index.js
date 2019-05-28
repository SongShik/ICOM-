/* menu */
function menu() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

var linkClicked = document.getElementsByClassName('nav-link');
var numClass = linkClicked.length;

for (var i = 0; i < numClass; i++) {
  linkClicked[i].addEventListener('click', function(){
    var onTheMoment = document.getElementsByClassName('active');
    onTheMoment[0].className = onTheMoment[0].className.replace(' active', '');
    this.className += ' active';
  }, false);
}

/* animação no scroll */
$('nav a').click(function(e){
 e.preventDefault();

 var id = $(this).attr('href'),
  targetOffset = $(id).offset().top;
  $('html , body').animate({
    scrollTop: targetOffset
  }, 1200);


});



/* carousel */
$(document).ready(function() {
  $("#depoimentos-carousel").on("slide.bs.carousel", function(e) {
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $(".carousel-item").length;

    if (idx >= totalItems - (itemsPerSlide - 1)) {
      var it = itemsPerSlide - (totalItems - idx);
      for (var i = 0; i < it; i++) {
        // append slides to end
        if (e.direction == "left") {
          $(".carousel-item")
            .eq(i)
            .appendTo(".carousel-inner");
        } else {
          $(".carousel-item")
            .eq(0)
            .appendTo($(this).find(".carousel-inner"));
        }
      }
    }
  });
});

/* carrousel */
$(document).ready(function(){
  $('#seguradoras-slider').owlCarousel({
      loop:true,
      margin:10,
      autoplay:true,
      autoplayTimeout:2000,
      smartSpeed:1000,
      
      autoplayHoverPause:true,
      responsive:{
        0:{
          autoWidth:true,
          items:1,
        },
        600:{
            items:3,
        },
        1000:{
            items:6,
        }
    }     
  });

  $("#depoimento-slider").owlCarousel({
      loop:true,
      autoplay:true,
      autoplayTimeout:5000,
      smartSpeed:1000,
      responsive:{
        0:{
            items:1,
            autoplayTimeout:10000,
            smartSpeed:1000,
        },
        750:{
            items:2,
        },
        1000:{
            items:2,
        },
        1300:{
            items:3,
        }
    }     
  
     
  });
});



/* parallax */
$('.parallax-window').parallax({imageSrc: 'img/5.jpg'}); 

/* wow animated.css */ 
new WOW().init();

/* voltar ao topo */
$(function(){
  $(document).on( 'scroll', function(){
      if ($(window).scrollTop() > 100) {
          $('div.smoothscroll-top, div.voltar-topo').addClass('show');
      } else {
          $('div.smoothscroll-top, div.voltar-topo').removeClass('show');
      }
  });
  $('div.smoothscroll-top').on('click', scrollToTop);
});

function scrollToTop() {
  verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
  element = $('body');
  offset = element.offset();
  offsetTop = offset.top;
  $('html, body').animate({scrollTop: offsetTop}, 600, 'linear');
}




function abrirSeguro(evt, seguro) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  
  for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";

  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
     

  if (seguro == "odonto"){
    $('#tipos-seguros-fundo').removeClass('tipos-seguros-fundo3');
    $('#tipos-seguros-fundo').addClass('tipos-seguros-fundo2');
  }else{
    $('#tipos-seguros-fundo').removeClass('tipos-seguros-fundo2');
    $('#tipos-seguros-fundo').addClass('tipos-seguros-fundo3');
  }

  }
  
  document.getElementById(seguro).style.display = "block";
  evt.currentTarget.className += " active";
}

// elemento quando abrir a pagina
document.getElementById("defaultOpen").click();
$('#tipos-seguros-fundo').addClass('tipos-seguros-fundo2');

$("#formulario-email").validate({
  rules : {
        nome:{
               required:true,
               minlength:3,
               
        },
        email:{
               required:true,
               
        },

        mensagem:{
               required:true
        },                              
  },
  messages:{
        nome:{
               required:"Por favor, informe seu nome",
               minlength:"O nome deve ter pelo menos 3 caracteres"
        },
        email:{
               required:"É necessário informar um email"
        },
        mensagem:{
               required:"A mensagem não pode ficar em branco"
        }     
  }
}); 
