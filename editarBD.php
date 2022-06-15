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
        $nome = $_POST['nome'];
    }

?>