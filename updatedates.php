<?php 
  
    include "conexaobd.php";
    
?>
<!DOCTYPE html> 

<html>
    <heade>
        <title> SisGED - Cadastro de Funcionári(a). </title>
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="shortcut icon" href="img/favicon.jpg"/>
        <meta charset="utf-8"/>
    </head>
    <body>
        <div class="carga1">
            <img id="cabeca"; src="img/head_sisged.png">
        </div>  
        <br>  
            <div id="menu">
                <nav id="mymenu">
                    <ul>
                        <p> Menu Principal </p>
                        <li> <a href="principal.php"> Início </a> </li>
                        <li> <a href="cadfuncionario.php"> Cadastro de Funcionários </a></li>
                        <li> <a href="cadsec.php"> Cadastro Administração </a> </li>
                        <li> <a href="consultas.php"> Consultas Funcionários </a> </li>
                        <li> <a href="help.php"> Ajuda </a> </li>
                        <li> <a href="logout.php"> Sair </a> </li>
                    </ul>
                </nav>
            </div>

            <div id="cargaconteudo">
                <?PHP
                    if (isset($_GET["matricula"])){
                        $matricula = $_GET["matricula"];
                        include "conexaobd.php";
                        $result1 = $link->query("SELECT * FROM funcionarios WHERE `matricula`='".$matricula."';");
                        if($result1->num_rows == 1){
                            $func = $result1->fetch_object();
                        }else {
                            header('Location: pesquisar.php');
                            exit();
                        }
                    }else{
                        header('Location: consultas.php');
                        exit();
                    }
                    ?>
                 <br>
                  
                    <fieldset id="user"> <legend> <b> Cadastro de Funcionário </b> </legend>
                        <form action="atualizar2.php" method="post">
                        <p> *Nome do(a) Funcionário(a): <input type="text" name="nome_fun" id="name" size="15" maxlength="10" placeholder="primeiro nome" required="required" value="<?= $func->nome_fun ?>"/> </p>
                        <p> *Sobrenome: <input type="tex" name="sobrenome_fun" id="snome" size="50" maxlength="80" placeholder="sobrenome. Exemp.: Nascimento Melo" required="required" value="<?= $func->sobrenome_fun?>"/> </p>
                        <p> *Data de Nascimento: <input type="text" name="dta_nasc_FUN" id="dnasc" size="15" maxlength="10" placeholder="Ex.: 01/02/1989" required="required" value="<?= $func->dta_nasc_FUN ?>"/> </p>
                        <p> *RG: <input type="text" name="rg" id="rg" size="12" maxlength="10" placeholder="Identidade" value="<?= $func->rg ?>"/> *CPF: <input type="text" name="cpf" id="cpf" size="12" maxlength="11" placeholder="CPF sem . e -" required="required" value="<?= $func->cpf ?>"/> </p>
                        <p> *Formação Acadêmica: <input type="text" name="form_academica" id="formac" size="35" maxlength="30" placeholder="Exemp.: Graduado(a) em Administração" required="required" value="<?= $func->form_academica ?>"/> </p>
                    </fieldset>
                        <br>
                        <br>
                    <fieldset id="contato"> <legend> <b> Endereço e Contato </b> </legend>
                        <p> Logradorou: <input type="text"  name="rua" id="logradouro" size="40" maxlength="20" placeholder="Rua, Avenida, Travessa, Loteamento..." value="<?= $func->rua ?>"/>
                        <b>  </b>  Número: <input type="text" name="numero" id="number" size="5" maxlength="4"value="<?= $func->numero ?>"> </p>
                        <p>  CEP: <input type="text" name="cep" id="cep" size="9" maxlength="8" placeholder="Ex.:52222904" value="<?= $func->cep ?>"/> Bairro: <input type="text" name="bairro" id="bairro" size="30" maxlength="20" value="<?= $func->bairro ?>"/></p>
                        <p> Estado: <input type="text" name="estado" id="uf" size="3" maxlength="2" placeholder="Ex.: SP" value="<?= $func->estado ?>"> Cidade: <input type="text" name="cidade" id="cidd" size="35" maxlength="30" placeholder="Ex.: Guarulhos" value="<?= $func->cidade ?>"/> </p>
                            <fieldset> <legend> <p> Contato </p> </legend>
                                <p> *Telefone Fixo: <input type="text" name="telefone1" id="tfixo" size="13" maxlength="11" placeholder="Ex.:1131000000" required="required" value="<?= $func->telefone1?>"/> 
                                 *Celular: <input type="text" name="telefone2" id="cell" size="13" maxlength="11" placeholder="Ex.:11971000000" required="required" value="<?= $func->telefone2 ?>"/> </p>
                                <p> Telefone Contato: <input type="text" name="telefone3" id="tfixo" size="13" maxlength="11" placeholder="Ex.:1100000000" value="<?= $func->telefone3 ?>"/> </p>
                            </fieldset>
                        <br>
                        
                    </fieldset>

                        <br>
                    <fieldset id="funcional"> <legend> <b> Lotação Administrativa </b> </legend>
                        <p> *ID Secretaria: <input type="text" name="id_sec" id="id_sec" size="7" maxlength="6" required="required" value="<?= $func->id_sec ?>"/> *Função: 
                        <input type="text" name="função" id="funcao" size="30" maxlength="20" placeholder="Ex.: Graduado(a) em Administração" required="required" value="<?= $func->função ?>"/> 
                        *Data de Admissão: <input type="char" name="dta_admissão" id="admissao" size="15" maxlength="10" placeholder="Ex.: 01/02/2017" required="required" value="<?= $func->dta_admissão?>"/> </p> 
                        <p> *Tipo de Contrato: <input type="text" name="fun_tipo" id="funtipo" size="14" maxlength="10" placeholder="Contratado ou Fixo" required="required" value="<?= $func->fun_tipo?>"/> *Carga Horária: 
                        <input type="text" name="ch_trab" id="chtrab" size="20" maxlength="3" placeholder="Se 100h. Informar 100!" required="required" value="<?= $func->ch_trab?>"/> </p>
                        <h3> Atenção! Informar matrícula do(a) colaborador(a) gerada através do EMAC </h3>
                        <p> *Matrícula: <input type="hidden" name="matricula" id="mat" size="8" maxlength="6" placeholder="Ex.: 888999" required="required" value="<?= $func->matricula ?>"/> </p>
                    </fieldset>
                    <br>
                    <br>
                    
                   <button type="submit"> Atualizar Cadastro </button>
                </form>
            </div>

            <div id="rodapé">
                <br>
               <center>
               
               <img src="img/roda_pe.png">

            </div>
        
    </body>
</html>
