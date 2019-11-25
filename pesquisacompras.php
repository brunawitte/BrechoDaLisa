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
$pesquisar = $_GET['pesquisar'];?>



<?php
// Verifica se foi feita alguma busca
// Caso contrario, redireciona o visitante pra home
//if (!isset($_POST['pesquisar'])) {
 //header("Location: MostrarClientes.php");
// exit;
//}
?>

<?php
include_once("conexao.php");
$showRecordPerPage = 6;
if(isset($_GET['page']) && !empty($_GET['page'])){
$currentPage = $_GET['page'];
}else{
$currentPage = 1;
}
$startFrom = ($currentPage * $showRecordPerPage) - $showRecordPerPage;
$pesquisa_teste = "'%".$pesquisar."%'";
$totalEmpSQL = "SELECT * FROM compras  INNER JOIN cliente ON Compra_id_cliente = id_cliente
            INNER JOIN usuario ON Compra_id_usuario = ID_usuario
            
            WHERE Cliente_Nome LIKE $pesquisa_teste";
$allEmpResult = mysqli_query($con, $totalEmpSQL);
$totalEmployee = mysqli_num_rows($allEmpResult);
$lastPage = ceil($totalEmployee/$showRecordPerPage);
$firstPage = 1;
$nextPage = $currentPage + 1;
$previousPage = $currentPage - 1;
$pesquisa_teste = "'%".$pesquisar."%'";
// $empSQL = "SELECT * FROM compras 
//             INNER JOIN cliente        ON Compra_id_cliente = id_cliente 
//             INNER JOIN usuario        ON Compra_id_usuario = ID_usuario 
//             INNER JOIN fornecedor     ON Compra_id_fornecedor = ID_fornecedor 
//             INNER JOIN item           ON N_Compra = ID_Compra 
//             INNER JOIN Produto        ON ID_Produto = ID_Item_Compra 
//             ORDER BY ID_Compra ASC LIMIT $startFrom, $showRecordPerPage";
$empSQL = "SELECT * FROM compras
            INNER JOIN cliente ON Compra_id_cliente = id_cliente
            INNER JOIN usuario ON Compra_id_usuario = ID_usuario
            
            WHERE Cliente_Nome LIKE $pesquisa_teste ORDER BY ID_Compra ASC LIMIT $startFrom, $showRecordPerPage";
$empResult = mysqli_query($con, $empSQL);
?>

<form method="GET" action="pesquisacompras.php">
   <b> Pesquisar Compra: </b><input type="text" name="pesquisar" placeholder="Digite o nome do comprador..."><br>
    <input type="submit" class="button button2" value="Buscar">
</form>
<h1>Tabela das Compras</h1>

<table id="myTable" width="1200" height="100">
            <tr>
            </center> 
                                           
            <th><center>Compra ID </th></center> 
            <th><center>Compra Hora</th></center> 
            <th><center>Compra Data</th></center> 
            <th><center>Compra Cliente</th></center>
            <th><center>Compra Usuário</th></center>
            <th><center>Compra Total</th></center>
            
            
            
          

            </tr>
     
    <?php
    require ('conexao.php');

   
                      while($emp = mysqli_fetch_assoc($empResult)) { 
                      $somasql = mysqli_query($con,"SELECT sum(Produto_Valor) FROM Produto INNER JOIN item ON ID_Item_Compra = ID_Produto WHERE N_Compra = "  . $emp['ID_Compra'] . "");
                      while($sum = mysqli_fetch_array($somasql)) {
                            $soma = 'R$ ' . number_format((float)$sum['sum(Produto_Valor)'], 2, '.', '');
                      }
                      // $mostracompra = "SELECT * FROM compras 
                      //             INNER JOIN cliente        ON Compra_id_cliente = id_cliente 
                      //             INNER JOIN usuario        ON Compra_id_usuario = ID_usuario 
                      //             INNER JOIN fornecedor     ON Compra_id_fornecedor = ID_fornecedor 
                      //             INNER JOIN item           ON N_Compra = ID_Compra 
                      //             INNER JOIN Produto        ON ID_Produto = ID_Item_Compra 
                      //             ORDER BY ID_Compra ASC LIMIT $startFrom, $showRecordPerPage";
                      // $mostra_c = mysqli_query($con, $mostracompra);
                      // $mostra_compra = mysqli_fetch_array($mostra_c);

                  echo "<tr>"; 
                  echo "<td><center>"  . $emp['ID_Compra'] . "</center>"; 
                  echo "<td><center>"  . $emp['Compra_Hora'] . "</center>"; 
                  echo "<td><center>"  . date("d/m/Y", strtotime($emp['Compra_Data'])) . "</td></center>"; 
                  echo "<td><center> "  . $emp['Cliente_Nome'] . "</center>"; 
                  echo "<td><center> "  . $emp['Usuario_Nome'] . "</center>";
                 
                  echo "<td><center> "  . $soma . "</center>";

                   ?>

                  
                   
                    <td><input type="button"  class="button button2" onClick="alterar(<?php echo $emp['ID_Compra']; ?>)" name="Alterar" value="Gerenciar"></td>
                  

                   
                  
                   

                </tr>

               

                 
                  
                  <script language="javascript">
           function alterar(id)
           {
           if(confirm("Você realmente quer editar a compra com ID: "+id+"? Clique OK para confirmar ou Cancelar para tentar novamente.")){
           window.location.href='AlterarCompras.php?id=' +id+'';
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
  <a class="page-link" href="?page=<?php echo $firstPage ?>&pesquisar=<?php echo $pesquisar ?>" tabindex="-1" aria-label="Previous">
  <span aria-hidden="true">Primeira</span>
  </a>
  </li>
<?php } ?>
<?php if($currentPage >= 2) { ?>
  <li class="page-item"><a class="page-link" href="?page=<?php echo $previousPage ?>&pesquisar=<?php echo $pesquisar ?>"><?php echo $previousPage ?></a></li>
  <?php 
} ?>
<li class="page-item active"><a class="page-link" href="?page=<?php echo $currentPage ?>&pesquisar=<?php echo $pesquisar ?>"><?php echo $currentPage ?></a></li>
<?php if($currentPage != $lastPage) { ?>
<li class="page-item"><a class="page-link" href="?page=<?php echo $nextPage ?>&pesquisar=<?php echo $pesquisar ?>"><?php echo $nextPage ?></a></li>
<li class="page-item">
<a class="page-link" href="?page=<?php echo $lastPage ?>&pesquisar=<?php echo $pesquisar ?>" aria-label="Next">
<span aria-hidden="true">Última</span>
</a>
</li>
<?php }?>
</ul>
</nav>
</center>
                 
</form>
       <form action="CadastroProduto.php">
  <br>
        
        <input type="submit" class="button button2"  value="Cadastrar Novos Produtos"></form><br><br>
                 


                 
                  
      

