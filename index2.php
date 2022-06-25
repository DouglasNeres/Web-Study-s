<?
     include "editarBD.php"

?>


<!DOCTYPE html>

<html lang="pt-br">

<head>

     <title>Web Study's</title>
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
     <nav class="navbar navbar-expand-lg">
          <div class="container">
               <a class="navbar-brand" href="index2.php">
                    <i class="fa fa-book"></i>
                    Web Study's
               </a>

               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>

               <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                         <li class="nav-item">
                              <a href="#project" class="nav-link smoothScroll">Matérias</a>
                         </li>
                         <li class="nav-item">
                              <a href="#footer" class="nav-link smoothScroll">Sobre</a>
                         </li>
                         <li class="nav-item">
                              <a href="blogKnow.html" class="nav-link">Conheça Melhor</a>
                         </li>
                         <li class="nav-item">
                              <a href="LoginADMIN.html" class="nav-link contact">Painel ADMIN</a>
                         </li>
                    </ul>
               </div>
          </div>
     </nav>


     <!-- HERO -->
     <section class="hero hero-bg d-flex justify-content-center align-items-center">
          <div class="container">
               <div class="row">

                    <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                         <div class="hero-text">

                              <h1 class="text-white" data-aos="fade-up">Web Study's com a melhor e única experiência
                                   para você</h1>

                              <a href="#project" class="custom-btn btn-bg btn mt-3" data-aos="fade-up"
                                   data-aos-delay="100">Acesso aos materiais</a>

                              <strong class="d-block py-3 pl-5 text-white" data-aos="fade-up" data-aos-delay="200"><i
                                        class="fa fa-phone mr-2"></i> +55 07 077 007</strong>
                         </div>
                    </div>

                    <div class="col-lg-6 col-12">
                         <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

                              <img src="images/working-girl.png" class="img-fluid" alt="working girl">
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
<!--      <section class="about section-padding pb-0" id="about">
          <div class="container">
               <div class="row">

                    <div class="col-lg-7 mx-auto col-md-10 col-12">
                         <div class="about-info">

                              <h2 class="mb-4" data-aos="fade-up">O melhor <strong> Site de estudos</strong> para
                                   seus conhecimentos</h2>

                              <p class="mb-0" data-aos="fade-up">Você nunca sabe que resultados virão da sua ação. Mas
                                   se você não fizer nada, <u>não existirão.</u> É melhor você tentar algo, vê-lo não
                                   funcionar
                                   e aprender com isso, do que não fazer nada. A possibilidade de realizarmos um sonho é
                                   o que torna a vida interessante.
                                   <br><br>Você pode <strong>garantir</strong> a melhor experiência e usualidade que um
                                   estudante sonha em ter para seu aprofundamento nos estudos e bons resultados.
                              </p>
                         </div>

                         <div class="about-image" data-aos="fade-up" data-aos-delay="200">

                              <img src="images/office.png" class="img-fluid" alt="office">
                         </div>
                    </div>

               </div>
          </div>
     </section>

 -->
     <!-- PROJECT -->
     <section class="project section-padding" id="project">
          <div class="container-fluid">
               <div class="row">

                    <div class="col-lg-12 col-12">

                         <h2 class="mb-5 text-center" data-aos="fade-up">
                              Acesse as matérias correspondentes a
                              <strong>sua necessidade</strong>
                         </h2>

                         <div class="owl-carousel owl-theme" id="project-slide">
                              <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
                                   <img src="images/img-project/ling.jpg" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>Matérias</small>

                                        <h3>
                                             <a href="blogLinguaguens.html">
                                                  <span>LINGUAGENS</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="images/img-project/nature.jpg" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>Matérias</small>

                                        <h3>
                                             <a href="blogNatureza.html">
                                                  <span>CIÊNCIAS DA NATUREZA</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="images/img-project/human.jpg" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>Matérias</small>

                                        <h3>
                                             <a href="blogHumanas.html">
                                                  <span>CIÊNCIAS HUMANAS</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <footer class="site-footer">
          <div class="container" id="footer">
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
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>

</html>