<?php require_once('./validar_sessao.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
    
	<head>
        <meta charset="utf-8">
        <title>Logicando - feito  para evoluir</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
        <!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
        <!--script src="js/less-1.3.3.min.js"></script-->
        <!--append ‘#!watch’ to the browser URL, then refresh the page. -->

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="img/favicon.png">

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
    </head>

    <body>
        <div id="helper">
            <img src="img/favicon.png" alt="subir">
       	</div>
        <div class="container">
            <div class="row clearfix">

                <div class="col-md-12 column" align="center">
                    <img src="img/logo_400.png" id="logotst"> <!-- class="img-circle" alt="600x600" -->

                </div>

            </div>
            <?php
            if ($logado)
                include 'barra_login.php';
            else
                include 'barra_naologin.php';
            ?>
            <div id="pagina_projeto">
                <?php
                include './projeto.php';
                ?>
            </div>
            <div id="pagina_midia">
                <?php
                include './midia.php';
                ?>
            </div>
            <div id="pagina_doacao">
                <?php
                include './doacao.php';
                ?>
            </div>            
            <div id="index_content">
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <div class="carousel slide" id="carousel-605077">
                            <ol class="carousel-indicators">
                                <li class="active" data-slide-to="0" data-target="#carousel-605077">
                                </li>
                                <li data-slide-to="1" data-target="#carousel-605077">
                                </li>
                                <li data-slide-to="2" data-target="#carousel-605077">
                                </li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img alt="" src="img/carrossel_1.png">
                                    <div class="carousel-caption">
                                        <h4>
                                            Logicando - Faça parte dessa ideia
                                        </h4>
                                        <p>
                                            O projeto LOGICANDO tem o objetivo de incentivar o desenvolvimento do raciocínio lógico através de jogos virtuais e acompanhamento do desenvolvimento de atividades em sala de aula.
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img alt="" src="img/carrossel_2.png">
                                    <div class="carousel-caption">
                                        <h4>
                                            Logicando - Faça parte dessa ideia
                                        </h4>
                                        <p>
                                            O projeto LOGICANDO tem o objetivo de incentivar o desenvolvimento do raciocínio lógico através de jogos virtuais e acompanhamento do desenvolvimento de atividades em sala de aula.
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img alt="" src="img/carrossel_1.png">
                                    <div class="carousel-caption">
                                        <h4>
                                            Third Thumbnail label
                                        </h4>
                                        <p>
                                            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                        </p>
                                    </div>
                                </div>
                            </div> <a class="left carousel-control" href="#carousel-605077" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-605077" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                    </div>

                </div>

                <BR>

            </div>

            <div id="div_cadastro_login">
                <?php
                include './login_cadastro.php';
                ?>
            </div>
            <div id="div_cadastro">
                <?php
                include './cadastro.php';
                ?>
            </div>

        </div>
    </body>
</html>
