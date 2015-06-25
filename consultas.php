<?php

require_once ('./conecta.php');
require_once('./validar_sessao.php');


function consultaEmail ($email){
    $buscar = "select usuario.e_mail from usuario where usuario.e_mail = '$email'";
    $verifica = mysql_query($buscar);
    if (mysql_num_rows($verifica) <= 0) {
        return false; //Neste caso ele vai retornar 0, o que significa que o e-mail esta disponível.
}
else {
        return true; //Neste caso ele vai retornar 1, o que significa que o e-mail esta indisponível.
}
}

function consultaLogin ($login){
/* @var $buscar type */
    $buscar = "select usuario.login from usuario where usuario.login = '$login'";
    $verifica = mysql_query($buscar);
    if (mysql_num_rows($verifica) <= 0) {
        return false; //Neste caso ele vai retornar 0, o que significa que o login esta disponível.
}
else {
        return true; //Neste caso ele vai retornar 1, o que significa que o login esta indisponível.
}
}