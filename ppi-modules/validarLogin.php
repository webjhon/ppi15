<?php
require_once ('./conecta.php');

    $login = isset($_POST['login']) ? $_POST['login'] : '';
    $senha = isset($_POST['senha']) ? $_POST['senha'] : '';
    
    if(isset($_POST['enviar'])){
    $buscar = "SELECT * FROM usuarios  WHERE login = '$login' and senha = '$senha'";
    $verifica = mysql_query($buscar);
    if(mysql_num_rows($verifica)<=0){
        echo '<script> alert("Login ou Senha incorreto")</script>';
    }
    else {
        setcookie("login",$login,time()+3600);
        header("Location: index.php");
    }
    
}
