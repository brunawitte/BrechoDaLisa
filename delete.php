<?php
include_once('conexao.php');
$select = "DELETE from tbconsulta where id_consulta='".$_GET['del_id']."'";
$query = mysqli_query($con, $select) or die($select);
header ("Location: CadastroCliente.php");
?>