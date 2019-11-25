<?php
include("auth.php");
?>
<?php
require('conexao.php');

?>


<!DOCTYPE html>

<head>
<title>Brechó da Lisa</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>



form {
 display: inline; 
}
.button {
  background-color: #5b6a43; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; 
  transition-duration: 0.4s;
}

.button1 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

textarea {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

 input[type=text], select {
                    width: 100%;
                    padding: 12px 20px;
                    margin: 8px 0;
                    display: inline-block;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    box-sizing: border-box;
                  }
                  input[type=email], select {
                    width: 100%;
                    padding: 12px 20px;
                    margin: 8px 0;
                    display: inline-block;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    box-sizing: border-box;
                  }
                  input[type=tel], select {
                    width: 100%;
                    padding: 12px 20px;
                    margin: 8px 0;
                    display: inline-block;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    box-sizing: border-box;
                   
                  }
                  input[type=double], select {
                    width: 100%;
                    padding: 12px 20px;
                    margin: 8px 0;
                    display: inline-block;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    box-sizing: border-box;
                  }

                   input[type=date], select {
                    width: 100%;
                    padding: 12px 20px;
                    margin: 8px 0;
                    display: inline-block;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    box-sizing: border-box;
                  }

                   input[type=time], select {
                    width: 100%;
                    padding: 12px 20px;
                    margin: 8px 0;
                    display: inline-block;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    box-sizing: border-box;
                  }

                  }
                  input[type=file], select {
                    width: 100%;
                    padding: 12px 20px;
                    margin: 8px 0;
                    display: inline-block;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    box-sizing: border-box;

                  }


                  input[type=submit] {
                    width: 15%;
                    background-color: #5b6a43;
                    color: white;
                    padding: 14px 20px;
                    margin: 8px 0;
                    border: none;
                    border-radius: 4px;
                    display: inline;
                    cursor: pointer;
                    }

                  input[type=reset]:hover {
                    background-color: #333;
                  }

                  input[type=reset] {
                    width: 10%;
                    background-color: #04B4AE;
                    color: white;
                    padding: 14px 20px;
                    margin: 8px 0;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                  }


                  input[type=submit]:hover {
                    background-color: #dd702d;
                   }

                      label {
                    display: inline-block;
  width: 300px;
  text-align: center;
  padding-top: 9px;
}
table, td, th {  
  border: 1px solid #ddd;
  text-align: center;
}

table {
  border-collapse: collapse;
  width: 90%;
}

th, td {
  padding: 15px;
}
            
</style>
<body>

<div class="header">
  
  <a href="index.php"><img border="0" src="icone.jpg" width=13%></a>
</div>

<div class="navbar">
  <a href="index.php">Inicio</a>
  
  <a href="Localizacao.php">Localização</a>
  
   <div class="topnav-right">

  <a href="Cadastro.php" class="right">Cadastro</a>

   <a href="logout.php" style="float:right;">Logout</a>
  <p style="float:right;"><font color="white" class="right"><b>&nbsp;&nbsp;Bem-vindo(a) [<?php echo $_SESSION['nome'];  ?>]&nbsp;&nbsp;</b></b></font>
 
</div>
  <a href="Contato.php">Contato</a>
  <a href="Sobre.php">Sobre</a>
  <div class="dropdown"  style="float:right;">
    <button class="dropbtn">Gerenciar
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
       <a href="MostrarCompras.php">Compras</a>
  <a href="MostrarClientes.php">Clientes</a>
  <a href="MostrarProdutos.php">Produtos</a>
  <a href="MostrarFornecedor.php">Fornecedores</a>
    </div>
  </div> 
</div>


  <div class="main">
 

 <center>
    <?php
if(isset($_GET['id'])) {

 $pesquisa = mysqli_query($con,"SELECT sum(Produto_Valor) FROM Produto INNER JOIN item ON ID_Item_Compra = ID_Produto WHERE '".$_GET['id']."' = N_Compra"); 

  while($sum = mysqli_fetch_array($pesquisa)){
  $soma = 'R$ ' . number_format((float)$sum['sum(Produto_Valor)'], 2, '.', '');
}?>


<?php


}
            ?>
                
<?php

include_once('conexao.php');



if(isset($_GET['id'])) {

$sql = "SELECT * FROM compras WHERE ID_Compra = '".$_GET['id']."'";
$resultado8 = mysqli_query($con,$sql);
$row = mysqli_fetch_array($resultado8);
}








?>

<center>

<form method="POST" enctype="multipart/form-data">


	<br>
	<table border="1" bordercolor="#5b6a43" width=1200 align="center"><td><center>



  <h2>Preencha os dados que deseja alterar para a compra: </b></h2><br></b>

 

   <label><b>Compra Hora: 

    <input type="time" name="Compra_Hora" step="1" value="<?php echo $row['Compra_Hora'];?>"  ></label>
  
  
<label><b>Compra Data: 

  
    <input type="date" name="Compra_Data" value="<?php echo $row['Compra_Data'];?>"></label>



<br>
<br>
                         <?php
          $id_teste = $_GET['id'];
           $sql = "SELECT * FROM cliente INNER JOIN compras WHERE ID_Compra = $id_teste AND ID_Cliente = Compra_ID_Cliente";
                $resultado2 = mysqli_query($con,$sql);
                ?>
                <?php
                 $option = '';
                while($row=mysqli_fetch_array($resultado2))
                 $option .= "<option value = '".$row['ID_Cliente']."'>".$row['Cliente_Nome']."</option>";
               $sql = "SELECT * FROM cliente";
               $resultado3 = mysqli_query($con,$sql);
                while($row=mysqli_fetch_array($resultado3))  {
                  $option .= "<option value = '".$row['ID_Cliente']."'>".$row['Cliente_Nome']."</option>";
                }
                ?>
                <label><h>Cliente: </h>
                <select name="Compra_id_cliente" id="Compra_id_cliente" required>
                <?php
                           
                            
                          
                            echo $option;
                        ?> </select></label>

    
                       
                        </b>






  
         <br>
         <br>
       <input type="submit" class="button button2" value="Alterar" name="Alterar">
       
    </form>
       <form action="MostrarCompras.php">
        <input type="submit"  class="button button2" value="Voltar"></form>
   </b>
    <?php
                        if (isset($_POST['Alterar'])) {


$id = $_GET['id'];
$Compra_Hora = $_POST['Compra_Hora'];
$Compra_Data = $_POST['Compra_Data'];

$Compra_id_cliente = $_POST['Compra_id_cliente'];




$sql2 = "UPDATE compras SET Compra_Hora='$Compra_Hora',Compra_Data = '$Compra_Data',Compra_id_cliente = '$Compra_id_cliente' WHERE ID_Compra = '".$_GET['id']."' ";
$query = mysqli_query($con, $sql2);
if (!$query) {
  echo "<br>";
              echo "<br>";
              echo "<br>";
              echo "<center>Não foi possível alterar, tente novamente.</center>";
              echo "<br>";
             
          } else {
            echo "<br>";
            echo "<br>";
            echo "<br>";
              echo "<center><img src=https://image.flaticon.com/icons/svg/179/179679.svg alt='imagem'  width=10% height=20%></center>";
              echo "<br>";
              echo "<center>Alteração para a compra feita com sucesso! Aguarde 5 Segundos...</center>";
              
              echo "<br>";
                echo "<meta HTTP-EQUIV='refresh' CONTENT='5'>";
              
          }

            }   

?>
<br>
<br>
<br>


           <table id="myTable" width="1000" height="20">
            <h1>Detalhes da tabela compra de ID nº: <?php echo $_GET['id'];?></h1>
            <?php
    require ('conexao.php');


     $sql = "SELECT * FROM compras INNER JOIN cliente ON Compra_id_cliente = id_cliente INNER JOIN usuario ON Compra_id_usuario = ID_usuario INNER JOIN fornecedor  INNER JOIN item ON N_Compra = ID_Compra INNER JOIN Produto WHERE ID_Produto = ID_Item_Compra AND ID_Compra = '".$_GET['id']."' LIMIT 1"; 

 $sql2 = "SELECT * FROM compras INNER JOIN item ON N_Compra = ID_Compra INNER JOIN Produto WHERE ID_Produto = ID_Item_Compra AND ID_Compra = '".$_GET['id']."'"; 


                  $resultado = mysqli_query($con,$sql); 
                  while ($row = mysqli_fetch_array($resultado)) { 
                    echo "<table>";
                  echo "<tr>"; 
                  echo "<td width = 5%><center><b>ID: </b><br><br>"  . $row['ID_Compra'] . "</center>"; 
                  echo "<td width = 12%><center><b>Hora: </b><br><br>"  . $row['Compra_Hora'] . "</center>"; 
                  echo "<td width = 10.5%><center><b>Data: </b><br><br>"  . date("d/m/Y", strtotime($row['Compra_Data'])) . "</center>";
                  echo "<td width = 30.5%><center><b>Cliente: </b><br><br> "  . $row['Cliente_Nome'] . "</center>"; 
                  echo "<td width = 31.5%><center><b>Usuário: </b><br><br> "  . $row['Usuario_Nome'] . "</center>";
                  
                  echo "<td width = 10%><center><b> Total: </b> <br><br>" . $soma . "</center><br></td>";
                }

                  $resultado = mysqli_query($con,$sql2); 
                  while ($row = mysqli_fetch_array($resultado)) { 
                    echo "<table>";
                    echo "<tr>";
                    echo "<td width = 90%><center><b>Produto: </b><br><br>"  . $row['Produto_Nome'] . "</center>"; 
                  
                    echo "<td width = 10%><center><b>Valor: </b><br><br>R$ "  . $row['Produto_Valor'] . "</center>"; 
echo "</tr>";

                

}
     

               
                  ?>

    
</table></label>
<br>


</center></table></td><br><br><br>

                   
                    </div>

                      </body>

                  </html>