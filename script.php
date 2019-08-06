<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.8, user-scalable=no ">
  <title>ICOM seguros</title>
  <link rel="icon" type="image/x-icon" href="img/ICOM LOGO.png">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>
  <link href="https://fonts.googleapis.com/css?family=Nunito|Maiden+Orange" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <script src='js/jquery-3.4.1.min.js'></script>

</head>

<body>
    <?php
    $assunto = $_POST['assunto'];
    $email = $_POST['email'];
    $corpo = "
        nome:"          .$_POST['nome']."
        assunto:"       .$_POST['assunto']."
        email:"         .$_POST['email']."
        mensagem:"      .$_POST['mensagem']."
     ";
    
    mail('marketing@icomseguros.com.br',$assunto,$corpo,$email);
    
    ?>
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

      <div class="agradecimento "> 
        <div class="container pt-3 ">
          <div class="row">
            <div class="col">
              <div class="logo-icon wow bounceInUp">
                  <img class="img-fluid" src="img/ICOM LOGO.png" alt="Imagem não carregou">
                </div>
              </div>
          </div>
          <div class="row" >
            <div class="col tamanho wow bounceInUp" data-wow-delay="1s">
            <h4><span class="email-obrigado " >Obrigado</span>
                    <br>Agradecemos o envio do seu E-mail,<br> sua opinião ou sua duvida sempre faz<br> diferença, em breve retornaremos seu email
                    <br>
                    <a href="index.php" class="btn btn-lg btn-outline-primary mt-3   ">Voltar para o inicio</a>
                </h4>
            </div>

            
          </div>
        </div>
      </div>
      </section>

  
<!--footer-->
<?php include 'footer.php'; ?>


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