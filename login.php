<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="cadastro" method="post">
            <fieldset>
                <legend> LOGIN </legend>
                <label for="login"> LOGIN </label>
                <input type="text" name="login"><br>
                <label for="senha"> SENHA </label>
                <input type="password" name="senha"><br>
                <input type="submit" name="enviar" value="Logar">
            </fieldset>
        </form>    
        <?php
        require_once ('./validarLogin.php');
        ?>
    </body>
</html>
