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



    <?php


require ('conexao.php');
$Usuario_Nome = filter_input(INPUT_POST,'Usuario_Nome');
$senha1 = filter_input(INPUT_POST,'senha1');
$senha2 = filter_input(INPUT_POST,'senha2');
$Usuario_Email = filter_input(INPUT_POST,'Usuario_Email');



$sql = "INSERT INTO usuario (Usuario_Nome,Usuario_Senha,Usuario_Email) VALUES ('$Usuario_Nome','$senha1','$Usuario_Email')";
if ($senha1 == $senha2) {

 $resultado = mysqli_query($con,$sql);
              if (!$resultado) {
              echo "<br>";
              echo "<br>";
              echo "<br>";
              echo "<center>";
              echo "Não foi possível cadastrar tente novamente";
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
            }

?>



<div class="footer">
     <p>Todos os direitos reservados © </p>

</div>

</body>
</html>

