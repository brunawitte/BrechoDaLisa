<?php
include("auth.php");
?>
<?php
require('conexao.php');

?>

<?php

include_once('conexao.php');

if(isset($_GET['id'])) {

$sql = "DELETE FROM cliente WHERE  ID_Cliente = '".$_GET['id']."'";
$resultado2 = mysqli_query($con,$sql);
if (!$resultado2) {
	echo "<br>";
              echo "<br>";
              
              echo "<center>Não foi possível alterar, tente novamente.</center>";
              echo "<br>";
             
          } else {
          	echo "<br>";
          
              echo "<br>";
             echo "<meta HTTP-EQUIV='refresh' CONTENT='0;MostrarClientes.php'>";
            
              echo "<br>";
              
             
          }

            }       


?>
