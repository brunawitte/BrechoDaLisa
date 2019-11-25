  

<!DOCTYPE html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
  <style>

#myBtn {
  display: none;
  position: fixed;
  bottom: 12px;
  right: 40px;
  z-index: 99;
  font-size: 15px;
  outline: none;
  background-color: #5b6a43;
  color: white;
  cursor: pointer;
  border: 3px solid #dd702d;
  
}

#myBtn:hover {
  background-color: #dd702d;
}

table {

  
  
    width: 90% !important; 
    margin: auto;
}

td {

  vertical-align: bottom;
width:200px; 
}

td:hover {background-color: #f5f5f5;

}

.pagination {
    display: inline-block;
    padding-left: 0;
    margin: 30px 0;
    border-radius: 4px;
    width: auto;
    font-size: 130%;
}

ol, ul {
    margin-top: 0;
    margin-bottom: 10px;
    display: inline-block;
    width: auto;
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




</style>

<title>Brechó da Lisa</title>
<meta charset="UTF-8">


<body>

<div class="header">
  
  <a href="dashboard.php"><img border="0" src="icone.jpg" width=13%></a>
</div>

<div class="navbar">
  <a href="dashboard.php">Inicio</a>
  
  <a href="Localizacao2.php">Localização</a>
  
   <div class="topnav-right">
  <!-- <a href="Cadastro.php" class="right">Cadastro</a> -->
  <a href="Login2.php" class="right">Login</a>
</div>
  <a href="Contato2.php">Contato</a>
  <a href="Sobre2.php">Sobre</a>
  <div class="dropdown">
   <!--  <button class="dropbtn">Gerenciar
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="RegistroCompras.php">Compras</a>
  <a href="CadastroCliente.php">Clientes</a>
  <a href="CadastroProduto.php">Produtos</a>
  <a href="CadastroFornecedor.php">Fornecedores</a> -->
    </div>
  </div> 
</div>





  <div class="main">
    <p>

    </p>

<?php  
 $connect = mysqli_connect("localhost", "root", "", "tcc");  
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO produto(Produto_Imagem) VALUES ('$file')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Imagem inserida no banco de dados")</script>';  
      }  
 }  
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
$totalEmpSQL = "SELECT * FROM produto WHERE Produto_ID_Status = '2'";
$allEmpResult = mysqli_query($con, $totalEmpSQL);
$totalEmployee = mysqli_num_rows($allEmpResult);
$lastPage = ceil($totalEmployee/$showRecordPerPage);
$firstPage = 1;
$nextPage = $currentPage + 1;
$previousPage = $currentPage - 1;
$empSQL = "SELECT * FROM produto WHERE Produto_ID_Status = '2' ORDER BY ID_Produto DESC LIMIT $startFrom, $showRecordPerPage";

$empResult = mysqli_query($con, $empSQL);
?>

  <table>  


  
                 
                 

                   
                      
                <?php  
                
              $contador = 0;
                
               while($emp = mysqli_fetch_assoc($empResult)){

             $contador = $contador + 1;

                {  
                
                   
                      echo '<td>
                          <center>
                        <p>
                        <br>

                      <img src="data:image/jpeg;base64,' .base64_encode($emp['Produto_Imagem'] ). ' " height="400" width="320" class="img-thumnail"/><br>
 
                      <br>
                      <b>Valor:  R$ '  . $emp['Produto_Valor'] .  '</b><br><br>
                     <b> Tamanho: </b>'  . $emp['Produto_Tamanho'] .  ' <br>
                     <b> Marca: </b>'  . $emp['Produto_Marca'] .  ' <br>
                     <b> Gênero: </b>'  . $emp['Produto_Genero'] .  ' <br> 
                   <b> Descrição: </b>'  . $emp['Produto_Descricao'] . '<br>

                    <br></td>
                     ';

                    if($contador > 2){
                      echo'<tr></tr>';

                      $contador = 0;

  }
            
                
              }
            }

                ?>






                </center>

                 

            
               
</tbody>
</table>
</div></body>
              

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
              <br>
              <br>

<div class="footer">
     <p>Todos os direitos reservados © </p>

</div>

</body>
</html>
