<?php

require_once ('./conecta.php');
require_once ('./consultas.php');

    //Lendo dados via Método POST
    if(isset($_POST['cad_nome']))$nome = $_POST['cad_nome'];
    if(isset($_POST['cad_email']))$email = $_POST['cad_email'];
    if(isset($_POST['cad_login']))$login = $_POST['cad_login'];
    if(isset($_POST['cad_passwd']))$senha1 = $_POST['cad_passwd'];
    if(isset($_POST['cad_passwd2']))$senha2 = $_POST['cad_passwd2'];
    

     //Validações de Dados.
    
    if(isset($_POST['cad_email'])) $analisa_email = consultaEmail ($_POST['cad_email']);
    if(isset($_POST['cad_login'])) $analisa_login = consultaLogin ($_POST['cad_login']);


    //Enviando Dados para mysql
if(isset($_POST['cad_envia'])){
if ($analisa_email == 0 and $analisa_login ==0){  
    
    $cadastrar = "INSERT INTO usuario (cod_usuario, nome_usuario, e_mail, login, senha)  VALUES ('','$nome','$email','$login','$senha1')";
    // echo "<script>alert(\"" .$cadastrar. " \")</script>";
    
    $envia_banco = mysql_query($cadastrar,$conecta) or print(mysql_error());
        echo '<script>alert("Dados cadastrados com sucesso")</script>';
    
}
else {
    echo ("<script> alert('Login ou E-mail já existentes.');</script>)");
}

}