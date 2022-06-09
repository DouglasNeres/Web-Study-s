<?php
    include 'conexao.php';
   
    
  $nome = $_POST["name"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];
  $datas = $_POST["datinha"];

  $salvar = mysqli_query($conexaobd , "INSERT INTO tabela(nome , email , senha , datinha ) VALUES('$nome' ,'$email', '$senha' , '$datas')");

  if ($salvar) {
		header('location: contact.php');
	}
