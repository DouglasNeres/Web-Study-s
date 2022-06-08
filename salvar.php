<?php
    include 'conexao.php';
   
    
  $nome = $_POST["name"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];
  $data = $_POST["datiha"];
    mysqli_query($conexaobd , "INSERT INTO tabela(nome , email , senha , datinha ) VALUES('$nome' ,'$email', '$senha' , '$data')");

  

   

?>