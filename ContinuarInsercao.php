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
  <div class="dropdown" style="float:right;">
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
    <br><br>
<?php
require ('conexao.php');

?>


   
<center>
<h1> Selecione o produto que deseja inserir: </h1>
   <form method="POST" action="ContinuarInsercao.php">
  <?php   
                $sql6 = "SELECT * FROM produto  "; 
                $resultado6 = mysqli_query($con,$sql6);

                 $option = '';
                while($row=mysqli_fetch_array($resultado6)){



                 $option .= "<option value = '".$row['ID_Produto']."'>".$row['Produto_Nome']." </option>";
                }
                ?>
                
<label>
                <h><b>Produto: </b></h>
                <select name="ID_Item_Compra" id="ID_Item_Compra" required>
                <?php
                          
                            echo "<option disabled selected>Selecione o produto...</option>";
                            
                            echo $option;
                        ?> </select></label>
        <br>
        <br>

<input type="submit" class="button button2" value="Cadastrar" name="Cadastrar"></form> 

<form method="POST" action="MostrarCompras.php">

  <input type="submit" class="button button2" value="Encerrar" name="Encerrar"> </form>
<br><br>

<?php


if(isset($_POST["Cadastrar"])) {


require ('conexao.php');

$ID_Item_Compra = filter_input(INPUT_POST,'ID_Item_Compra');

$query1 = "INSERT INTO item (ID_Item_Compra) VALUES ('$ID_Item_Compra')";
$resultado = mysqli_query($con,$query1);

$pega_ultimo_id2 = "SELECT * FROM item ORDER BY ID_Item DESC LIMIT 1 "; 
$meu2 = mysqli_query($con,$pega_ultimo_id2);
$oqueeuquero2 = mysqli_fetch_array($meu2);
$n_compra_atual = $oqueeuquero2['N_Compra'];

$attncompra = "UPDATE item SET N_Compra = (SELECT max(N_Compra) FROM item)  WHERE ID_Item = (SELECT max(ID_Item) FROM item)";
$update2 = mysqli_query($con, $attncompra);



//$id2 = mysqli_insert_id($con);


              if (!$resultado) {
              echo "<br>";
              echo "<br>";
              
              echo "<br>";
              echo "<br>";
              echo "<center>";
              echo "Não foi possível cadastrar, tente novamente.";
              echo "</center>";
              echo "<br>";
              echo "<br>";
              echo "<br>";
              } else {
              
                echo "<br>";
                echo "<br>";
            
                echo "<center><img src=https://image.flaticon.com/icons/svg/179/179679.svg alt='imagem'  width=10% height=20%></center>";
                echo "<br>";
                echo "<br>";
                echo "<center>Inserção de produto feita com sucesso!<br> <br><b>Aguarde 5 segundos</b> para a atualização dos dados.<br> <br>Caso deseja finalizar a compra clique em <b>[Encerrar]</b></center>";
                 echo "<meta HTTP-EQUIV='refresh' CONTENT='5'>";
                echo "<br>";
                echo "<br>";
                
              }
              }


?>



<table id="myTable" width="1200" height="100">
            <tr>
            <center> 
                                           
            <th><center>Compra ID </th></center> 
            <th><center>Compra Hora</th></center> 
            <th><center>Compra Data</th></center> 
            <th><center>Compra Cliente</th></center>
            
           
          
             
            
          

            </tr>
   <?php
    

     $sql = "SELECT * FROM compras 
            INNER JOIN cliente        ON Compra_id_cliente = id_cliente 
             INNER JOIN item           ON N_Compra = ID_Compra 
             INNER JOIN Produto        ON ID_Produto = ID_Item_Compra order by ID_Compra 
             DESC LIMIT 1";  


                  $resultado = mysqli_query($con,$sql); 
                  while ($row = mysqli_fetch_array($resultado)) { 
                     echo "<center>";

                  echo "<tr>"; 
                  echo "<td><center>"  . $row['ID_Compra'] . "</center>"; 
                  echo "<td><center>"  . $row['Compra_Hora'] . "</center>"; 
                  echo "<td><center>"  . date("d/m/Y", strtotime($row['Compra_Data'])) . "</td></center>"; 
                  echo "<td><center> "  . $row['Cliente_Nome'] . "</center>"; 
                  
      
                
                

}

                   ?>

                 </th></th></th></th></center></tr></table>

<table id="myTable" width="1200" height="100">
  <tr>
     <tr>
            <center> 
                                           
            <th><center>Produtos </th></center>  
           
            
           
          
             
            
          

            </tr>
                   <?php
                  $pega_ultimo_id = "SELECT ID_Compra FROM compras ORDER BY ID_Compra DESC "; 
                   $pegou = mysqli_query($con,$pega_ultimo_id);
                   $idpego = mysqli_fetch_array($pegou);
             $sql2 = "SELECT * FROM compras
             INNER JOIN item           ON N_Compra = ID_Compra 
             INNER JOIN Produto        ON ID_Produto = ID_Item_Compra WHERE N_Compra = ". $idpego['ID_Compra'] . "";
               $resultado = mysqli_query($con,$sql2); 
              while ($row = mysqli_fetch_array($resultado)) {

                
                 
echo "<tr>"; 
                   echo "<td><center> "  . $row['Produto_Nome'] . "</center></td>";
                   

                 }
               echo "</table>";
                   ?>
                 


</center>



 
<br><br><br><BR><BR>
</body>
</html>

