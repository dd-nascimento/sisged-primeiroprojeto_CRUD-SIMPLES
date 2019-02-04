<?php 

    include "conexaobd.php";
    
?>
<!DOCTYPE html> 

<html>
    <heade>
        <title> SisGED - Início </title>
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
                <br>
                <br>
                <br>
                <br>
                    <p> Cadastro realizado com sucesso! </p>    
                    <br>
                    <p> Clique aqui para <a href="consultas.php"> consultar o seu cadastro </a> </p>
                <br>
                <br>
                <br>
                <br>
                <br>
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
