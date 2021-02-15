<?php 
session_start();
include('verifica_login');
?>

<style>
.bloco1
{
    justify-content: space-between;
    color:white;
    background-color:black;
}

</style>

<div class="bloco1">
<h1>Ola ,<?php  echo $_SESSION['usuario'];?>  </h1>
<h2><a  style="text-decoration: none; color:white;" href="logout.php">Sair</a></h2>
</div>