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
                        <li> <a href="logout.php"> Sair </a> </li>
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
                    if(isset($_POST["pesquisar1"])){
                        $pesquisar = $_POST["pesquisar1"];
                    }else if(isset($_GET["pesquisar1"])){
                        $pesquisar = $_GET["pesquisar1"];
                    }
                    include "conexaobd.php";
                    $result = $link->query("SELECT * FROM funcionarios WHERE matricula LIKE '%".$pesquisar."%' ORDER BY matricula");
                    ?>

                    <?php
                       if($result->num_rows > 0){
                            while ($row = $result->fetch_object()){
                        ?>


                    <table>
                        <tr>
                            <th> Nome do(a) Colaborador(a): </th>
                            <td> <?= $row->nome_fun ?> <?= $row->sobrenome_fun ?></td>

                            <th> Matricula: </th>
                            <td> <?= $row->matricula?> </td>
                        </tr>
                        
                        <tr> 
                            <th> Data de Nasc.: </th>
                            <td> <?= $row->dta_nasc_FUN?> </td>

                            <th> RG: </th>
                            <td> <?= $row->rg?>  </td>

                            <th> | CPF: </th>
                            <td> <?= $row->cpf?> </td>
                        </tr>
                        <tr> 
                            <th> Formação Acadêmica: </th>
                            <td> <?= $row->form_academica?> </td>
                        </tr>

                        <tr>
                            <th> Endereço do(a) Colaborador(a) </th>
                        </tr>
                        <tr> 
                            <th> Logradouro: </th>
                            <td> <?= $row->rua?> </td>

                            <th> Número: </th>
                            <td> <?= $row->numero?> </td>
                        </tr>
                        <tr>
                            <th> CEP: </th>
                            <td> <?= $row->cep?> </td>

                            <th> Cidade: </th>
                            <td> <?= $row->cidade?> </td>

                            <th> Estado: </th>
                            <td> <?= $row->estado?> </td>
                        </tr>
                        <tr>
                            <th> Bairro: </th>
                            <td> <?= $row->bairro?> </td> 
                        </tr>

                        <tr>
                            <th> Contatos </th>
                        </tr>
                        <tr>
                            <th> Telefone Fixo: </th>
                            <td> <?= $row->telefone1?> </td>

                            <th> Celular: </th>
                            <td> <?= $row->telefone2?> </td>

                            <th> Tele. Recado: </th>
                            <td> <?= $row->telefone3?> </td>
                        </tr> 
                        <tr>
                            <th> Lotação do Funcionário(a). </th>
                        </tr>
                        <tr>
                            <th> ID da Secretaria: </th>
                            <td> <?= $row->id_sec?> </td>

                            <th> Tipo de Contrato: </th>
                            <td> <?= $row->fun_tipo?> </td>
                        </tr>
                        <tr>
                            <th> Carga Horária: </th>
                            <td> <?= $row->ch_trab?> </td>

                            <th> Data de Admissão: </th>
                            <td> <?= $row->dta_admissão?> </td>

                            <th> Função: </th>
                            <td> <?= $row->função?> </td>
                        </tr>
           
                        <tr>
                            <td>  <a href="updatedates.php?matricula=<?= $row->matricula ?>"> atualizar</a> </td>
                                <td> <a href="excluir.php?matricula=<?= $row->matricula ?>"> Excluir </a> </td>
                        </tr>
                    </table><br><br>



                    <?php
                        }
                        } else {
                        ?>
                        <div> Nenhum Usuário encontrado! </div>
                        <?php } ?>

            </div>


            <div id="rodapé">
                <br>
               <center>
               
               <img src="img/roda_pe.png">

            </div>
        
    </body>
</html>