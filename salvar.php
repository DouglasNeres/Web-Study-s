<?php
    include 'conexao.php';
   
    
  $nome = $_POST["name"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];
  $datas = $_POST["datinha"];
  $tipo =  $_POST["tipo"];

  $salvar = mysqli_query($conexaobd , "INSERT INTO tabela(nome , email , senha , datinha ) VALUES('$nome' ,'$email', '$senha' , '$datas')");

  if ($salvar) {
    if($tipo == 'admin'){
      header('location: admin.php');
    }else {
		  header('location: index2.php');
    }
	}
