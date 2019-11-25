  

<!DOCTYPE html>
<html lang="en">
<head>
<title>Brechó da Lisa</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<div class="header">
  
  <a href="index.php"><img border="0" src="Logo2.jpg" width=13%></a>
</div>

<div class="navbar">
  <a href="index.php">Inicio</a>
  <a href="Sobre.php">Sobre</a>
  <a href="Localizacao.php">Localização</a>
  <a href="CadastroCliente.php">Cadastrar Cliente</a>
  <a href="CadastroProduto.php">Cadastrar Produto</a>
  <a href="CadastroFornecedor.php">Cadastrar Fornecedor</a>
  <a href="RegistroCompras.php">Registrar Compras</a>
  <a href="Cadastro.php" class="right">Cadastre-se</a>
  <a href="Login.php" class="right">Login</a>
  <a href="Contato.php">Contato</a>
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

<center>

  <table class="table table-bordered">  
                      
                <?php  
                $query = "SELECT * FROM Produto ORDER BY ID_Produto DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          
                               

                        <img src="data:image/jpeg;base64,' .base64_encode($row['Produto_Imagem'] ). ' " height="400" class="img-thumnail"/> <b> 

                                
                           
                     ';  
                }  
                ?>  
                </table>  
              </center>
              <br>
              <br>
              <br>

<div class="footer">
     <p>Todos os direitos reservados © </p>

</div>

</body>
</html>
