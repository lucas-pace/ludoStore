<!DOCTYPE html>
<html>
<head>
	<!-- Importando CSS do Bootstrap -->
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href = "../assets/css/produtos.css">
  <link rel="stylesheet" href = "../assets/css/desgin.css">
	<link rel="stylesheet" href = "../assets/css/yan.css">
  <link rel="stylesheet" href="../assets/css/styles.css">
  <link rel="icon" type="imagem/png" href="../assets/imagem/agora-logo.png">
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/js/scripts.js">
	<link href="https://fonts.googleapis.com/css?family=Belleza|MedievalSharp" rel="stylesheet">
	<title class="lud">LudoStore</title>
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
  <br>
  <div class="galeria">
    <h1 class="titulo">Jogos de Cartas</h1>
  </div>
  <div class="container">
    <div class="row" >     
      

        <div class="col busc">
          <form class="form-search ">
            <div class="input-append busca-bloco">
              <input type="text" name="busca" class="search-query " >
              <button type="submit" class="btn btn-sm botao bsc "><h6>Buscar</h6></button>
            </div>
          </form></div>

    </div>
  </div>
  <div align="center">
      <button class="btn btn-default botao" data-filter="todos">Todos</button>
      <button class="btn btn-default botao" data-filter="infantil">Infantil</button>
      <button class="btn btn-default botao" data-filter="adulto">Adulto</button>
  </div> 
  <br>
<div class="container"> 
  <div class="row mb-5">
        <div class="card-columns">
                <div class="card filter infantil" style="width: 20rem;">
                        <img class="card-img-top img-200-200" src="../fotosgame_of_life.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title lud">Game of Life</h5>
                                <p class="card-text">R$20,00</p>
                                <a href="produto-individual.php" class="btn btn-default botao">Mais</a>
                            </div>
                    </div>
                <div class="card filter infantil" style="width: 20rem;">
                        <img class="card-img-top img-200-200" src="../fotosplay_to_learn.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title lud">Play to Learn - Roupas</h5>
                                <p class="card-text">R$20,00</p>
                                <a href="produto-individual.php" class="btn btn-default botao">Mais</a>
                            </div>
                </div>
                <div class="card filter infantil" style="width: 20rem;">
                        <img class="card-img-top img-200-200" src="../fotosuno.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title lud">Uno</h5>
                                <p class="card-text">R$20,00</p>
                                <a href="produto-individual.php" class="btn btn-default botao">Mais</a>
                            </div>
                </div>
                <div class="card filter adulto" style="width: 20rem;">
                        <img class="card-img-top img-200-200" src="../fotosjogo_da_aposta.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title lud">Jogo da Aposta</h5>
                                <p class="card-text">R$20,00</p>
                                <a href="produto-individual.php" class="btn btn-default botao">Mais</a>
                            </div>
                </div>
                <div class="card filter adulto" style="width: 20rem;">
                        <img class="card-img-top img-200-200" src="../fotoscontent_blk103_3d-box_400px.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title lud">Black Stories</h5>
                                <p class="card-text">R$20,00</p>
                                <a href="produto-individual.php" class="btn btn-default botao">Mais</a>
                            </div>
                </div>
                <div class="card filter adulto" style="width: 20rem;">
                        <img class="card-img-top img-200-200" src="../fotosStar-Realms.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title lud">Star Realms</h5>
                                <p class="card-text">R$20,00</p>
                                <a href="produto-individual.php" class="btn btn-default botao">Mais</a>
                            </div>
                </div>
            </div>
                      
        </div>
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

<!-- Importando Javascript do Bootstrap -->
<script  src="../assets/js/popper.min.js"></script>
<script  src="../assets/js/jQuery-3.2.1.slim.min.js"></script>
<script  src="../assets/js/bootstrap.min.js"></script>
<script  src="../assets/js/prod.min.js"></script>
</html>