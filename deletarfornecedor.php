<?php
include_once('conexao.php');
$select = "DELETE from fornecedor WHERE ID_Fornecedor='".$_GET['del_id']."'";
$query = mysqli_query($con, $select) or die($select);
header ("Location: MostrarFornecedor.php");
?>