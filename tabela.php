<?php
/* error_reporting(0); */
include "conexao.php";
include "editarBD.php";
$listar = mysqli_query($conexaobd, "SELECT * FROM tabela");

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

     <title>Tabela de Dados</title>
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
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-digital-trend.css">
     <style>
          #pesquise{
               display: flex;
               flex-direction: row;
               justify-content: center;
               width: 400px;
               height: 50px;
               
          }

          #linha{
           margin-top: 55px;
          }

     </style>
</head>

<body>

     <!-- MENU BAR -->
     <nav class="navbar navbar-expand-lg">
          <div class="container">
               <a class="navbar-brand" href="index2.php">
                    <i class="fa fa-book"></i>
                    Web Study's
               </a>

               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>

               <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                         <li class="nav-item">
                              <a href="index2.php#project" class="nav-link smoothScroll">Matérias</a>
                         </li>
                         <li class="nav-item">
                              <a href="index2.php#footer" class="nav-link smoothScroll">Sobre</a>
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
     <div id="linha" class="row">
     <div class="col-sm-4"></div>
     <div class="input-group col-sm-4 mb-4">
          <span id="icon" class="input-group-text"><i class="fa fa-search"></i></span>
          <input id="pesquise" type="text" class="form-control" placeholder="Pesquise">
     </div>
     </div>
<br>
     <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-10">
               <table class="table table">
                    <thead>
                         <tr>
                              <th scope="col">ID</th>
                              <th scope="col">NOME</th>
                              <th scope="col">EMAIL</th>
                              <th scope="col">DATA DE NASCIMENTO</th>
                              <th scope="col">SENHA</th>
                         </tr>
                    </thead>

                    <?php while ($usuario = mysqli_fetch_assoc($listar)) { ?>
                         <tbody id="tabela">
                              <tr>
                                   <th scope="row"><?php echo $usuario['id']; ?></th>
                                   <td><?php echo $usuario['nome']; ?></td>
                                   <td><?php echo $usuario['email']; ?></td>
                                   <td><?php echo $usuario['datinha']; ?></td>
                                   <td><?php echo $usuario['senha']; ?></td>
                                   <td><a href="delete.php?id=<?= $usuario['id'] ?>" class="btn btn-danger">Delete</a></td>
                                   <td><a href="editar.php?id=<?php echo $usuario['id']; ?>" class="btn btn-warning">Edit</a></td>
                              </tr>

                         </tbody>
                    <?php } ?>
               </table>
          </div>
     </div>
     <!--  -->

     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="tabela.js"></script>

</body>

</html>