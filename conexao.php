<?php 

$server = "localhost";
$user = "root";
$password = "";
$bd = "web_studies";

$conexaobd = mysqli_connect($server, $user, $password, $bd);

if (!$conexaobd) {
    echo "not connected";
}




?>