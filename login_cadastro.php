<!DOCTYPE html>
<html lang="pt-br">
	<head>
            <?php require_once('bootstrap_rel.php'); ?> 
            <title>Cadastro e login</title>
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