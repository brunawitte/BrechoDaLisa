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

<br>
<br>
  <div class="main">
   <center> <h>Como Chegar? </h> 
    <p>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3392.499144447866!2d-52.27640668524698!3d-31.756869419980102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9511b3f5c61f19ff%3A0xa94af9485887cbe0!2sR.+Cidade+de+Evora%2C+182+-+Marina+Ilha+Verde%2C+Pelotas+-+RS!5e0!3m2!1spt-BR!2sbr!4v1558240213360!5m2!1spt-BR!2sbr" width="700" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
<br>
<h>Rua: Cidade De Evora 182 - 96083100 - Pelotas
<br><br><br></p><br>

</center>
                  

   
  </div>



 
              
     

</div>

<div class="footer">
     <p>Todos os direitos reservados © </p>

</div>

</body>
</html>
