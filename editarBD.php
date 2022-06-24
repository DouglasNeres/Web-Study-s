<?php 
    include 'conexao.php';
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $consulta = mysqli_query($conexaobd, "SELECT * FROM tabela WHERE id = $id");

        $cont = (is_array($consulta) ? count($consulta) : 1);

        if($cont) {
            $campos = mysqli_fetch_assoc($consulta);
            $nome = $campos['nome'];
            $email = $campos['email'];
            $senha = $campos['senha'];
            $datas = $campos['datinha'];
        }

    }

    if (isset($_POST['editar'])){
        $id = $_GET["id"];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $datas = $_POST["datinha"];
        /* $tipo =  $_POST["tipo"]; */
        $consultaatualizar = "UPDATE tabela SET nome = '$nome' , email = '$email' , senha = '$senha' , datinha = '$datas' WHERE id = $id ";

        $inserirbanco = mysqli_query($conexaobd , $consultaatualizar);

        header('location: tabela.php');
    }
    
    // Pão
?>