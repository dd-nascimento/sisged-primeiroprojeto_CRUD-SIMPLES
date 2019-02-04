<?php 
    /* Dados Funcionários */

        $fnome=$_POST["nome_fun"];
        $fsobrenome=$_POST["sobrenome_fun"];
        $fdtnasc=$_POST["dta_nasc_FUN"];
        $frg=$_POST["rg"];
        $fcpf=$_POST["cpf"];
        $ffacad=$_POST["form_academica"];
    
    /* Endereço Funcionários */

        $flogradouro=$_POST["rua"];
        $fnumero=$_POST["numero"];
        $fcep=$_POST["cep"];
        $fbairro=$_POST["bairro"];
        $festado=$_POST["estado"];
        $fcidade=$_POST["cidade"];

            /* Contato */
                $ftelefone=$_POST["telefone1"];
                $fcelular=$_POST["telefone2"];
                $frecado=$_POST["telefone3"];
        
    /* Lotação do Funcionário */ 

        $idsec=$_POST["id_sec"];
        $ffuncao=$_POST["função"];
        $ftipo=$_POST["fun_tipo"];
        $fadmissao=$_POST["dta_admissão"];
        $fch=$_POST["ch_trab"];
        $fmat=$_POST["matricula"];
    
        include "conexaobd.php";
        $link->query("INSERT INTO funcionarios(`matricula`, `nome_fun`, `sobrenome_fun`, `dta_nasc_FUN`, `rg`, `cpf`, `dta_admissão`, 
        `função`, `ch_trab`, `form_academica`, `fun_tipo`, `telefone1`, `telefone2`, `telefone3`, `rua`, `numero`, `cep`, 
        `bairro`, `cidade`, `estado`, `id_sec`) 
        VALUES ('".$fmat."', '".$fnome."', '".$fsobrenome."', '".$fdtnasc."', 
        '".$frg."', '".$fcpf."', '".$fadmissao."', '".$ffuncao."', '".$fch."', 
        '".$ffacad."', '".$ftipo."', '".$ftelefone."', '".$fcelular."', '".$frecado."', 
        '".$flogradouro."', '".$fnumero."', '".$fcep."', '".$fbairro."','".$festado."', '".$fcidade."', '".$idsec."');");

        header('Location: cadresult.php');
exit();
?>

