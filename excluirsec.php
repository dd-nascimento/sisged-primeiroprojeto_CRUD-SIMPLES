<?php 
if(isset($_GET["idsec"])){
	$idsec = $_GET["idsec"];
	include "conexaobd.php";
	$link->query("DELETE FROM secretaria WHERE id_sec='".$idsec."';");

}
header('Location: pesquisarsec.php');
exit();
?>