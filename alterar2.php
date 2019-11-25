<?php
include("auth.php");
?>
<?php
require('conexao.php');

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
                    input[type=mail], select {
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

$sql = "SELECT * FROM cliente WHERE ID_Cliente = '".$_GET['id']."'";
$resultado2 = mysqli_query($con,$sql);
$row = mysqli_fetch_array($resultado2);
}


if (isset($_POST['Alterar'])) {


$id = $_GET['id'];
$Cliente_Nome = $_POST['Cliente_Nome'];
$Cliente_Telefone = $_POST['Cliente_Telefone'];
$Cliente_Email = $_POST['Cliente_Email'];
$Cliente_Endereco = $_POST['Cliente_Endereco'];
$Cliente_CPF = $_POST['Cliente_CPF'];
$Cliente_CEP = $_POST['Cliente_CEP'];
$Cliente_Bairro = $_POST['Cliente_Bairro'];
$Cliente_Estado = $_POST['Cliente_Estado'];


$sql2 = "UPDATE cliente SET Cliente_Nome='$Cliente_Nome',Cliente_Telefone='$Cliente_Telefone',Cliente_Email='$Cliente_Email',Cliente_Endereco='$Cliente_Endereco',Cliente_CPF='$Cliente_CPF',Cliente_CEP='$Cliente_CEP',Cliente_Bairro='$Cliente_Bairro',Cliente_Estado='$Cliente_Estado' WHERE ID_Cliente = '".$_GET['id']."'";
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
              echo "<meta HTTP-EQUIV='refresh' CONTENT='5'>";
              echo "<center>Alteração para o cliente feita com sucesso! Aguarde 5 segundos...</center>";
              echo "<br>";
              
             
          }

            }            
?>


<form method="POST">
	<br><br>
	<table border="1" bordercolor="#5b6a43" width=1200 align="center"><td><center>
	<b><h2>Preencha os dados que deseja alterar para o cliente de ID nº: <?php echo $_GET['id'];?> <br></h2></b>

  <br>
	<label>
   <b>Nome do Cliente: </b>

    <input type="text" name="Cliente_Nome" placeholder="Digite o nome..." value="<?php echo $row['Cliente_Nome'];?>" required ><b></label>

<label>
    <b>Telefone do Cliente: </b>
    <input type="tel" name="Cliente_Telefone" placeholder="Digite o telefone..." value="<?php echo $row['Cliente_Telefone'];?>" required ></label>
<br>
<label>
  <b>E-mail do Cliente: </b>
    <input type="mail" name="Cliente_Email" placeholder="Digite o e-mail..." value="<?php echo $row['Cliente_Email'];?>" required ></label>
<label>
  <b>Endereço do Cliente: </b>
    <input type="text" name="Cliente_Endereco" placeholder="Digite o endereço..." value="<?php echo $row['Cliente_Endereco'];?>" required ></label>
    <br>
    <label>

  <b>CPF do Cliente: </b>
    <input type="text" name="Cliente_CPF" placeholder="Digite o CPF..." value="<?php echo $row['Cliente_CPF'];?>" required > </label>
<label>
  <b>CEP do Cliente: </b>
    <input type="text" name="Cliente_CEP" placeholder="Digite o CPF..." value="<?php echo $row['Cliente_CEP'];?>" required ></label>
    <br>
    <label>

  <b>Bairro do Cliente: </b>
    <input type="text" name="Cliente_Bairro" placeholder="Digite o Bairro..." value="<?php echo $row['Cliente_Bairro'];?>" required ></label>

    

  
    <label>
    <b>Estado do Cliente: </b>
    <select name="Cliente_Estado">
    <option value="<?php echo $row['Cliente_Estado'] ?>" selected><?php echo $row['Cliente_Estado'] ?></option>
    <option value="AC">Acre</option>
    <option value="AL">Alagoas</option>
    <option value="AP">Amapá</option>
    <option value="AM">Amazonas</option>
    <option value="BA">Bahia</option>
    <option value="CE">Ceará</option>
    <option value="DF">Distrito Federal</option>
    <option value="ES">Espirito Santo</option>
    <option value="GO">Goiás</option>
    <option value="MA">Maranhão</option>
    <option value="MS">Mato Grosso do Sul</option>
    <option value="MT">Mato Grosso</option>
    <option value="MG">Minas Gerais</option>
    <option value="PA">Pará</option>
    <option value="PB">Paraíba</option>
    <option value="PR">Paraná</option>
    <option value="PE">Pernambuco</option>
    <option value="PI">Piauí</option>
    <option value="RJ">Rio de Janeiro</option>
    <option value="RN">Rio Grande do Norte</option>
    <option value="RS">Rio Grande do Sul</option>
    <option value="RO">Rondônia</option>
    <option value="RR">Roraima</option>
    <option value="SC">Santa Catarina</option>
    <option value="SP">São Paulo</option>
    <option value="SE">Sergipe</option>
    <option value="TO">Tocantins</option>
</select></label>




<br>
         <br>
       <input type="submit"  class="button button2" value="Alterar" name="Alterar">
          

    </form>
       <form action="MostrarClientes.php">
       	
       	<input type="submit"  class="button button2" value="Voltar"></form>
   </b>
</center></td></table>
<br>
<br>
<br>
                    <p>
                    <div class="footer">
                      <p>Todos os direitos reservados ©</p>
                    </div>

                      </body>

                  </html>