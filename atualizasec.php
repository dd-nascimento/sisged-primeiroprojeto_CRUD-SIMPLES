<?PHP
$link = new mysqli("localhost", "root", "", "sisged");
/*check conection*/
if ($link->connect_errno){
	printf("Conect failed: %s\n", $link->connect_erro);
	exit();
}
mysqli_set_charset ( $link, "utf8" );
?>

<?php
if(isset($_POST["idsec"])){
	$idsec = $_POST["id_sec"];
	$nomesec = $_POST["nome_sec"];
	$localsec = $_POST["local_sec_sediada"];
	
	include "conexaobd.php";
	$link->query("UPDATE secretaria SET `id_sec`='$idsec',`nome_sec`='$nomesec',`local_sec_sediada`='$localsec' WHERE id_sec='$idsec';");
	
}										
header('Location: pesquisarsec.php?idsec='.$idsec);
exit();
?>