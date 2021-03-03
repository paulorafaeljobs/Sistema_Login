<?php
session_start();
include('verifica_login.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>CADASTRO</title>
    <link rel="stylesheet" href="./style/style.css" />
</head>

    <body>
   
    <header>
        
                <ul class="menu">
                <li><a href="painel.php">Inicio</a></li>
                <li><a href="#">Clientes</a></li>
                <li><a href="#">Produtos</a></li>
                <li><a href="cadastro.php">Cadastro</a></li>
                </ul>
                <div class="logo">Olá  <?php echo $_SESSION['usuario'];?>          <a href="logout.php">        Sair</a></div>
    </header>
                </br></br></br></br></br>
                <form name="f_card" method="post" action="conect.php">
                <h2><label>Formulario de Cadastro</label></br></h2>
                <input Placeholder="Nome:" type="text" name ="f_nome" size="25"/></br>
                <input Placeholder="E-mail:" type="text" name ="f_mail" size="25"/></br>
                <input Placeholder="Senha:" type="text" name ="f_pass1" size="25"/></br>
                <input Placeholder="Confirmar Senha:" type="text" name ="f_pass2" size="25"/></br>
                <input type="submit" value="Cadastrar"/> <input type="reset" value="Limpar"/>
                </form>

    </body>

</html>
