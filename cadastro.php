<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <title></title>
    </head>
    <body>
        
        <form name="cadastro" method="post">
            <fieldset>
                <legend> CADASTRO </legend>
                <label for="login"> LOGIN </label>
                <input type="text" name="login_cadastro"><br>
                <label for="senha"> SENHA </label>
                <input type="password" name="senha_cadastro"><br>
                <input type="submit" name="enviar_cadastro" value="Cadastro">
            </fieldset>
        </form>
        
        <?php
            require_once ('./GravarDados.php');
        ?>
    </body>
</html>
