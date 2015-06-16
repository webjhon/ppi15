<!DOCTYPE html>
<html>
	
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
		
		<div class="container">
			
			
			<div class="row clearfix" id="id_doacoes">
				<div class="col-md-6 column" align="left">
					
					<!-- Menu doacao -->
					<div class="btn-group btn-group-md">
						<button class="btn btn-primary" type="button" name="porque_doar"> <em class="glyphicon glyphicon-align-left"></em> Por que doar ?</button>
						<button class="btn btn-default" type="button" name="entidades"> <em class="glyphicon glyphicon-align-center"></em> Entidades</button>
						<button class="btn btn-primary" type="button" name="como_doar"> <em class="glyphicon glyphicon-align-right"></em> Como doar ?</button>
						<button class="btn btn-default" type="button" name="brindes"> <em class="glyphicon glyphicon-align-justify"></em> Brindes</button>
					</div>
					
					<div id="porque_doar">
						<h4>O nosso trabalho funciona</h4>
							<p>Com as atividades realizadas nas escolas no 2º semestre de 2014, percebemos e tivemos com testemunho dos professores, que o rendimento dos alunos melhorou. Principalmente em atividades que envolvem o raciocínio lógico.</p>
					</div>
					
					<div id="entidades">
						<h4>Entidades</h4>
							<p>Entidades</p>
					</div>
					
					<div id="como_doar">
						<h4>Como doar ?</h4>
							<p>Como doar ?</p>
					</div>
					
					<div id="brindes">
						<h4>Brindes</h4>
							<p>Brindes</p>
					</div>
					
					
				</div>
				
				<!-- Imagens doacao -->
				
				<div class="col-md-6 column" align="center">

					<div class="img">
						<img class="tamanho" src="img/logo_400.png">
					</div>
				
					<div class="img" id="porque_doar_midia">
						<img class="tamanho" src="img/doacao.png">
					</div>
					
					<div class="img" id="entidades_midia">
						<img class="tamanho" src="img/camiseta.png">
					</div>
					
					<div class="img" id="como_doar_midia">
						<img class="tamanho" src="img/camiseta.png">
					</div>
					
					<div class="img" id="brindes_midia">
						<img class="tamanho" src="img/camiseta.png">
					</div>
				</div>
			</div>
			
			
			<!-- Formulário de Doação -->
			
			<form class="form-horizontal">
				<fieldset>
					
					<!-- Form Name -->
					<legend>Formulário de doação</legend>
					
					<!-- Selecao da entidade -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="select_entidade">Selecione a entidade beneficiada</label>
						<div class="col-md-6">
							<select id="select_entidade" name="select_entidade" class="form-control">
								<option>Selecione</option>
								<option value="1">Avocap</option>
								<option value="2">APAE</option>
							</select>
						</div>
					</div>
					
					<!-- Selecao valor -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="seleciona_valor">Selecione o valor da doação</label>
						<div class="col-md-6">
							<select id="seleciona_valor" name="seleciona_valor" class="form-control">
								<option value="1">R$ 15,00 (mínimo)</option>
								<option value="2">R$ 30,00</option>
								<option value="3">R$ 50,00 (camiseta)</option>
								<option value="4">R$ 80,00 (camiseta + adesivos)</option>
							</select>
						</div>
					</div>
					
					
					<!-- Selecao Banco -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="bancos">Selecione o banco preferencial</label>
						<div class="col-md-4">
							<div class="radio">
								<label for="bancos-0">
									<input name="bancos" id="bancos-0" value="1" checked="checked" type="radio">
									CEF (CAIXA)
								</label>
							</div>
							<div class="radio">
								<label for="bancos-1">
									<input name="bancos" id="bancos-1" value="2" type="radio">
									Banco do Brasil
								</label>
							</div>
							<div class="radio">
								<label for="bancos-2">
									<input name="bancos" id="bancos-2" value="3" type="radio">
									Banrisul
								</label>
							</div>
							<div class="radio">
								<label for="bancos-3">
									<input name="bancos" id="bancos-3" value="4" type="radio">
									Bradesco
								</label>
							</div>
						</div>
					</div>
					
					<!-- Botao Doacao -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="gera_doacao"></label>
						<div class="col-md-4">
							<button id="gera_doacao" name="gera_doacao" class="btn btn-primary">Gerar doação</button>
						</div>
					</div>
					
				</fieldset>
				
			</div>	
			
			
		</body>
		
	</html>														