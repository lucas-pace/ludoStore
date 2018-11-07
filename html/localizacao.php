<!DOCTYPE html>
<html>

<head>
	<!-- Importando CSS do Bootstrap -->
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../assets/css/desgin.css">
	<link rel="icon" type="imagem/png" href="../assets/imagem/agora-logo.png">
	<link rel="stylesheet" href="../assets/css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/css/yan.css">
	<title>LudoStore</title>
</head>

<body>
	<nav class="navbar navbar-fixed-top navbar-expand-lg navbar-default navbar-dark">
		<a class="navbar-brand" href="index.html">
			<img src="../assets/imagem/agora-logo.png" width="100" height="100" alt="Logo LudoStore">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite" aria-controls="navbarSite"
		 aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="container">
			<a class="navbar-brand lud" href="index.html">LudoStore</a>
			<div class="collapse navbar-collapse" id="navbarSite">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item lud"><a class="nav-link" href="index.html">Home</a></li>
					<li class="nav-item dropdown lud"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Produtos</a>
						<div class="dropdown-menu">
							<a class="dropdown-item lud" href="produtos-tabuleiros.html">Tabuleiros</a>
							<a class="dropdown-item lud" href="produtos-cartas.html">Cartas</a>
							<a class="dropdown-item lud" href="produtos-leitura.html">Quadrinhos</a>
							<a class="dropdown-item lud" href="produtos-xadrez.html">Xadrez</a>
						</div>
					</li>
					<li class="nav-item lud"><a class="nav-link" href="quem_somos.html">Quem Somos</a></li>
					<li class="nav-item lud"><a class="nav-link" href="contato.html">Contato</a></li>
					<li class="nav-item lud"><a class="nav-link" href="localizacao.html">Local</a></li>
				</ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item mass lud"><button type="button" class="btn btn-link" data-toggle="modal" data-target="#Login">Login</button></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="modal fade" id="Login" role="dialog">

		<div class="modal-dialog">

			<div class="modal-content">


				<div class="modal-body">
					<form>
						<div class="caixa_login">

							<label class="dad lud">Login</label> <br>
							<img src="../assets/imagem/agora-logo.png">
							<div class="dad2 lud">
								<label>Usuario: </label> <input type="text" title="usuario" placeholder=""><br>
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

	<div class="container">
		<div class="row localizacaoInfoWraper">
			<div class="col-md-8 padding-0">
				<div class="imagemLocalizacaoWraper">
						<img class="imagemLocalizacao"src="../assets/imagem/fachada.jpg" alt="LudoStore">
				</div>
			</div>
			<div class="col-md-4 padding-0">
				<div class="mapLocalizacaoWraper">
					
					<div class="mapLocalizacaoof"><iframe id="gmap_canvas" src="https://maps.google.com/maps?q=juiz%20de%20fora&t=k&z=13&ie=UTF8&iwloc=&output=embed"  height= "100%"
						width= "100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
					</iframe><a href="https://www.embedgooglemap.net">
						</a></div>
					
				</div>
			</div>
		</div>


	</div>
	<footer class="page-footer">

		<div class="row">

			<div class="col">
				<div class="infoLojaWraperFooter">
					<div class="list-unstyled">
						<li>
							<div class="infoLojaFooter">
								<p> Endereço: xxxxxx xxxxxxxxx xxxxxxxxxxx</p>
							</div>
						</li>
						<li>
							<div class="infoLojaFooter">
								<p> Email: xxxxxxxxxxxxxxxxx@xxxx.xxx</p>
							</div>
						</li>
						<li>
							<div class="infoLojaFooter">
								<p> Telefone: (xx)xxxxx-xxxxx</p>
							</div>
						</li>
						<li>
							<div class="iconeMidiaSocialFooterWarper">
								<div class="iconeMidiaSocialFooterWraperIndividual">
									<a href="#" class="fa fa-facebook iconeMidiaSocialFooter"></a>
								</div>
								<div class="iconeMidiaSocialFooterWraperIndividual">
									<a href="#" class="fa fa-instagram iconeMidiaSocialFooter"></a>
								</div>
								<div class="iconeMidiaSocialFooterWraperIndividual">
									<a href="#" class="fa fa-twitter iconeMidiaSocialFooter"></a>
								</div>
								<div class="iconeMidiaSocialFooterWraperIndividual">
									<a href="#" class="fa fa-google-plus-square iconeMidiaSocialFooter"></a>
								</div>
							</div>

						</li>

					</div>



				</div>
			</div>


	</footer>

	<div class="footer-copyright ">
		<i class="footer-copyright-texto">
			Code Empresa Junior
		</i>
	</div>

</body>

<!-- Importando Javascript do Bootstrap -->
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/jQuery-3.2.1.slim.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>

</html>