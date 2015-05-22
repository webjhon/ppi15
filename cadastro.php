<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<title>Cadastro</title>
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
		
		
		
		<div id="form_cadastro">
			<form class="form-horizontal" method="POST">
				<fieldset>
					
					<!-- Nome do formulário -->
					<legend>Faça o seu cadastro abaixo</legend>
					
					<!-- Nome completo do cadastrado-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="cad_nome">Nome completo</label>  
						<div class="col-md-5">
							<input id="cad_nome" name="cad_nome" placeholder="Ex: Fulano de Tal" class="form-control input-md" required="" type="text">
							<span class="help-block">Insira o seu nome completo</span>  
						</div>
					</div>
					
					<!-- Email do cadastrado-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="cad_email">Insira seu email</label>  
						<div class="col-md-5">
							<input id="cad_email" name="cad_email" placeholder="endereço de email" class="form-control input-md" required="" type="text">
							<span class="help-block">Insira um endereço de email</span>  
						</div>
					</div>
					
					<!-- Login do cadastrado-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="cad_login">Login</label>  
						<div class="col-md-5">
							<input id="cad_login" name="cad_login" placeholder="nome de login" class="form-control input-md" required="" type="text">
							<span class="help-block">Insira um nome de usuário</span>  
						</div>
					</div>
					
					<!-- Cadastro senha de acesso-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="cad_passwd">Insira uma senha</label>
						<div class="col-md-5">
							<input id="cad_passwd" name="cad_passwd" placeholder="insira um senha" class="form-control input-md" required="" type="password">
							<span class="help-block">Informe uma senha (8 caracteres)</span>
						</div>
					</div>
					
					<!-- Confirmação do cadastro da senha de acesso-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="cad_passwd2">Repita a senha</label>
						<div class="col-md-5">
							<input id="cad_passwd2" name="cad_passwd2" placeholder="repita sua senha" class="form-control input-md" required="" type="password">
							<span class="help-block">Repita a senha</span>
						</div>
					</div>
					
					<!-- Seleção de tipo -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="cad_tipo">Você é</label>
						<div class="col-md-5">
							<select id="cad_tipo" name="cad_tipo" class="form-control">
								<option value="0">Selecione...</option>
								<option value="prof">Professor</option>
								<option value="al">Aluno</option>
							</select>
						</div>
					</div>
					
					<!-- Botões -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="cad_envia"></label>
						<div class="col-md-4">
                                                    <button id="cad_envia" name="cad_envia" class="btn btn-primary" type="submit">Cadastrar</button>
                                                        <a id="botao_login" class="btn btn-primary">Já tenho login</a>
							
						</div>
						
					</div>
					
				</fieldset>
			</form>
            	</div>
        <?php
            require_once('./GravarDados.php');
        ?>
	</body>
</html>
