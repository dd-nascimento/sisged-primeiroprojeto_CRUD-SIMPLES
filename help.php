<?php 

    include "conexaobd.php";
?>
<!DOCTYPE html> 

<html>
    <heade>
        <title> SisGED - HelpDesk </title>
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
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
                <br>
                <br>
                <center> <h3> Para dúvidas com usuários, senhas ou funcionários e secretarias, consultar a <a href="bd+doc/doc_sisged.pdf"> documentação em anexo. </a> </h3>
                <br>
                <br>
            </div>

           <div id="rodapé">
                <br>
               <center>
               
               <img src="img/roda_pe.png">

            </div>
        
        
    </body>
</html>
