<?php
   error_reporting(0); 
  include "conexao.php";
  include "editarBD.php";
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
        <th scope="col">Email</th>
        <th scope="col">DATA DE NASCIMENTO</th>
        <th scope="col">SENHA</th>
      </tr>
    </thead>
    <?php while ($usuario = mysqli_fetch_assoc($listar)) { ?>
      <tbody id="myTable">
        <tr>
          <th scope="row"><?php echo $usuario['id']; ?></th>
          <td><?php echo $usuario['nome']; ?></td>
          <td><?php echo $usuario['email']; ?></td>
          <td><?php echo $usuario['datinha']; ?></td>
          <td><?php echo $usuario['senha']; ?></td>
          <td><a href="delete.php?id=<?=$usuario['id']?>" class="btn btn-danger">Delete</a></td>
          <td><a href="editar.php?id=<?php echo $usuario['id']; ?>" class="btn btn-warning">Edit</a></td>
        </tr>

      </tbody>
    <?php } ?>
  </table>
  <script src="tabela.js"></script>
</body>

</html>