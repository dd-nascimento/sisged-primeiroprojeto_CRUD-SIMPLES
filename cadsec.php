<?php 

    include "conexaobd.php";
    
?>

<!DOCTYPE html> 

<html>
    <heade>
        <title> SisGED - Cadastro de Secretaria </title>
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
                
                <H1> Cadastro de Pastas Administrativas. </H1>
                <br>
                <form action="addsec.php" method="post">
                <fieldset id="cadsec"> <legend> <b> Cadastro de Secretarias</b> </legend>
                    <p> *ID da Secretaria: <input type="text" name="id_sec" id="id_sec" size="8" maxlength="6" placeholder="Ex.: 890000" required="required"/>
                    *Nome da Secretaria: <input type="text" name="nome_sec" id="namesec" size="30" maxlength="25" placeholder="Ex.: Secretaria de Educação" required="required"/> </p>
                    <p> *Local de sede da Secretaria: <input type="text" name="local_sec_sediada" id="localsec" size="30" maxlength="20" placeholder="Ex.: 4º Andar, Prefeitura" required="required"/ > </p>
                   </fieldset>
                    <br>
                    <button onclick="alert('Cadastrar Secretaria? ')" type="submit"> <b> Cadastrar Secretaria </b> </button>
                    <button  type="reset"> <b> Limpar </b> </button>
                   
                </form>
            </div>

          <div id="rodapé">
                <br>
               <center>
               
               <img src="img/roda_pe.png">

            </div>
        
    </body>
</html>
