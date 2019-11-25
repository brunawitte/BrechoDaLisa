  <?php
include("auth.php");
?>
<!DOCTYPE html>

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

                  input[type=int], select {
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


  


</style>
<head>
  

<?php
require ('conexao.php');
?>

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
    
        <form method="POST" action="InserirItens.php">
 
   <br>
<table border="1" bordercolor="#5b6a43" width=1200 align="center"><td><center>
    <center>
      <br>
      <h1>Registro de Itens</h1>
      Preencha todos os dados necessários para o cadastro: 
      <br> 
      <br>
      <br>


 <?php   
                $sql4 = "SELECT * FROM compras INNER JOIN produto"; 
                $resultado4 = mysqli_query($con,$sql4);

                 $option = '';
                while($row=mysqli_fetch_array($resultado4)){



                 $option .= "<option value = '".$row['ID_Compra']."'>".$row['Produto_Nome']." </option>";
                }
                ?>
                
<label>
                <h><b>Item </b></h>
                <select name="ID_Item_Compra" id="ID_Item_Compra" required>
                <?php
                          
                            echo "<option value='ID_Item_Compra' disabled selected>Selecione o produto...</option>";
                            
                            echo $option;
                        ?> </select></label>
                       
                      <label> <b>Digite o valor total (R$): </b>
<input type="text" name="Item_Valor" required></label><br>

<b>Descrição:</b><br>
    <textarea placeholder="Digite a descrição..." name="Item_Descricao"> </textarea>
    <br>
<br>

                        <br>

 <input type="submit" class="button button2" value="Cadastrar"></form>  
 <form action="MostrarItens.php" method="get">
    <input type="submit" class="button button2" value="Gerar Tabela" />
</form>
   <br>
              <br>
        
              
            </center></td></table>
              <br>
              <br>
             
    



</body>
</html>