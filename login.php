<!DOCTYPE html>

<html>
    <head>
        <title> SisGED - Login </title>
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/estilologin.css"/>
        <link rel="shortcut icon" href="img/favicon.jpg"/>
        <meta charset="utf-8"/>
    </head>

    <body>
        <div class="carga1">
            <center> <img id="cabeca"; src="img/head_sisged.png"; width="1000px";> </center>
        </div> 

                <div class="cargalogin">
                    <div id="login">
                            <form action="useratentica.php" method="POST">
                                <fieldset id="Login"> <legend>  <b> Login: </b> </legend>
                                <p> CPF: <input type="text" name="cpf" id="cpf" size="15" maxlenght="11"> </p>
                                <p> Senha: <input type="password" name="senha" id="senha" size="10" maxlenght="6"> </p>
                                <button type="submit"> <center> Entrar </button> | <button type="reset"> LIMPAR </button> 
                                </fieldset>
                            </form>
                            <br>
                    </div>
                </div>

                
    </body>
</html>