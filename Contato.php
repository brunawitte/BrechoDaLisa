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


  <div class="main">
    <center>
    <p>
    	<br>
      <br>
      
    	
<a href="https://www.facebook.com/BRECHOdaLISAfahinelli/"><img src="facebookiconeoficial.png"width=4%></a><br><br>Facebook: <i>BRECHOdaLISAfahinelli </i>
<br>
<br>

<center>
<a href="https://www.instagram.com/brecho_da_lisa/"><img src="instagram.png"width=4%></a><br> <br>Instagram: <i> @brecho_da_lisa </i></p></center></b></br>

<center>

  
<a href="https://api.whatsapp.com/send?phone=5553991074628&text=Envie%20uma%20mensagem%20para%20saber%20mais%20sobre%20o%20brech%C3%B3!"><img src="whats.png"width=5%></a><br> <br><i>WhatsApp: (53) 99107-4628</i></p></center></b></br>
<center>

  
  <br>
<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FBRECHOdaLISAfahinelli%2F&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId=137684089663693" width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe></center><p>
   
  </div>
<br>

<div class="footer">
     <p>Todos os direitos reservados © </p>

</div>
</body>
</html>

