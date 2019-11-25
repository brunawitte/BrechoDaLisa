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

<head>
<title>Brechó da Lisa</title>
<?php
require ('conexao.php');
?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<meta charset="utf-8">
<div class="header">
  <html lang="pt-br">
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
</head>
  <div class="main">
    <br>

 <form method="POST" action="InserirProduto.php " enctype="multipart/form-data">
 
<table border="1" bordercolor="#5b6a43" width=1200 align="center"><td>
<br><center>

    <h1>Cadastro de Produtos</h1>
    <p>Preencha todos os dados necessários para o cadastro: </p>

    <label>
    <b>Nome: </b>
     <input type="text" placeholder="Digite o nome..." name="Produto_Nome" required></label>
<label>
    <b>Gênero: </b>
    
    <select name="Produto_Genero">
    <option value="Escolha" disabled selected>Escolha um gênero...</option>
    <option value="Feminino">Feminino</option>
    <option value="Masculino">Masculino</option>
    <option value="Infantil">Infantil</option>
  </select> </label>
  <p><label>
    <b>Tamanho: </b>
    <input type="text" placeholder="Digite o tamanho..." name="Produto_Tamanho" required></label>
  
<label>
    <b>Marca: </b>
    <input type="text" placeholder="Digite a marca..." name="Produto_Marca" required></label>
    <p>
      
<?php 


$sql4 = "SELECT * FROM usuario WHERE Usuario_Nome = '".$_SESSION['nome']."'";
 $resultado5 = mysqli_query($con,$sql4);

  $option = '';

while ($row=mysqli_fetch_array($resultado5)) {
$option .= "<option value = '".$row['ID_Usuario']."'>".$row['Usuario_Nome']." </option>";
}
?>
                
<label>
    <h><b>  Usuário Logado: </h></b> 
 <select name="produto_id_usuario" id="produto_id_usuario" required>
                <?php
                          
                           
                            
                            echo $option;
                        ?> </select></label>

<label>
   <b>Tipo:</b>
  
    <input type="text"  placeholder="Digite o tipo..." name="Produto_Tipo" required>
    <p></label>
<label>
    <b>Valor:</b>
   
    <input type="double"  placeholder="Digite o valor R$..." name="Produto_Valor" required></label>
    

    <?php
    
                 

                $sql2 = "SELECT * FROM status"; 
                $resultado2 = mysqli_query($con,$sql2);

                 $option = '';
                while($row=mysqli_fetch_array($resultado2)){



                 $option .= "<option value = '".$row['ID_Status']."'>".$row['Tipo_Status']." </option>";
                }
                ?>
                
<label>
              <h><b>Status: </b></h>
                <select name="produto_id_status" id="produtos_id_status" required>
                <?php
                          
                            
                            
                            echo $option;
                        ?> </select></label>


<?php
    
                 

                $sql2 = "SELECT * FROM fornecedor"; 
                $resultado2 = mysqli_query($con,$sql2);

                 $option = '';
                while($row=mysqli_fetch_array($resultado2)){



                 $option .= "<option value = '".$row['ID_Fornecedor']."'>".$row['Fornecedor_Nome']." </option>";
                }
                ?>
               
<br>
                <label><b>Fornecedor: </b>
                <select name="Produto_ID_Fornecedor" id="Produto_ID_Fornecedor" required>
                <?php
                          
                            echo "<option value='Produto_ID_Fornecedor' disabled selected>Selecione o fornecedor...</option>";
                            
                            echo $option;
                        ?> </select></label>
<label>
                        <b>Imagem: </b><br>
    <input type="file"  name="image" id="image" required/> </label>
            <br>
            <br>        
    <b>Descrição:</b><br>
    <textarea placeholder="Digite a descrição..." name="Produto_Descricao"> </textarea>
    <br>

  
    <b>Observação: </b><br>
    <textarea placeholder="Digite a observação..." name="Produto_Observacao"> </textarea>
  <br>

 <input type="submit" class="button button2" name="insert" id="insert" value="Cadastrar" class="btn btn-info"> </form> 
<form action="MostrarProdutos.php" method="get">
    <input type="submit" class="button button2" value="Gerar Tabela" /></form><br>
</form></center></td></table>

</div>
                <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Por favor selecione uma imagem");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Imagem inválida');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  

</form>
</body>


    <p>


      
      
    </center>
    
    </div>
    
  </p>
  </div>


    </p>

   
  
</div>



</body>
</html>
