<?php 
    include "valida.php";
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
                    if (isset($_GET["idsec"])){
                        $idsec = $_GET["idsec"];
                        include "conexaobd.php";
                       $result1 = $link->query("SELECT * FROM secretaria WHERE `id_sec`='".$idsec."';");
                       
                        if($result1->num_rows == 1){
                            $sec = $result1->fetch_object();
                        } else {
                            header('Location: pesquisarsec.php');
                            exit();
                        }
                        
                    }else{
                       header('Location: consultas.php');
                        exit();
                    }
                    ?>
                 <br>
                  
                    <fieldset id="user"> <legend> <b> Cadastro de Funcionário </b> </legend>
                        <form action="atualizasec.php" method="post">
                        <p> *Nome da Secretaria: <input type="text" name="nome_sec" id="nomesec" size="30" maxlength="10" placeholder="primeiro nome" required="required" value="<?= $sec->nome_sec ?>"/> </p>
                        <p> *ID da Secretaria <input type="text" name="id_sec" id="nomesec" size="15" maxlength="6" placeholder="ID da Secretaria" required="required" value="<?= $sec->id_sec ?>"/> </p>
						<p> *Localização da Secretaria: <input type="text" name="local_sec_sediada" id="localsec" size="15" maxlength="10" placeholder="primeiro nome" required="required" value="<?= $sec->local_sec_sediada ?>"/> </p>
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
