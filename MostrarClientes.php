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
                    width: 100%;
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
  padding: 10px 9px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 3px 1px;
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
ul#myRow li {
  display:inline-block;
  width: auto;
}
.pagination li:hover:not(.active) {
  background-color: #ddd;
  border-radius: 5px;
}


.pagination li.active {
  background-color: #ddd;
  color: white;
  border-radius: 5px;
}

.pagination  a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}


      input[type=text], select {
                    width: 20%;
                    padding: 12px 20px;
                    margin: 8px 0;
                    display: inline-block;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    box-sizing: border-box;
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
<br>

<?php
include_once("conexao.php");
$showRecordPerPage = 6;
if(isset($_GET['page']) && !empty($_GET['page'])){
$currentPage = $_GET['page'];
}else{
$currentPage = 1;
}
$startFrom = ($currentPage * $showRecordPerPage) - $showRecordPerPage;
$totalEmpSQL = "SELECT * FROM cliente";
$allEmpResult = mysqli_query($con, $totalEmpSQL);
$totalEmployee = mysqli_num_rows($allEmpResult);
$lastPage = ceil($totalEmployee/$showRecordPerPage);
$firstPage = 1;
$nextPage = $currentPage + 1;
$previousPage = $currentPage - 1;
$empSQL = "SELECT * FROM cliente  ORDER BY ID_Cliente ASC LIMIT $startFrom, $showRecordPerPage";

$empResult = mysqli_query($con, $empSQL);
?>

<form method="GET" action="pesquisarclientes.php">
   <b> Pesquisar Cliente: </b><input type="text" name="pesquisar" placeholder="Digite o nome do cliente..."><br>
    <input type="submit" class="button button2" value="Buscar">
</form>
<h1>Tabela dos Clientes</h1>
<table id="myTable" width="1200" height="100">
            <tr>
            </center>                                   
            <th><center>Cliente ID </th></center> 
            <th><center>Cliente CPF </th></center> 
            <th ><center>Cliente Telefone</th></center>
            <th><center>Cliente E-mail </th></center>
            <th><center>Cliente Endereço </th></center>
            <th><center>Cliente CEP</th></center>
            <th><center>Cliente Bairro </th></center>
            <th><center>Cliente Estado </th></center>
            <th><center>Cliente Nome </th></center>

            </tr>
     
    <?php
    require ('conexao.php');

   
                  while($emp = mysqli_fetch_assoc($empResult)){ 
                  echo "<tr>"; 
                  echo "<td><center>"  . $emp['ID_Cliente'] . "</td></center>"; 
                  echo "<td><center>"  . $emp['Cliente_CPF'] . "</td></center>"; 
                  echo "<td><center>"  . $emp['Cliente_Telefone'] . "</td></center>"; 
                  echo "<td><center>"  . $emp['Cliente_Email'] . "</td></center>";
                  echo "<td><center>"  . $emp['Cliente_Endereco'] . "</td></center>";  
                  echo "<td><center>"  . $emp['Cliente_CEP'] . "</td></center>"; 
                  echo "<td><center>"  . $emp['Cliente_Bairro'] . "</td></center>"; 
                  echo "<td><center>"  . $emp['Cliente_Estado'] . "</td></center>"; 
                   echo "<td><center>"  . $emp['Cliente_Nome'] . "</td></center>"; 

                 
                   ?>
                  
                   <td><input type="button" class="button button2" onClick="alterar(<?php echo $emp['ID_Cliente']; ?>)" name="Alterar" value="Alterar"></td>

                   <td><input type="button" class="button button2" onClick="excluir(<?php echo $emp['ID_Cliente']; ?>)" name="excluir" value="Excluir"></td>

                   
                  
                   

                </tr>

               

                  <script language="javascript">
           function alterar(id)
           {
           if(confirm("Você realmente quer editar o cliente com ID: "+id+"? Clique OK para confirmar ou Cancelar para tentar novamente.")){
           window.location.href='alterar2.php?id=' +id+'';
           return true;
           }
           }
          </script>

                  <script language="javascript">
           function excluir(id)
           {
           if(confirm("Você realmente quer excluir o cliente com ID: "+id+"? A exclusão fará com que todos os dados referentes ao cliente sejam excluídos! Clique OK para confirmar ou Cancelar para tentar novamente.")){
           window.location.href='excluirclientes.php?id=' +id+'';
           return true;
           }
           }
          </script>
                <?php
              }
            
                  echo "</table>";
                  
                  ?>



<center>
               <nav aria-label="Page navigation">
<ul class="pagination" id="myRow">
<?php if($currentPage != $firstPage) { ?>
<li class="page-item">
<a class="page-link" href="?page=<?php echo $firstPage ?>" tabindex="-1" aria-label="Previous">
<span aria-hidden="true">Primeira</span>
</a>
</li>
<?php } ?>
<?php if($currentPage >= 2) { ?>
<li class="page-item"><a class="page-link" href="?page=<?php echo $previousPage ?>"><?php echo $previousPage ?></a></li>
<?php } ?>
<li class="page-item active"><a class="page-link" href="?page=<?php echo $currentPage ?>"><?php echo $currentPage ?></a></li>
<?php if($currentPage != $lastPage) { ?>
<li class="page-item"><a class="page-link" href="?page=<?php echo $nextPage ?>"><?php echo $nextPage ?></a></li>
<li class="page-item">
<a class="page-link" href="?page=<?php echo $lastPage ?>" aria-label="Next">
<span aria-hidden="true">Última</span>
</a>
</li>
<?php } ?>
</ul>
</nav>
</center>
                  <br>
</form>
       <form action="CadastroCliente.php">
        
        <input type="submit" class="button button2"   value="Cadastrar Novos Clientes"></form><br><br>
                 


                 
                  
      

