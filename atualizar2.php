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
if(isset($_POST["matricula"])){
	$matricula = $_POST["matricula"];
	$nome_fun = $_POST["nome_fun"];
	$sobrenome_fun = $_POST["sobrenome_fun"];
	$dta_nasc_FUN = $_POST["dta_nasc_FUN"];
	$rg = $_POST["rg"];
	$cpf = $_POST["cpf"];
	$form_acadmic = $_POST["form_academica"];
	$rua = $_POST["rua"];
	$numero = $_POST["rua"];
	$cep = $_POST["cep"];
	$estado = $_POST["estado"];
	$cidade = $_POST["cidade"];
	$bairro = $_POST["bairro"];
	$telefone1 = $_POST["telefone1"];
	$telefone2 = $_POST["telefone2"];
	$telefone3 = $_POST["telefone3"];
	$idsec = $_POST["id_sec"];
	$função = $_POST["função"];
	$dtaadmissao = $_POST ["dta_admissão"];
	$tipocontrato = $_POST["fun_tipo"];
	$ch_trab = $_POST["ch_trab"];
	$dta_admissão = $_POST["dta_admissão"];
	include "conexaobd.php";
	$link->query("UPDATE funcionarios SET `matricula`='$matricula',`nome_fun`='$nome_fun',`sobrenome_fun`='$sobrenome_fun',`dta_nasc_FUN`='$dta_nasc_FUN',`rg`='$rg',`cpf`='$cpf',`dta_admissão`='$dta_admissão',`função`='$função',`ch_trab`='$ch_trab',`form_academica`='$form_acadmic',`fun_tipo`='$tipocontrato',`telefone1`='$telefone1',`telefone2`='$telefone2',`telefone3`='$telefone3',`rua`='$rua',`numero`='$numero',`cep`='$cep',`bairro`='$bairro',`cidade`='$cidade',`estado`='$estado',`id_sec`='$idsec' WHERE matricula='$matricula';");
	}

header('Location: pesquisar.php?pesquisar1='.$matricula);
exit();
?>
