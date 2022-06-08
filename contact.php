<?php
error_reporting(0);
include "conexao.php";
 include "salvar.php"; 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

     <title>Digital Trend Contact</title>
<!--

DIGITAL TREND

https://templatemo.com/tm-538-digital-trend

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">
     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-digital-trend.css">

</head>
<body>

     <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg position-absolute">
        <div class="container">
          <a class="navbar-brand" href="index.html">
              <i class="fa fa-line-chart"></i>
              Web Study's
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="index.html#about" class="nav-link">Studio</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.html#project" class="nav-link">Our Works</a>
                    </li>
                    <li class="nav-item">
                        <a href="blog.html" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.html" class="nav-link active contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


     <!-- CONTACT -->
     <section class="contact section-padding">
          <div class="container">
               <div class="row">

                    <div class="col-lg-6 mx-auto col-md-7 col-12 py-5 mt-5 text-center" data-aos="fade-up">

                      <h1 class="mb-4">Digite os seus <strong>Dados</strong> para se cadastrar</h1>

                      <p>or email us at <a href="mailto:hello@company.com">hello@company.com</a></p>
                      <p>Please follow our <a rel="nofollow" href="https://templatemo.com/contact">contact page</a> to <strong>setup</strong> the contact form.</p>
                    </div>

                    <div class="col-lg-8 mx-auto col-md-10 col-12">
                    
                    <!-- Follow https://templatemo.com/contact page to setup your own contact form -->
                    
                      <form action="#" method="post" class="contact-form" data-aos="fade-up" data-aos-delay="300" role="form">
                        <div class="row">
                          <div class="col-lg-6 col-12">
                            <input type="text" class="form-control" name="name" placeholder="Name">
                          </div>

                          <div class="col-lg-6 col-12">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                          </div>

                          <div class="col-lg-6 col-12">
                            <input type="password" class="form-control" name="senha" placeholder="Senha">
                          </div>
                          <div class="col-lg-6 col-12">
                            
                          <input type="date" class="form-control" name="datinha">
                          </div>
                          <!-- <div class="col-lg-12 col-12">
                            <textarea class="form-control" rows="6" name="message" placeholder="Message"></textarea>
                          </div>  --> 

                           <div class="col-lg-5 mx-auto col-7">
                            <button type="submit" class="form-control" id="submit-button" name="submit">Cadastrar-se</button>
                          </div>
                        </div>

                      </form>
                    </div>

               </div>
          </div>
     </section>

<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
     <div class="google-map" data-aos="zoom-in">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11196.961132529668!2d-43.38581128725845!3d-23.011063013218724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bdb695cd967b7%3A0x171cdd035a6a9d84!2sAv.%20L%C3%BAcio%20Costa%20-%20Barra%20da%20Tijuca%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%20Brazil!5e0!3m2!1sen!2sth!4v1568649412152!5m2!1sen!2sth" width="1920" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
     </div>


     <footer class="site-footer">
      <div class="container">
           <div class="row">

                <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
                     <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">Os Melhores <strong>Conteúdos
                          </strong>pra <u>você</u>.</h1>
                </div>

                <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
                     <h4 class="my-4">Nosso Contato</h4>

                     <p class="mb-1">
                          <i class="fa fa-phone mr-2 footer-icon"></i>
                          +55 07 077 007
                     </p>

                     <p>
                          <a href="https://mail.google.com/mail/u/0/#inbox">
                               <i class="fa fa-envelope mr-2 footer-icon"></i>
                               Curlys@dev.com
                          </a>
                     </p>
                </div>

                <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
                     <h4 class="my-4">Endereço</h4>

                     <p class="mb-1">
                          <a href="https://goo.gl/maps/ZjxQ9YYtfb2QCWom9" target="_blank" rel="noopener noreferrer">
                               <i class="fa fa-home mr-2 footer-icon"></i>
                               R. Dr. Júlio Lima, 2194 - Fatima II, Crateús - CE, Brasil</a>
                     </p>
                </div>

                <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up"
                     data-aos-delay="400">
                     <p class="copyright-text">Web System &copy; EEEP MANOEL MANO <br> 2° ano "B" 2022
                          <br><br>
                          <a rel="nofollow noopener" href="https://abre.bio/Curlys.dev" target="_blank"
                               rel="noopener noreferrer">Design: Curlys.dev</a>
                     </p>
                </div>

                <div class="col-lg-4 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">

                     <ul class="footer-link">
                          <li><a href="#">História</a></li>
                          <li><a href="#">Trabalho</a></li>
                          <li><a href="#">Privacidade</a></li>
                     </ul>
                </div>

                <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                     <ul class="social-icon">
                          <li><a href="https://www.instagram.com/eeepmanoelmano/" target="_blank"
                                    rel="noopener noreferrer" class="fa fa-instagram"></a></li>
                          <li><a href="#" class="fa fa-github"></a></li>
                          <li><a href="#" class="fa fa-linkedin"></a></li>
                          <li><a href="#" class="fa fa-facebook"></a></li>
                     </ul>
                </div>

           </div>
      </div>
 </footer>



     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>