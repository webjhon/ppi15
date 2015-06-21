<?php

require_once ('./conecta.php');

$login = isset($_POST['cad_login']) ? $_POST['cad_login'] : '';
$senha = isset($_POST['cad_passwd']) ? $_POST['cad_passwd'] : '';

if (isset($_POST['login_envia'])) {
    $buscar = "SELECT * FROM usuario  WHERE login = '$login' and senha = '$senha'";
    $verifica = mysql_query($buscar);
    if (mysql_num_rows($verifica) <= 0) {
    echo "<script>
        alert('Usuário ou senha incorreto.');
        parent.location = 'index.php';
    </script>";
    } else {
        //Aqui devo fazer a sessão
        
        session_start();
        $registro = mysql_fetch_array($verifica);
        $_SESSION["nome_usuario"] = $registro['nome_usuario'];
        $_SESSION['cod_usuario'] = $registro['cod_usuario'];
        header("Location: index.php");
    }
}
