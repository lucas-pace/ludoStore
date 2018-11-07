<!DOCTYPE html>
<html>
<head>
	<!-- Importando CSS do Bootstrap -->
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="/../assets/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href = "/../assets/css/desgin.css">
	<link rel="stylesheet" href = "/../assets/css/yan.css">
	<link rel="stylesheet" href="/../assets/css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/../assets/js/scripts.js">
	<title >LudoStore</title>
</head>
<body>
	<nav class= "navbar navbar-fixed-top navbar-expand-lg adm navbar-dark">
		<a class="navbar-brand" href="index.html">
			<img src="/../assets/imagem/agora-logo.png" width="100" height="100" alt="Logo LudoStore">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite" aria-controls="navbarSite" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class ="container">
			<a class="navbar-brand lud" href="index.html">LudoStore</a>
			<div class = "collapse navbar-collapse" id= "navbarSite">
				<ul class = "navbar-nav mr-auto">
					<li class="nav-item lud"><a class= "nav-link" href="tabela-categoria-ADM.html">Tabela Categoria</a></li>
					<li class="nav-item lud"><a class= "nav-link" href="tabelaproduto.html">Tabela Produto</a></li>
					<li class="nav-item lud"><a class= "nav-link" href="tabelacategoriaindividual.html">Categoria Individual</a></li>
					<li class="nav-item lud"><a class= "nav-link" href="prod-individual-ADM.html">Produto Individual</a></li>
				</ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item mass lud"><button type="button" class="btn btn-link" data-toggle="modal" data-target="#Login">Login</button></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="modal fade" id="Logout" role="dialog">

			<div class="modal-dialog">

					<div class="modal-content">
				

							<div class="modal-body">
									<form>
											<div class="caixa_login">  
												
												<label class="dad lud">Logout</label>  <br>
												<img src="/../assets/imagem/agora-logo.png">
												<div class="dad2 lud">
												<label >Usuario: </label>	<input type="text" title="usuario" placeholder=""><br>    
												<div class="dad3 lud"><label>Senha: </label><input type="password" title="senha" placeholder="">
												
												<br><br></div>
												</div>
												<div class="modal_button">
												<button type="button" class="btn btn-link lud" data-dismiss="modal">Voltar</button> 
												<button type="button" class="btn btn-link lud" value="entrar">Entrar</button> 
		
												 
											</div> 
																																		
											</div>    
							
											</form> 
		
							</div>					
		
						</div>
			</div>
		</div>
</body>
</html>