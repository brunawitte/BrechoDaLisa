  <?php
include("auth.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Brechó da Lisa</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>



th, td {
  text-align: center;
  
  border: 1px solid #ddd;
}

form {
 display: inline; 
}

    
 input[type=submit] {
                    width: 20%;
                    background-color: #5b6a43;
                    color: white;
                    padding: 14px 20px;
                    margin: 8px 0;
                    border: none;
                    border-radius: 4px;
                    display: inline;
                    cursor: pointer;
                    }

                     input[type=button] {
                    width: 90%;
                    background-color: #5b6a43;
                    color: white;
                    padding: 14px 20px;
                    margin: 8px 0;
                    border: none;
                    border-radius: 4px;
                    display: inline;
                    cursor: pointer;
                    }

.button {
  background-color: #4CAF50; /* Green */
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

th, td {
  text-align: center;
  
  border: 1px solid #ddd;
}

form {
 display: inline; 
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
    

<br>
 <center>
<h1>Tabela dos Itens</h1>

<table id="myTable" width="1200" height="100">
            <tr>
            </center>                                   
            <th><center>Itens ID </th></center> 
            <th><center>Valor</th></center> 
            <th><center>Produto(?)</th></center> 
            <th><center>Descrição</th></center>
         
          

            </tr>
     
    <?php
    require ('conexao.php');

     $sql = "SELECT * FROM compras 
             INNER JOIN cliente        ON Compra_id_cliente = id_cliente 
            INNER JOIN usuario        ON Compra_id_usuario = ID_usuario              INNER JOIN fornecedor     ON Compra_id_fornecedor = ID_fornecedor 
            INNER JOIN item           ON N_Compra = ID_Compra 
            INNER JOIN Produto        ON ID_Produto = ID_Item_Compra ";  
                  $resultado = mysqli_query($con,$sql); 
                  while ($row = mysqli_fetch_array($resultado)){ 
                  echo "<tr>"; 
                  echo "<td><center>"  . $row['ID_Item'] . "</td></center>"; 
                  echo "<td><center>"  . $row['Item_Valor'] . "</td></center>"; 
                  echo "<td><center>"  . $row['Produto_Nome'] . "</td></center>"; 
                  echo "<td><center>"  . $row['Item_Descricao'] . "</td></center>"; 
                  
                 
                 

                 
                   ?>
                  
                   <td><input type="button"  class="button button2" onClick="alterar(<?php echo $row['ID_Item']; ?>)" name="Alterar" value="Alterar"></td>

                   
                  
                   

                </tr>

               

                  <script language="javascript">
           function alterar(id)
           {
           if(confirm("Você realmente quer editar o item com ID: "+id+"? Clique OK para confirmar ou Cancelar para tentar novamente.")){
           window.location.href='AlterarItens.php?id=' +id+'';
           return true;
           }
           }
          </script>
                <?php
              }
            
                  echo "</table>";
                  
                  ?>


<form action="RegistroItens.php">
  <br>
        
        <input type="submit" class="button button2"  value="Cadastrar Novos Itens"></form>
                 
                  
      
<br>
<br>



