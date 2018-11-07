<!DOCTYPE html>
<html>

<head>


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/styles.css">
	<link rel="stylesheet" href="../assets/css/login_styles.css">
	<link rel="stylesheet" href = "../assets/css/yan.css">
	<link rel="stylesheet" href="../assets/js/scripts.js">
	<link rel="icon" type="imagem/png" href="../assets/imagem/agora-logo.png">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href = "../assets/css/desgin.css">
	
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	

	<link href="../assets/fontes/Belleza-Regular" rel="stylesheet">
	<link href="../assets/fontes/dragonslapper" rel="stylesheet">
	<title>Quem somos</title>
	<link rel="stylesheet" href="../assets/css/quem_somos_styles.css">



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
		<div class="row row1">
			<div class="col col1">
				<h1>Quem Somos</h1>
				<hr>
			</div>
		</div>
		
		
		<div class="row row2">		
			<div class="col-8 col2">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vehicula elit vehicula tortor aliquet laoreet. In
					eleifend tincidunt auctor. Donec in ante erat. Etiam ut libero ut ipsum convallis feugiat. Donec ullamcorper
					iaculis purus. Donec consectetur pellentesque lorem ac bibendum.</p>			
			</div>
			<div class="col-4 col2">
				<img src="../img/luderia4.jpg">
			</div>
			
			</div>
			
			<div class="row row1">
			<div class="col col1">
				<h1>Valores</h1>
				<hr>
			</div>
			</div>

			<div class="row row3">			
				<div class="col-4 col4 k"><img src="../img/luderia2.jpg"></div>
				<div class="col-8 col4">
					<p>Vestibulum ligula lorem, ullamcorper ac tellus ac, mollis bibendum mi. Proin dignissim augue sed lacus placerat,
						sit amet laoreet augue pellentesque. Integer vitae dignissim justo, consectetur auctor mi. Donec auctor enim quis
						fermentum tempus. </p>				
				</div>						
			</div>

			<div class="row row1">
				<div class="col col1">
					<h1>Visão</h1>
					<hr>
				</div>
			</div>

			<div class="row row3">			
					
					<div class="col-8 col2">
						<p>Duis tempus sem ac sem interdum suscipit. Nam ultricies metus sed euismod blandit. Etiam orci odio, condimentum
								nec risus non, tincidunt efficitur diam. Nullam sodales dictum enim at cursus. Duis tempus placerat leo, id maximus
								arcu posuere vel. Quisque mollis, leo nec blandit commodo, ante velit vulputate ipsum, in placerat tortor libero eu
								elit. Etiam eleifend iaculis dolor, id efficitur eros sagittis sed. Pellentesque at elit ipsum. Integer fringilla
								nunc in auctor facilisis. </p>				
					</div>	
					<div class="col-4 col2"><img src="../img/luderia3.jpg"></div>					
				</div>
			
			</div>

			<footer class="page-footer"> 
	 
					<div class ="row">
					<div class ="col-md-2">
					</div>
					<div class ="col-md-5">
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
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/jQuery-3.2.1.slim.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>

</html>