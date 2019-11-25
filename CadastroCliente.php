

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

<br>
<table border="1" bordercolor="#5b6a43" width=1200 align="center"><td><center>
  <br>
    <h1>Cadastro de Clientes</h1>
    <p>Preencha todos os dados necessários para o cadastro: </p>
    <br>
    
    
    <form method="POST" action="InserirCliente.php">



      <label>
    <b>Nome:</b>
    <input type="text" placeholder="Digite o nome..." name="Cliente_Nome" required></label>
   
<label>
   <b>Telefone</b>
    <input type="tel"  placeholder="Digite o número..." name="Cliente_Telefone" ></label>
  
<br><label>
    <b>E-mail:</b>
    <input type="email"  placeholder="Digite o e-mail..." name="Cliente_Email" ></label>
   
<label>
    <b>Endereço</b>
    <input type="text"  placeholder="Digite o endereço..." name="Cliente_Endereco"   ></label>
<br>
<label>
    <b>CEP: </b>
    <input type="text" placeholder="Digite o CEP..." name="Cliente_CEP" required></label>
 <label>
    <b>Estado: </b>
    <select name="Cliente_Estado">
    <option value="" disabled selected>Selecione o estado...</option>
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
</select></label><br>

  
    
<label>
    <b>Cidade: </b>
    <input type="text" placeholder="Digite a cidade..." name="Cliente_Cidade" required></label>

    <label>
    <b>Bairro: </b>
    <input type="text" placeholder="Digite o bairro..." name="Cliente_Bairro" required></label>
    
<br>

    
<label>
    <b>CPF:</b>
    <input type="text"  placeholder="Digite o CPF..." name="Cliente_CPF" ></label>
    
<br>
<br>

      <input type="submit" class="button button2" value="Cadastrar"> 

    </form>

   <form action="MostrarClientes.php" method="get">
    <input type="submit" class="button button2" value="Gerar Tabela" />
    <br><br>
</form></td></table>

     </tr>
    </div>
    
  </p>
  </div>


    </p>

   
  
</div>


</body>
</html>
