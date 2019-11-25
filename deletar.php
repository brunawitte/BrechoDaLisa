<?php
include_once('conexao.php');
$select = "DELETE from cliente where ID_Cliente='".$_GET['del_id']."'";
$query = mysqli_query($con, $select) or die($select);
header ("Location: MostrarClientes.php");
?>