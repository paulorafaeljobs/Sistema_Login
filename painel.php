<?php
session_start();
include('verifica_login.php');
?>


<!DOCTYPE html>
<html>
<head>
    <title>PAINEL ADMINISTRATIVO</title>
    <link rel="stylesheet" href="./style/style.css" />
</head>

    <body>
   
    <header>
        
                <ul class="menu">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Clientes</a></li>
                <li><a href="#">Produtos</a></li>
                <li><a href="cadastro.php">Cadastro</a></li>
                </ul>
                <div class="logo">  Olá <?php echo $_SESSION['usuario'];?>  <a href="logout.php">Sair</a>  </div>
    </header>


    </body>

</html>