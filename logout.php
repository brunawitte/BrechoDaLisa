
<?php
session_start();
// Destroi todas as sessões
if(session_destroy())
{
// Redireciona para a página inicial
header("Location: Dashboard.php");
}
?>