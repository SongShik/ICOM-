<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>ICOM seguros</title>
  <link rel="icon" type="image/x-icon" href="img/ICOM LOGO.png">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <script src='js/jquery-3.4.1.min.js'></script>

</head>

<body>
  <!-- menu -->
  <section>
    <nav class="navbar navbar-expand-lg menu ">
      <a class="navbar-brand" href="#">
        <img src="img/icone.png" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <img src="img/menu-icone.png" alt="">
      </button>


      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item"> <a class="nav-link" href="#"> Área do Cliente </a> </li>
          <li class="nav-item"> <a class="nav-link" href="#quemsomos"> Quem Somos </a> </li>
          <li class="nav-item"> <a class="nav-link" href="#"> Acesso Adminstrativo </a> </li>
        </ul>
      </div>
    </nav>

  </section>

  <!-- imagem principal -->
  <section>

    <div class="parallax-window imagem-principal  text-center " data-parallax="scroll" data-image-src="../img/5.jpg">
      <div class="overlay centro ">

        <p class="wow fadeInDown ">Pensou em saúde para sua empresa,</p>
        <div class="row ">
          <div class="col wow fadeInLeft">
            <hr class="linha-icom d-none d-lg-block">
          </div>
          <p class="wow fadeIn ICOM" data-wow-delay="1s"> PENSOU ICO<span class="texto-icom">M</span></p>
          <!-- data-wow-duration="2s" data-wow-delay="2s" slideInUp -->
          <div class="col wow fadeInRight">
            <hr class="linha-icom d-none d-lg-block">
          </div>
        </div>


        <form class="form-inline justify-content-center " action="http://13.82.100.46/icomcotacao/save-email">
          <div class="row row-cotacao wow fadeInUp">
            <div class="col-10 ">
              <input type="email" class="email " placeholder="Insira seu email para começar a cotação">
            </div>

            <div class="col-2 ">
              <button type="submit" value="Submit" class="botao-cotacao ">
                <svg version="1.1" id="Camada_1" xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32"
                  style="enable-background:new 0 0 32 32;" xml:space="preserve">

                  <g id="Page-1">
                    <g id="icon-111-search">
                      <path id="search" class="st0" d="M20.06,23.04c-2.08,1.48-4.62,2.35-7.36,2.35C5.68,25.39,0,19.71,0,12.7S5.68,0,12.7,0
			s12.7,5.68,12.7,12.7c0,2.74-0.87,5.28-2.35,7.36l8.34,8.34c0.82,0.82,0.82,2.14,0,2.95l-0.04,0.04c-0.81,0.81-2.14,0.82-2.95,0
			L20.06,23.04L20.06,23.04z M12.7,22.41c5.36,0,9.71-4.35,9.71-9.71s-4.35-9.71-9.71-9.71S2.99,7.33,2.99,12.7
			S7.33,22.41,12.7,22.41L12.7,22.41z" />
                    </g>
                  </g>
                </svg></button>

            </div>
          </div>

        </form>



      </div>
    </div>
  </section>

  <!-- vantagens -->
  <section>
    <div class="row mt-3">
      <div class="col">
        <hr class="linha">
      </div>
      <div class="col-auto titulo">Vantagens da ICOM</div>
      <div class="col">
        <hr class="linha">
      </div>
    </div>

    <!-- carousel pequeno-->
    <div id="carouselExampleControls" class="carousel slide d-lg-none wow fadeInUp" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="box-externo ">
            <div class="box ">
              <div class="box-esquerda ">
                <img src="img/pip.png" class="img-fluid ml-2" alt="">
              </div>
              <div class="box-direita texto-cinza  ">
                <p class="font-weight-bold ">Foco em Redução de Custo</p>
                O Principal foco da ICOM Seguros é reduzir o custo que a empresa tem com plano de saúde empresarial.
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="box-externo ">
            <div class="box ">
              <div class="box-esquerda ">
                <img src="img/maos.png" class="img-fluid ml-2" alt="">
              </div>
              <div class="box-direita texto-cinza">
                <p class="font-weight-bold">Ecxelência em pós venda</p>
                Buscamos sempre estreitar nosso relacionamento com nosso cliente para que ele saiba que poderá sempre
                contar com a ICOM.
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="box-externo ">
            <div class="box ">
              <div class="box-esquerda ">
                <img src="img/money.png" class="img-fluid ml-2" alt="">
              </div>
              <div class="box-direita texto-cinza ">
                <p class="font-weight-bold">Desconto ICOM</p>
                A ICOM também oferece um desconto exclusivo na contratação de planos para PME, cote seu plano e veja a
                diferença!
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
    <div class="container d-none d-lg-block wow fadeInUp">
      <div class="row ">
        <div class="col-lg-4 col-md-6  mt-4 ">
          <div class="box ">
            <div class="box-esquerda ">
              <img src="img/pip.png" class="img-fluid ml-2" alt="">
            </div>
            <div class="box-direita texto-cinza  ">
              <p class="font-weight-bold ">Foco em Redução de Custo</p>
              O Principal foco da ICOM Seguros é reduzir o custo que a empresa tem com plano de saúde empresarial.
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6  mt-4 ">
          <div class="box ">
            <div class="box-esquerda ">
              <img src="img/maos.png" class="img-fluid ml-2" alt="">
            </div>
            <div class="box-direita texto-cinza">
              <p class="font-weight-bold">Ecxelência em pós venda</p>
              Buscamos sempre estreitar nosso relacionamento com nosso cliente para que ele saiba que poderá sempre
              contar com a ICOM.
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-4 ">
          <div class="box ">
            <div class="box-esquerda ">
              <img src="img/money.png" class="img-fluid ml-2" alt="">
            </div>
            <div class="box-direita texto-cinza ">
              <p class="font-weight-bold">Desconto ICOM</p>
              A ICOM também oferece um desconto exclusivo na contratação de planos para PME, cote seu plano e veja a
              diferença!
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!--carousel seguradoras-->
    <div class="owl-carousel mt-5 wow fadeInDown " data-wow-delay="0.5s" id="seguradoras-slider">
        <div class="item"><img src="img/5.jpg" alt="image"/></div>
        <div class="item"><img src="img/5.jpg" alt="image"/></div>
        <div class="item"><img src="img/5.jpg" alt="image"/></div>
        <div class="item"><img src="img/5.jpg" alt="image"/></div>
        <div class="item"><img src="img/5.jpg" alt="image"/></div>
        <div class="item"><img src="img/5.jpg" alt="image"/></div>
        <div class="item"><img src="img/5.jpg" alt="image"/></div>
        <div class="item"><img src="img/5.jpg" alt="image"/></div>
    </div>
  
  </section>

  <!--depoimentos -->
  <section class="depoimentos-fundo">
    <div class="row mt-5">
      <div class="col">
        <hr class="linha">
      </div>
      <div class="col-auto titulo " id="titulo-depoimentos">Depoimentos</div>
      <div class="col">
        <hr class="linha">
      </div>
    </div>
    <div class="container ">
      <div class="row mt-5">
        <div class="col-md-12">
          <div id="depoimento-slider" class="owl-carousel">
            <div class="testimonial wow fadeInUp">
              <div class="pic">
                <img src="img/depoimento1.jpeg" alt="">
              </div>
              <p class="description">
                A qualidade, agilidade e ética no atendimento da ICOM não nos deixou dúvida, e hoje estamos com 100% de
                nossos benefícios com eles.
              </p>
              <h3 class="testimonial-title">Lilian Lemos - Estrelacom</h3>
            </div>

            <div class="testimonial wow fadeInUp" data-wow-delay="0.2s">
              <div class="pic">
                <img src="img/depoimento2.jpeg" alt="">
              </div>
              <p class="description">
                Trabalhar com a ICOM na implantação do benefício saúde da empresa foi fácil e descomplicado, os
                consultores nos prestaram em excelente atendimento em todos os processos.
              </p>
              <h3 class="testimonial-title">Caroline Yoshida - Vérios</h3>
            </div>

            <div class="testimonial wow fadeInUp" data-wow-delay="0.4s">
              <div class="pic">
                <img src="img/depoimento3.jpeg" alt="">
              </div>
              <p class="description">
                A ICOM é uma corretora comprometida e sempre com disponibilidade em nos ajudar. Nunca ficamos sem
                atendimento e sempre somos acompanhados até a resolução. É um parceiro com qualidade ímpar.
              </p>
              <h3 class="testimonial-title">Carina - G&P</h3>
            </div>

            <div class="testimonial wow fadeInUp" data-wow-delay="0.4s">
              <div class="pic">
                <img src="img/depoimento4.jpeg" alt="">
              </div>
              <p class="description">
                Os profissionais da ICOM são proativos, tem iniciativa e são extremamente competentes.
                A Gefran gostaria de agradecer a parceria e espera contar com a ICOM por um longo tempo.
              </p>
              <h3 class="testimonial-title">Claudia Pieri - Gefran</h3>
            </div>
          </div>
        </div>
      </div>
    </div>


  </section>

  <!--quem somos-->
  <section id="quemsomos">
    <div class="row mt-5">
      <div class="col">
        <hr class="linha">
      </div>
      <div class="col-auto titulo">Quem Somos</div>
      <div class="col">
        <hr class="linha">
      </div>
    </div>


    <div class="container mt-4">
      <div class="row ">
        <div class="col-md-6  ">
          <div class="logo-icon">
            <img class="img-fluid wow fadeInLeft" data-wow-duration="0.5s" src="img/ICOM LOGO.png"
              alt="Imagem não carregou">
          </div>
        </div>
        <div class="col-md-6 text-justify wow fadeInRight" data-wow-duration="0.5s"><br>
          <p>Somos uma consultoria em seguros B2B especializada na área de benefícios
            (plano de saúde, odontológico e seguro de vida) dos funcionários.</p>
          <p> Trabalhamos com todas as seguradoras do mercado para assim identificar
            o melhor custo benefício para atender de forma personalizada cada empresa. </p>
          Entendemos que o plano de saúde não precisa ter um custo altíssimo para ser eficiente
          e atender as necessidades da empresa e do beneficiário.
        </div>
      </div>
    </div>
  </section>

  <!--contato-->
  <section>
    <div class="container mt-4">
      <div class="row ">
        <div class="col-md-6 wow fadeInLeft " data-wow-duration="0.5s">
          <div class="row map-responsive border-sombra ">

            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29257.802950452795!2d-46.63654300000001!3d-23.560348!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb6a53ce5ab0879b4!2sICOM+seguros!5e0!3m2!1spt-BR!2sbr!4v1555515730974!5m2!1spt-BR!2sbr"
              frameborder="0" style="border:0" allowfullscreen></iframe>

          </div>
          <div class="row mt-5 text-center ">
            <div class="col ">
              <div id="localizacao"></div>
              <p class="mt-3">R. José Getúlio, 89 Liberdade, São Paulo 01509-001</p>
            </div>
            <div class="col ">
              <div id="telefone">
              </div>
              <p class="mt-3">(11) 3120-2515</p>
            </div>
            <div class="col ">
              <div id="email">
              </div>
              <p class="mt-3">icom@icomseguros.com.br</p>
            </div>
          </div>
        </div>
        <!--formulario-->
        <div class="col-md-6  ">
          <div class="card  ml-auto mr-auto wow fadeInRight" style="width:450px" data-wow-duration="0.5s">
            <div class="card-body border-sombra">
              <h4 class="card-title">Contato</h4>
              <h6 class="card-subtitle mb-2 text-muted">Mande uma mensagem para nós</h6>
              <form action="" method="get">

                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label" id="nome"> </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Nome">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label" id="email2"></label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputPassword3" placeholder="E-mail">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label" id="titulo-email"></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="Titulo E-mail">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label" id="mensagem"></label>
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="5" id="comment" placeholder="Mensagem"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <button type="submit" value="Submit" class="btn btn-primary">Enviar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!--footer-->
  <footer class="menu mt-5 footer">
    <div class="container">
    
    <div class=" py-3  text-center">© 2019 Copyright: ICOM Seguros</div>

    <ul class="list-inline  text-center">
        <li class="list-inline-item"><a class="social-icon text-xs-center" id="icon-facebook" href="#"></a></li>
        <li class="list-inline-item"><a class="social-icon text-xs-center" id="icon-linkedin" target="_blank" href="#"></a></li>
        <li class="list-inline-item"><a class="social-icon text-xs-center" id="icon-instagram" target="_blank" href="#"></a></li>
     </ul>
    <i class="font-size-13">* os valores do planos estão sujeitos a mudanças</i>
    </div>

    
  </footer>

  <div  class="fixo" style="color:#fff"><span id="largura" ></span>x<span id="altura"></span></div>
</body>
<!--jquery -->

<!--bootstrap-->
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js'></script>

<!--carousel-->
<script src='js/owl.carousel.js'></script>
<script src="js/parallax.js"></script>
<!--animate wow-->
<link rel="stylesheet" href="css/animate.css">

<script src="js/wow.min.js"></script>

<script src="js/index.js"></script>

</html>