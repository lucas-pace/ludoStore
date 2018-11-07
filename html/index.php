<!DOCTYPE html>
<html>
<head>
	<!-- Importando CSS do Bootstrap -->
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href = "../assets/css/desgin.css">
	<link rel="stylesheet" href = "../assets/css/yan.css">
	<link rel="stylesheet" href="../assets/css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/js/scripts.js">
	<title>LudoStore</title>
</head>

<body>
	<nav class= "navbar navbar-fixed-top navbar-expand-lg navbar-default navbar-dark">
		<a class="navbar-brand" href="index.php">
			<img src="../assets/imagem/agora-logo.png" width="100" height="100" alt="Logo LudoStore">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite" aria-controls="navbarSite" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class ="container">
			<a class="navbar-brand lud" href="index.php">LudoStore</a>
			<div class = "collapse navbar-collapse" id= "navbarSite">
				<ul class = "navbar-nav mr-auto">
					<li class="nav-item lud"><a class= "nav-link" href="index.php">Home</a></li>
					<li class="nav-item dropdown lud"><a class= "nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Produtos</a>
						<div class="dropdown-menu">
							<a class="dropdown-item lud" href="produtos-tabuleiros.php">Tabuleiros</a>
							<a class="dropdown-item lud" href="produtos-cartas.php">Cartas</a>
							<a class="dropdown-item lud" href="produtos-leitura.php">Quadrinhos</a>
							<a class="dropdown-item lud" href="produtos-xadrez.php">Xadrez</a>
						</div>
					</li>
					<li class="nav-item lud"><a class= "nav-link" href="quem_somos.php">Quem Somos</a></li>
					<li class="nav-item lud"><a class= "nav-link" href="contato.php">Contato</a></li>
					<li class="nav-item lud"><a class= "nav-link" href="localizacao.php">Local</a></li>
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
												
												<label class="dad lud">Login</label>  <br>
												<img src="../assets/imagem/agora-logo.png">
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

	<div class="container">

		<div class="row">

			<div class="col-sm-5 slide-index">

				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel"  >
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <a href="produto-individual.php"><img class="d-block w-100" src="../fotoscontent_ajm001_3d-box_400px.png" alt="ultimos produtos lançados"></a>
				    </div>
				    <div class="carousel-item">
				      <a href="produto-individual.php"><img class="d-block w-100" src="../fotoscontent_azu001_3d-box_400px.png" alt="ultimos produtos lançados"></a>
				    </div>
				    <div class="carousel-item">
				      <a href="produto-individual.php"><img class="d-block w-100" src="../fotoscontent_blb001_3d-box_400px.png" alt="ultimos produtos lançados"></a>
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>

			</div>

			<div class="col-1"></div>
				
			<div class="col-sm-6">
				<div class="breve-descricao">

					<img src="../img/logo-texto.jpg" class="img-fluid" alt="logo da LudoStore">
					<p>Alguns jogos de tabuleiro (board games) e de cartas (card games) são milenários, principalmente porque podem ser jogados por qualquer um... Seja um casal de namorados, avós com seus filhos e netos ou um grupo de amigos.</p>
					<p>Temos orgulho de oferecer jogos de tabuleiro modernos de alta qualidade ao público brasileiro!</p>
					<p>Aqui você encontra jogos que inserem os jogadores em uma nova realidade, seja o desafio voltado para estratégia, para tática ou apenas para um momento de festa. Muito mais do que simplesmente rolar um dado e andar algumas casas!</p>
				</div>
			</div>	
		</div>	

		<div class="row">
      
		    <div class="produtos-destaques">
			  <h1>produtos em destaque</h1>
		    </div>
		</div>

		<div class="row col-12">	
			
			<div style="background-image: url('../fotoscontent_ltc_3d-box_400px.jpg')" class ="miniatura">
				<a href="produto-individual.php">
				<div class= "blackbox">	
					<div class="blackbox-text">
						<h1><b>O Senhor dos Anéis: O Confronto</b></h1>
						<h2> Chegou a hora do confronto final entre os povos livres do oeste e o Senhor do Escuro, Sauron, na Terra-média. </h2>
					</div>
				</div>
			    </a>
			</div>

			<div style="background-image: url('../fotoscontent_dow002_3d-box_400px.jpg')" class ="miniatura">
				<a href="produto-individual.php">
				<div class= "blackbox">	
					<div class="blackbox-text">
						<h1><b>Dead of Winter:<br>A Noite Sem Fim</b></h1>
						<h2> A colônia está começando a se tornar um lar. Mas essa alegria vai durar pouco - como todas desde que tudo isso começou. </h2>
					</div>
				</div>
			    </a>
			</div>

			<div style="background-image: url('../fotoscontent_kro101_3d-box_400px.jpg')" class ="miniatura">
				<a href="produto-individual.php">
				<div class= "blackbox">	
					<div class="blackbox-text">
						<h1><b>Krosmaster Arena 2.0</b></h1>
						<h2>Na dimensão paralela do Extramundo, os Demônios das Horas adoram se ausentar do trabalho de observadores do tempo para irem até a Arena.</h2>
					</div>
				</div>
			    </a>
			</div>

			<div style="background-image: url('../fotoscontent_swl001_3d-box_400px.png')" class ="miniatura">
				<a href="produto-individual.php">
				<div class= "blackbox">	
					<div class="blackbox-text">
						<h1>Star Wars Legion</h1>
						<h2>O Império Galático fecha o cerco por toda a galáxia utilizando de um poderio militar impiedoso.</h2>
					</div>
				</div>
			    </a>
			</div>

			<div style="background-image: url('../fotoscontent_blr001_3d-box_400px.png')" class ="miniatura">
				<a href="produto-individual.php">
				<div class= "blackbox">	
					<div class="blackbox-text">
						<h1><b>Blood Rage</b></h1>
						<h2>Irmãos se enfrentarão no final sangrento;
						E os filhos de irmãos trairão seus irmãos.
						A desgraça está no mundo, com muita imoralidade.</h2>
					</div>
				</div>
				</a>
			</div>
		</div> 
		<br> 	
	</div>  

	<footer class="page-footer"> 
	 
	 <div class ="row">
	 <div class ="col-md-2">
	 </div>
	 <div class ="col-md-5">
	  <div class="infoLojaWraperFooter">
	  <div class="list-unstyled">
	  <li>
	  <div class="infoLojaFooter lud">
	    <p> Endereço: xxxxxx xxxxxxxxx xxxxxxxxxxx</p>
	  </div>
	  </li>
	  <li>
	  <div class="infoLojaFooter lud">
	    <p> Email: xxxxxxxxxxxxxxxxx@xxxx.xxx</p>
	  </div>
	  </li>
	  <li>
	  <div class="infoLojaFooter lud">
	    <p> Telefone: (xx)xxxxx-xxxxx</p>
	  </div>
	  </li>
	  <li><div class = "iconeMidiaSocialFooterWarper">
	      <div class= "iconeMidiaSocialFooterWraperIndividual">
	      <a href="#" class="fa fa-facebook iconeMidiaSocialFooter"></a>
	      </div>
	      <div class= "iconeMidiaSocialFooterWraperIndividual">
	      <a href="#" class="fa fa-instagram iconeMidiaSocialFooter"></a>
	      </div>
	      <div class= "iconeMidiaSocialFooterWraperIndividual">
	      <a href="#" class="fa fa-twitter iconeMidiaSocialFooter"></a>
	      </div>
	      <div class= "iconeMidiaSocialFooterWraperIndividual">
	      <a href="#" class="fa fa-google-plus-square iconeMidiaSocialFooter"></a>
	      </div>
	      </div>

	  </li>    
	  
	  </div>
	  

	  
	  </div>
	  </div>
	  <div class="col-md-1">
	  <div class="map-wraper">
	  <div id="map">
	  <script>
	  
	  function initMap() {
	    var uluru = {lat: 40.7143528, lng: -74.0059731};
	    var map = new google.maps.Map(
	    document.getElementById('map'), {zoom: 4, center: uluru});
	    var marker = new google.maps.Marker({position: uluru, map: map});
	  }
	</script>
	  <script async defer
	    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD634e8vHGhmv9HxtQb94zFcBCs8C1TTd8&callback=initMap">
	    </script>
	    </div>
	    </div>
	  </div>
	  <div class="col-md-3">
	</div>
	 
	 <div class= "footer-copyright ">
	  
	 </div>
	 
	 </footer>

</body>

<!-- Importando Javascript do Bootstrap -->
<script  src="../assets/js/popper.min.js"></script>
<script  src="../assets/js/jQuery-3.2.1.slim.min.js"></script>
<script  src="../assets/js/bootstrap.min.js"></script>
</html>