<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default navbar-static-top" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#" id="home_page">Início</a>
				</div>
				
				<div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a href="#projeto" id="link_projeto">O projeto</a>
						</li>
						<li>
							<a href="#midia" id="link_midia">Mídia</a>
						</li>
						<li>
							<a href="#doacao" id="link_doacao">Doação</a>
						</li>
						<li>
							<a href="#doador" id="link_doador">Minhas doações</a>
						</li>
						
					</ul>
                    
                        <!-- #############   CAMPO DE PESQUISA DENTRO DO MENU   #############

                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input class="form-control" type="text">
                            </div> <button type="submit" class="btn btn-default">Pesquisar</button>
                        </form> 
                        
                        #############   CAMPO DE PESQUISA DENTRO DO MENU   #############
                        -->
                    
					<ul class="nav navbar-nav navbar-form navbar-right">
						
                                            <a href="desloga.php"> Sair </a>                     
                            <button type="submit" class="btn btn-default">
                                Bem vindo <?=$_SESSION['nome_usuario'];?>
                            </button>
				        
						
					</ul>
				</div>
				
			</nav>
		</div>
	</div>