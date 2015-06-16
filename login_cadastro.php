<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Cadastro e login</title>
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
		
		
		<div id="form_login">
                    <form class="form-horizontal" method="POST" action="validarLogin.php">
                 <fieldset>
					
					<!-- Form Name -->
					<legend>Já tem cadastro ?</legend>
					
					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="cad_login">Login</label>  
						<div class="col-md-5">
							<input id="cad_login" name="cad_login" placeholder="nome de login" class="form-control input-md" required="" type="text">
							<span class="help-block">Insira seu login</span>  
						</div>
					</div>
					
					<!-- Password input-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="cad_passwd">Insira uma senha</label>
						<div class="col-md-5">
							<input id="cad_passwd" name="cad_passwd" placeholder="Senha" class="form-control input-md" required="" type="password">
							<span class="help-block">Informe sua senha (8 caracteres)</span>
						</div>
					</div>
					
					<!-- Button Entrar-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="login_envia"></label>
						<div class="col-md-4">
							<button id="login_envia" name="login_envia" class="btn btn-primary">Entrar</button>
							<a id="botao_cadastro" class="btn btn-primary">Não possuo cadastro</a>
							
						</div>
					</div>
					
					
				</fieldset>
			</form>
			
		</div>
            
           
		
	</body>
</html>						