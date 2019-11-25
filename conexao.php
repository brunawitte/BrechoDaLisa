<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "tcc";



$con = mysqli_connect ($servidor, $usuario, $senha, $dbname);


if (!$con) {
  die("Falha na conexão: ");
}


?>