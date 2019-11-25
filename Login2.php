<!DOCTYPE html>

<head>
<title>Brechó da Lisa</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">

<body>

<div class="header">
  
  <a href="dashboard.php"><img border="0" src="icone.jpg" width=13%></a>
</div>

<div class="navbar">
  <a href="dashboard.php">Inicio</a>
  
  <a href="Localizacao2.php">Localização</a>
  
   <div class="topnav-right">
  <!--<a href="Cadastro.php" class="right">Cadastro</a>-->
  <a href="Login2.php" class="right">Login</a>
</div>
  <a href="Contato2.php">Contato</a>
  <a href="Sobre2.php">Sobre</a>
  <!--<div class="dropdown">
    <button class="dropbtn">Gerenciar
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
     <a href="RegistroCompras.php">Compras</a>
  <a href="CadastroCliente.php">Clientes</a>
  <a href="CadastroProduto.php">Produtos</a>
  <a href="RegistroItens.php">Itens</a>
  <a href="CadastroFornecedor.php">Fornecedores</a>-->
    </div>
  </div> 
</div>

  <div class="main">
    <p>
      <br>
    <?php
            require('conexao.php');
            session_start();
            if (isset($_POST['nome'])){
              $nome = stripslashes($_REQUEST['nome']);
              $nome = mysqli_real_escape_string($con,$nome);
              $senha = stripslashes($_REQUEST['senha']);
              $senha = mysqli_real_escape_string($con,$senha);
                    $query = "SELECT * FROM usuario WHERE Usuario_Nome='$nome'
            and Usuario_Senha='$senha'";
              $result = mysqli_query($con,$query) or die(mysql_error());
              $rows = mysqli_num_rows($result);
                    if($rows==1){
                  $_SESSION['nome'] = $nome;
                  header("Location: index.php");
                     }else{
              echo "<div class='form'><center><br><br>
            <h3>Usuário e/ou senha incorreto(s)</h3>
            <h3><br/><i><b> <a href='login2.php'>Tentar Novamente</a></i></b></h3></div>";
             
              }
                }else{

            ?>


<style>

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
                       input[type=mail], select {
                    width: 100%;
                    padding: 12px 20px;
                    margin: 8px 0;
                    display: inline-block;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    box-sizing: border-box;
                  }
                  input[type=password], select {
                    width: 100%;
                    padding: 12px 20px;
                    margin: 8px 0;
                    display: inline-block;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    box-sizing: border-box;
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
                     width: 350px;
                   text-align: center;
                    padding-top: 13px;
                  }

                  input[type=int], select {
                    width: 100%;
                    padding: 12px 20px;
                    margin: 8px 0;
                    display: inline-block;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    box-sizing: border-box;
                  }

</style>

<center>


  <center>

    
<img border="0" src="login.png" width=14%>

<form method="POST" name="login" action="">
  <br>
    <label for="nome"><b>Login</b>
    <input type="text" placeholder="Digite o login..." name="nome" required></label><br>

    <label for="senha"><b>Senha</b>
    <input type="password" placeholder="Digite a senha..." name="senha" required></label>
    <br>
<br>
           <input type="submit" class="button button2" value="Entrar"> 

</center>

  <?php } ?>


<br>
<br>
<br>
      
      <br>
    </label>
  </div>
  <br>

</form>

<div class="footer">
     <p>Todos os direitos reservados © </p>

</div>

</body>
</html>
