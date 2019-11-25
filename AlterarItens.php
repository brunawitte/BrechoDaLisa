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
  <div class="dropdown">
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

$sql = "SELECT * FROM item WHERE ID_Item = '".$_GET['id']."'";
$resultado2 = mysqli_query($con,$sql);
$row = mysqli_fetch_array($resultado2);
}


if (isset($_POST['Alterar'])) {


$id = $_GET['id'];
$ID_Item_Compra = filter_input(INPUT_POST,'ID_Item_Compra');
$Item_Descricao = filter_input(INPUT_POST,'Item_Descricao');
$Item_Valor = filter_input(INPUT_POST,'Item_Valor');

$sql2 = "UPDATE item SET ID_Item_Compra='$ID_Item_Compra',Item_Descricao='$Item_Descricao',Item_Valor='$Item_Valor' WHERE ID_Item = '".$_GET['id']."' ";
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
             
              echo "<center>Alteração para o item feita com sucesso! <br>Clique em <b>voltar</b> para alterar outro item ou continue na página para permanecer alterando.</center>";
              echo "<br>";
              
             
          }

            }            
?>

<center>
<form method="POST" enctype="multipart/form-data">
	<br>
	<table border="1" bordercolor="#5b6a43" width=1200 align="center"><td><center>
	<h2>Preencha os dados que deseja alterar para o item de ID nº:<b> <?php echo $_GET['id'];?></b></h2> </b>

  <br>
<label><b>Valor (R$): 

    <input type="text" name="Item_Valor" value="<?php echo $row['Item_Valor'];?>" required ></label>
  
   
<label><b>Descrição: 

<input type="text" name="Item_Descricao" value="<?php echo $row['Item_Descricao'];?>" > </label>
  

    

   

    <?php   
                $sql4 = "SELECT * FROM compras INNER JOIN produto"; 
                $resultado4 = mysqli_query($con,$sql4);

                 $option = '';
                while($row=mysqli_fetch_array($resultado4)){



                 $option .= "<option value = '".$row['ID_Compra']."'>".$row['Produto_Nome']." </option>";
                }
                ?>
                
<label>
                <h><b>Item </b></h>
                <select name="ID_Item_Compra" id="ID_Item_Compra" required>
                <?php
                          
                           
                            
                            echo $option;
                        ?> </select></label>

<br>
<br>

  
        
         <br>
       <input type="submit" class="button button2" value="Alterar" name="Alterar">
       
    </form>
       <form action="MostrarItens.php">
       	<input type="submit"  class="button button2" value="Voltar"></form>
   </b>
</center></table></td>

                    <br>
                   <br>
                    
                    </div>

                      </body>

                  </html>