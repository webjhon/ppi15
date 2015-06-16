<!DOCTYPE html>
<html>
	
	<head>
		<?php require_once('bootstrap_rel.php'); ?>
		<title>Logicando - feito  para evoluir</title>
	</head>
	
	
	<body>
		
		<div class="container">
			
			<!-- Primeira linha do bootstrap -->
			<div class="row clearfix" id="id_doacoes">
				
				<!-- Menu com informações sobre doacao -->
				<div class="col-md-2 column" align="left">
					<div class="btn-group btn-group-md">
<!-- MENU DOAÇÃO USANDO BOTÕES
	
							<div class="btn-group btn-group-vertical">
							<button class="btn btn-default" type="button" name="porque_doar"> <em class="glyphicon glyphicon-heart-empty"></em> Por que doar ?</button>
							<button class="btn btn-default" type="button" name="como_doar"> <em class="glyphicon glyphicon-list-alt"></em> Como doar ?</button>
							<button class="btn btn-default" type="button" name="entidades"> <em class="glyphicon glyphicon-home"></em> Entidades</button>
							<button class="btn btn-default" type="button" name="brindes"> <em class="glyphicon glyphicon-gift"></em> Brindes</button>
						</div>
MENU DOAÇÃO USANDO BOTÕES -->
							
							<!-- MENU DOAÇÃO USANDO LISTA -->
							<ul class="nav nav-list bs-docs-sidenav affix">
								<li class="active">
									<a href="#porque_doar" name="porque_doar">
										<em class="glyphicon glyphicon-heart-empty"></em>
										<i class="icon-chevron-right"></i>
										Por que doar ?
									</a>
								</li>
								<li class="active">
									<a href="#como_doar" name="como_doar">
										<em class="glyphicon glyphicon-list-alt"></em>
										<i class="icon-chevron-right"></i>
										Como doar ?
									</a>
								</li>
								<li class="active">
									<a href="#entidades" name="entidades">
										<em class="glyphicon glyphicon-home"></em>
										<i class="icon-chevron-right"></i>
										Entidades
									</a>
								</li>
								<li class="active">
									<a href="#brindes" name="brindes">
										<em class="glyphicon glyphicon-gift"></em>
										<i class="icon-chevron-right"></i>
										Brindes
									</a>
								</li>
						
					</div>
				</div>
				
				<!-- Textos de informações referentes ao menu -->
				<div class="col-md-6 column" align="left">
					
					<div id="porque_doar">
						<h4>O nosso trabalho funciona</h4>
						<p>Com as atividades realizadas nas escolas no 2º semestre de 2014, percebemos e tivemos com testemunho dos professores, que o rendimento dos alunos melhorou. Principalmente em atividades que envolvem o raciocínio lógico.</p>
						<p>As doações manterão nosso site no ar e proporcionarão a visualização das atividades realizadas no projeto, bem como um futuro repositório de jogos e atividades online.</p>
							<?php include 'botao_doar.php' ?>
					</div>
					
					<div id="entidades">
						<h4>Entidades</h4>
						<p>Escolhemos algumas entidades da nossa cidade para repassar parte das doações realizadas pelo site. Isso amplia a participação social do projeto e beneficia outra frentes que se preocupam com o desenvolvimento das crianças.</p>
						<?php include 'botao_doar.php' ?>
					</div>
					
					<div id="como_doar">
						<h4>Como doar ?</h4>
							<p>Para realizar uma doação é necessário estar cadastrado em nossa base de dados.</p>
							<p>Basta clicar no botão "Faça a sua doação!" para ser direcionado ao formulário de cadastro.</p>
							<p>Após cadastro, efetuar login e seguir os passos no formulário de doação.</p>
							<p>Você poderá optar por alguns valores pré-definidos e ver alguns brindes que o projeto proporciona aos doadores.</p>
						<?php include 'botao_doar.php' ?>
					</div>
					
					<div id="brindes">
						<h4>Brindes</h4>
							<p>Através de uma doação ao projeto você pode receber uma camiseta de colaborador do projeto.</p>
						<?php include 'botao_doar.php' ?>
					</div>
					
				</div>	
				
				
				<!-- Imagens referente a cada texto do menu -->
				
				<div class="col-md-4 column" align="center">

				
					<div class="img" id="porque_doar_midia">
						<img class="img-thumbnail" src="img/doacao.png">
					</div>
					
					<div class="img" id="entidades_midia">
						<img src="img/casa_passagem.jpg" class="img-thumbnail" alt="AVOCAP" width="150" height="150">
						<img src="img/apae.jpg" class="img-thumbnail" alt="APAE" width="150" height="150">
					</div>
					
					<div class="img" id="como_doar_midia">
						<img class="img-thumbnail" src="img/camiseta.png">
					</div>
					
					<div class="img" id="brindes_midia">
						<a href="img/camisetas_branco.png">
							<img class="img-thumbnail" src="img/camisetas_branco.png">
						</a>
					</div>
				</div>
			</div>
			
			
			<!-- Formulário de Doação -->
			
			<form class="form-horizontal" id="formulario_doacao">
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