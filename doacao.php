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
			<div class="row clearfix">
				<div class="col-md-12 column" align="center">
					<h2>
						DOAÇÃO
					</h2>
					
					<div class="row">
						<div class="col-md-6 column" align="center">
							<div class="img">
								<img class="tamanho" src="img/camiseta_branco_frente.png">
							</div>
						</div>
						
						<div class="col-md-6 column" align="center">
							<div class="img">
								<img class="tamanho" src="img/camiseta_branco_costas.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			<!-- Formulário de Doação -->
			
			<form class="form-horizontal">
				<fieldset>
					
					<!-- Form Name -->
					<legend>Formulário de doação</legend>
					
					<!-- Select Basic -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="select_entidade">Selecione a entidade beneficiada</label>
						<div class="col-md-6">
							<select id="select_entidade" name="select_entidade" class="form-control">
								<option value="1">Avocap</option>
								<option value="2">APAE</option>
							</select>
						</div>
					</div>
					
					<!-- Select Basic -->
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
					
					
					<!-- Multiple Radios -->
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
					
					<!-- Button -->
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