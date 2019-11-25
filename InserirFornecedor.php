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
      <a href="RegistroCompras.php">Compras</a>
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
$Fornecedor_CEP = filter_input(INPUT_POST,'Fornecedor_CEP');
$Fornecedor_Cidade  = filter_input(INPUT_POST,'Fornecedor_Cidade');
$Fornecedor_Estado = filter_input(INPUT_POST,'Fornecedor_Estado');
$Fornecedor_CPF = filter_input(INPUT_POST,'Fornecedor_CPF');
$Fornecedor_Email = filter_input(INPUT_POST,'Fornecedor_Email');
$Fornecedor_Telefone = filter_input(INPUT_POST,'Fornecedor_Telefone');
$Fornecedor_Nome = filter_input(INPUT_POST,'Fornecedor_Nome');
$Fornecedor_Observacao = filter_input(INPUT_POST,'Fornecedor_Observacao');
$usuario_id_usuario = filter_input(INPUT_POST,'usuario_id_usuario');
$Fornecedor_Bairro = filter_input(INPUT_POST,'Fornecedor_Bairro');
$Fornecedor_Endereco = filter_input(INPUT_POST,'Fornecedor_Endereco');

$sql = "INSERT INTO fornecedor (Fornecedor_CEP,Fornecedor_Cidade,Fornecedor_Estado,Fornecedor_CPF,Fornecedor_Nome,Fornecedor_Email,Fornecedor_Telefone,Fornecedor_Observacao,usuario_id_usuario,Fornecedor_Bairro,Fornecedor_Endereco) VALUES ('$Fornecedor_CEP','$Fornecedor_Cidade','$Fornecedor_Estado','$Fornecedor_CPF','$Fornecedor_Nome','$Fornecedor_Email','$Fornecedor_Telefone','$Fornecedor_Observacao','$usuario_id_usuario','$Fornecedor_Bairro','$Fornecedor_Endereco')";
              $resultado = mysqli_query($con,$sql);
              if (!$resultado) {
              echo "<br>";
              echo "<br>";
              echo "<center>";
              echo "Não foi possível cadastrar tente novamente";
               echo "</center>";
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
              

?>
<center>
<form action="MostrarFornecedor.php">
        <input type="submit"  class="button button2" value="Voltar"></form></center><br><br>
</body>
</html>