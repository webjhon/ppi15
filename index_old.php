<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //require_once ('./validarLogin.php');
        $logado=false;
         if(isset($_COOKIE['login'])){
              $logado=true;
               //0 echo "Bem Vindo, {$_COOKIE['login']} <br>";
               // echo "SITE PARA USUÁRIO LOGADO";
              
            }
            else{
                //echo "Bem vindo convidado <br>";
                //echo "Site para usuário NÃO LOGADO";
            }
        
        ?>
    </body>
</html>
