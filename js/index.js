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
      
      autoplayHoverPause:true,
      responsive:{
        0:{
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
      autoplayTimeout:2000,
      smartSpeed:1000,
      responsive:{
        0:{
            items:1,
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


/* validação dos campos com jquery validate
$("#formulario-email").validate({
  rules : {
        nome:{
               required:true,
               minlength:3
        },
        email:{
               required:true
        },
        assunto:{
               required:true
        },
        mensagem:{
               required:true
        }                                
  },
  messages:{
        nome:{
               required:"Por favor, informe seu nome",
               minlength:"O nome deve ter pelo menos 3 caracteres"
        },
        email:{
               required:"É necessário informar um email"
        },
        assunto:{
               required:"É necessário informar o titulo do email"
        },
        mensagem:{
               required:"A mensagem não pode ficar em branco"
        }     
  }
}); */

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


/* teste taltura e largura tela
    <div><span id="largura"></span>x<span id="altura"></span></div>

function getDimensions() {
  var largura = document.getElementById('largura'),
      altura = document.getElementById('altura');
  
  largura.innerText = window.innerWidth;
  altura.innerText = window.innerHeight;
}

window.onresize=function() {
  getDimensions()
}
getDimensions();

jQuery(window).scroll(function () {
  if (jQuery(this).scrollTop() > 0) {
      jQuery(".fb-page").addClass("fixo");
  } else {
      jQuery(".fb-page").removeClass("fixo");
  }
 });
*/