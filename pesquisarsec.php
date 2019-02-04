<?php 
  
    include "conexaobd.php";
?>
<!DOCTYPE html> 
<html>
    <heade>
        <title> SisGED - Consultas </title>
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
                        <li> <a href="logout.php"> Sair </a>  </li>
                    </ul>
                </nav>
            </div>

            <div id="cargaconteudo">
                <!-- RECEBE INFORMAÇÃO DE CONSULTAS.PHP E JOGA PARA O BANCO E APRESENTA O RESULTADO -->
                <?php   
                        #Conectar Banco

                    $link= new mysqli ("localhost", "root", "", "sisged");

                        #checar a conexao
                    if ($link->connect_errno){
                        printf("Conexao com MariaBD Falhou: %s\n", $link->connect_error);
                        exit();
                    }

                    mysqli_set_charset ($link, "utf8");

                ?>


                    <?PHP
                    $pesquisar = "";
                    if(isset($_POST["idsec"])){
                        $pesquisar = $_POST["idsec"];
                    }else if(isset($_GET["idsec"])){
                        $pesquisar = $_GET["idsec"];
                    }
                    include "conexaobd.php";
                    $result = $link->query("SELECT * FROM secretaria WHERE id_sec LIKE '%".$pesquisar."%' ORDER BY id_sec");
                    ?>

                    <?php
                       if($result->num_rows > 0){
                            while ($row = $result->fetch_object()){
                        ?>


                    <table>
                        <tr>
                            <th> ID da Secretaria: <td> <?= $row->id_sec ?> </td> </th>
                            
                            
                            <th> Nome da Secretaria: </th>
                            <td> <?= $row->nome_sec ?></td>
                        </tr> 
                        <tr> 
                            <th> Localização da Secretaria: </th>
                            <td> <?=$row->local_sec_sediada?></td>
                        </tr>
                        <tr>
                            <td>  <a href="upsecretaria.php?idsec=<?= $row->id_sec ?>"> atualizar</a> </td>
                                <td> <a href="excluirsec.php?idsec=<?= $row->id_sec ?>"> Excluir </a> </td>
                               
                        </tr>
                    </table><br><br>



                    <?php
                        }
                        } else {
                        ?>
                        <div> Nenhuma Secretaria Encontrada! </div>
                        <?php } ?>

            </div>


           <div id="rodapé">
                <br>
               <center>
               
               <img src="img/roda_pe.png">

            </div>
        
        
    </body>
</html>