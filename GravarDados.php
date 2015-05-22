<?php

require_once ('./conecta.php');
if(isset($_POST['cad_envia'])){
    $nome = $_POST['cad_nome'];
    $email = $_POST['cad_email'];
    
    $login = $_POST['cad_login'];
    $senha1 = $_POST['cad_passwd'];
    $senha2 = $_POST['cad_passwd2'];    
  
    
    $cadastrar = "INSERT INTO usuario (cod_usuario, nome_usuario, e_mail, login, senha)  VALUES ('','$nome','$email','$login','$senha1')";
    // echo "<script>alert(\"" .$cadastrar. " \")</script>";
    
    $envia_banco = mysql_query($cadastrar,$conecta) or print(mysql_error());
        echo '<script>alert("Dados cadastrados com sucesso")</script>';
    
}

