<?php 
if(isset($_GET["matricula"])){
	$matricula = $_GET["matricula"];
	include "conexaobd.php";
	$link->query("DELETE FROM funcionarios WHERE matricula='".$matricula."';");

}
header('Location: pesquisar.php');
exit();
?> 