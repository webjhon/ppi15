<?php require_once('./validar_sessao.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
    
	<head>
        <script type="text/javascript">
            logado = "<?php echo $logado; ?>";
    
        </script>
        <?php require_once('bootstrap_rel.php'); ?> 
        <title>Logicando - feito  para evoluir</title>
    </head>

    <body>
        <div id="helper" class="canto">
            <img src="img/botao-topo.png" alt="subir">
       	</div>
        <div class="container">
		<br>
		
<!----------  LOGO PÁGINA PRINCIPAL  ---------->
			<div class="row clearfix">
                <div class="col-md-12">
                    <img src="img/logicando.png" class="img-responsive" alt="Logicando" id="logotst"> <!-- class="img-circle" alt="600x600" -->
                </div>
            </div>
			<br>
<!----------------  FIM LOGO  ---------------->
			
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
            <div id="pagina_doador">
                <?php
                include './doador.php';
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
