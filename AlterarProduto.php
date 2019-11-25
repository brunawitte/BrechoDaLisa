<?php
require('conexao.php');

?>
  <?php
include("auth.php");
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


th, td {
  text-align: left;
  padding: 16px;
  border: 1px solid #ddd;
}

form {
 display: inline; 
}
.button {
  background-color: #5b6a43; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
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

                  .input-res
{
     ...
     
     width: 100%;
     max-width: 500px;
     box-sizing: border-box;
     
     ...
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

include_once('conexao.php');

if(isset($_GET['id'])) {

$sql = "SELECT * FROM produto WHERE ID_Produto = '".$_GET['id']."'";
$resultado2 = mysqli_query($con,$sql);
$row = mysqli_fetch_array($resultado2);
}


if (isset($_POST['Alterar'])) {


$id = $_GET['id'];
$Produto_ID_Fornecedor = $_POST['Produto_ID_Fornecedor'];
$Produto_ID_Status = $_POST['Produto_ID_Status'];
$Produto_ID_Usuario = $_POST['Produto_ID_Usuario'];

$Produto_Tipo = $_POST['Produto_Tipo'];
$Produto_Valor = $_POST['Produto_Valor'];
$Produto_Descricao = $_POST['Produto_Descricao'];
$Produto_Genero = $_POST['Produto_Genero'];
$Produto_Tamanho = $_POST['Produto_Tamanho'];
$Produto_Marca = $_POST['Produto_Marca'];
$Produto_Observacao = $_POST['Produto_Observacao'];
$Produto_Nome = $_POST['Produto_Nome'];


$sql2 = "UPDATE produto SET Produto_ID_Fornecedor='$Produto_ID_Fornecedor',Produto_ID_Status='$Produto_ID_Status',Produto_ID_Usuario='$Produto_ID_Usuario',Produto_Tipo='$Produto_Tipo',Produto_Valor='$Produto_Valor',Produto_Descricao='$Produto_Descricao',Produto_Genero='$Produto_Genero',Produto_Tamanho='$Produto_Tamanho',Produto_Marca='$Produto_Marca',Produto_Observacao='$Produto_Observacao',Produto_Nome='$Produto_Nome' WHERE ID_Produto = '".$_GET['id']."' ";
$query = mysqli_query($con, $sql2);
if (!$query) {
	echo "<br>";
              echo "<br>";
              
              echo "<center>Não foi possível alterar, tente novamente.</center>";
              echo "<br>";
             
          } else {
          	echo "<br>";
              echo "<center><img src=https://image.flaticon.com/icons/svg/179/179679.svg alt='imagem'  width=10% height=20%></center>";
              echo "<br>";
             
              echo "<meta HTTP-EQUIV='refresh' CONTENT='5'>";
              echo "<center>Alteração para o produto feita com sucesso! Aguarde 5 segundos...</center>";
              echo "<br>";
              
             
          }




           if(!empty($_FILES['image']['tmp_name']) 
     && file_exists($_FILES['image']['tmp_name'])) {
            $file= addslashes(file_get_contents($_FILES['image']['tmp_name']));

              $sql3 = "UPDATE produto SET Produto_Imagem='$file' WHERE ID_Produto = '".$_GET['id']."' ";
              $query = mysqli_query($con, $sql3);
              if (!$query) {
  echo "<br>";
              echo "<br>";
              
              echo "<center>Não foi possível alterar, tente novamente.</center>";
              echo "<br>";
             
          } else {
           
             
              echo "<center></center>";
              echo "<br>";
              
             
          }


            }           

            }

           
             
          


                      
?>

<center>
<form method="POST" enctype="multipart/form-data">
	<br>
	<table border="1" bordercolor="#5b6a43" width=1200 align="center"><td><center>
	<h2>Preencha os dados que deseja alterar para o produto de ID nº:<b> <?php echo $_GET['id'];?> </b></h2></b>
  
  <br>
  <br>

 
<label><b>Produto Nome: 


    
    <input type="text" name="Produto_Nome" placeholder="Digite o nome..." value="<?php echo $row['Produto_Nome'];?>"  ></label>
 
<label><b>Produto Observação: 


    
    <input type="text" class="input-res" name="Produto_Observacao" placeholder="Digite a observação..." value="<?php echo $row['Produto_Observacao'];?>"  ></label>
  

  <br>
 
<label><b>Produto Marca: 


    
    <input type="text" name="Produto_Marca" placeholder="Digite a marca..." value="<?php echo $row['Produto_Marca'];?>" ></label>
 

  <label><b>Produto Tamanho: 


    
    <input type="text" name="Produto_Tamanho" placeholder="Digite o tamanho..." value="<?php echo $row['Produto_Tamanho'];?>"  ></label>
 
<br>
  <label>
    <b>Gênero: </b>
    
    <select name="Produto_Genero">
    <option value="<?php echo $row['Produto_Genero'] ?>" selected><?php echo $row['Produto_Genero'] ?></option>
    <option value="Feminino">Feminino</option>
    <option value="Masculino">Masculino</option>
    <option value="Infantil">Infantil</option>
  </select> </label>



  <label><b>Produto Descrição: 


    
    <input type="text" name="Produto_Descricao" placeholder="Digite a descrição..." value="<?php echo $row['Produto_Descricao'];?>"  ></label>
    <br>   <label><b>Produto Valor (R$): 


    
    <input type="text" name="Produto_Valor" placeholder="Digite o valor..." value="<?php echo $row['Produto_Valor'];?>"></label>
   
   <label><b>Produto Tipo: 


    
    <input type="text" name="Produto_Tipo" placeholder="Digite o tipo..." value="<?php echo $row['Produto_Tipo'];?>"  ></label><br>

 <b>



    <?php    
     $id_teste = $_GET['id'];
     $sql2 = "SELECT * FROM fornecedor INNER JOIN produto WHERE ID_Produto = $id_teste AND ID_Fornecedor = Produto_ID_Fornecedor"; 
     $resultado4 = mysqli_query($con, $sql2); 
     //$row=mysqli_fetch_array($resultado4);    
                ?>
                <?php
                $option = "";
                while($row = mysqli_fetch_array($resultado4))
                $option = "<option value = ".$row['ID_Fornecedor']."</option>".$row['Fornecedor_Nome'];
                $sql = "SELECT * FROM fornecedor"; 
                $resultado2 = mysqli_query($con,$sql);
                while($row=mysqli_fetch_array($resultado2)){
                 $option .= "<option value = '".$row['ID_Fornecedor']."'>".$row['Fornecedor_Nome']."</option>";
                }
                
                ?>
                <label><h>Nome do fornecedor: </h>
                <select name="Produto_ID_Fornecedor" id="Produto_ID_Fornecedor" >
                <?php
                           
                          
                          
                            echo $option;
                        ?> </select></label>


                         <?php
                   $id_teste = $_GET['id'];
                 $sql = "SELECT * FROM status INNER JOIN produto WHERE ID_Produto = $id_teste AND ID_Status = Produto_ID_Status"; 
                $resultado2 = mysqli_query($con,$sql);
                ?>
                <?php
                while($row=mysqli_fetch_array($resultado2))
                 $option = "<option value = ".$row['ID_Status']."</option>".$row['Tipo_Status'];
                $sql = "SELECT * FROM status"; 
                $resultado2 = mysqli_query($con,$sql);
                while($row=mysqli_fetch_array($resultado2)) {
                 $option .= "<option value = '".$row['ID_Status']."'>".$row['Tipo_Status']."</option>";
                }
                
                ?>
                <label><h>Status: </h>
                <select name="Produto_ID_Status" id="Produto_ID_Status" >
                <?php
                           
                            
                            echo $option;
                        ?> </select></label>

                  
<br>
                              
<?php 


$sql4 = "SELECT * FROM usuario WHERE Usuario_Nome = '".$_SESSION['nome']."'";
 $resultado5 = mysqli_query($con,$sql4);

  $option = '';

while ($row=mysqli_fetch_array($resultado5)) {
$option .= "<option value = '".$row['ID_Usuario']."'>".$row['Usuario_Nome']." </option>";
}
?>
                
<label>
    <h><b>  Usuário Logado: </h></b> 
 <select name="Produto_ID_Usuario" id="Produto_ID_Usuario" required>
                <?php
                          
                           
                            
                            echo $option;
                        ?> </select></label>
                      
<label>
    <b>Imagem: </b>
                        <input type="file"  name="image" id="image" value="<?php echo $row['image'];?>" /> </label>

<br><br>
  
       <input type="submit"  class="button button2" value="Alterar" name="Alterar">
          

    </form>
       <form action="MostrarProdutos.php">
       	
       	<input type="submit"  class="button button2" value="Voltar"></form>
   </b>
</center></td></table>

                    <br>
                   <br>
                    
                    </div>

                      </body>

                  </html>