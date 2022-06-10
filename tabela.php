|<?php
  error_reporting(0);
  include "conexao.php";
  $listar = mysqli_query($conexaobd, "SELECT * FROM tabela");

  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <title>Tabela de Dados</title>
</head>

<body>
  <input id="myInput" type="text" placeholder="Search..">
  <table class="table table-success table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NOME</th>
        <th scope="col">SENHA</th>
        <th scope="col">DATA DE NASCIMENTO</th>
      </tr>
    </thead>
    <?php while ($usuario = mysqli_fetch_assoc($listar)) { ?>
      <tbody id="myTable">
        <tr>
          <th scope="row">1</th>
          <td><?php echo $usuario['id']; ?></td>
          <td><?php echo $usuario['nome']; ?></td>
          <td><?php echo $usuario['email']; ?></td>
          <td><?php echo $usuario['datinha']; ?></td>
          <td><?php echo $usuario['senha']; ?></td>
        </tr>

      </tbody>
    <?php } ?>
  </table>
  <script src="tabela.js"></script>
</body>

</html>