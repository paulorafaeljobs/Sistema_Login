<?php
session_start();
include('verifica_login.php');
?>

<h2>Olá, <?php echo $_SESSION['usuario'];?> <a href="logout.php">Sair</a> <a href="painel.php">Painel</a></h2>

<h1> CADASTRADOS </h1>
<hr>




<?php
$v_nome=$_POST["f_nome"];
$v_mail=$_POST["f_mail"];
$v_pass1=$_POST["f_pass1"];
$v_pass2=$_POST["f_pass2"];



echo "Nome: $v_nome </br> E-mail: $v_mail </br> Senha: $v_pass1 </br> Senha Confirmada: $v_pass2 </br>";



?>

