<?php
require_once ('./conecta.php');
if(isset($_POST['enviar_cadastro'])){
    $login_cadastro = $_POST['login_cadastro'];
    $senha_cadastro = $_POST['senha_cadastro'];
    
    $cadastrar = "INSERT INTO usuarios (id,login,senha) VALUES ('','$login_cadastro','$senha_cadastro')";
    
    $envia_banco = mysql_query($cadastrar,$conecta) or print(mysql_error());
        echo '<script>alert("Dados cadastrados com sucesso")</script>';
    
}

