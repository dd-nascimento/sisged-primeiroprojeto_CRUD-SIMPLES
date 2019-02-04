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