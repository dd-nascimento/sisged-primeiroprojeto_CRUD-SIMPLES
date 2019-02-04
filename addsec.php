<?php    

    #Cadastrar Secretarias

   $codsec=$_POST["id_sec"];
   $nomesec=$_POST["nome_sec"];
   $localsec=$_POST["local_sec_sediada"];

    include "conexaobd.php";
    $link->query("INSERT INTO secretaria(`id_sec`, `nome_sec`, `local_sec_sediada`) VALUES ('".$codsec."', '".$nomesec."', '".$localsec."');");

         header('Location: cadresult.php');
exit();

?>