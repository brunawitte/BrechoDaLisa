<?php




require ('conexao.php');

 $ID_Item_Compra = filter_input(INPUT_POST,'ID_Item_Compra');

$query1 = "INSERT INTO item (ID_Item_Compra) VALUES ('$ID_Item_Compra')";

$id = mysqli_insert_id($con);


$resultado = mysqli_query($con,$query1);
              if (!$resultado) {
              echo "<br>";
              echo "<br>";
              echo "<br>";
              echo "<br>";
              echo "<br>";
              echo "<center>";
              echo "Não foi possível cadastrar, tente novamente.";
              echo "</center>";
              echo "<br>";
              echo "<br>";
              echo "<br>";
              } else {
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<center><img src=https://image.flaticon.com/icons/svg/179/179679.svg alt='imagem'  width=10% height=20%></center>";
                echo "<br>";
                echo "<br>";
                echo "<center>Cadastro feito com sucesso!</center>";
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<br>";
              }
              

?>
