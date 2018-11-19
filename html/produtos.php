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
		<a class="navbar-brand" href="index.html">
			<img src="../assets/imagem/agora-logo.png" width="100" height="100" alt="Logo LudoStore">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite" aria-controls="navbarSite" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class ="container">
			<a class="navbar-brand lud" href="index.html">LudoStore</a>
			<div class = "collapse navbar-collapse" id= "navbarSite">
				<ul class = "navbar-nav mr-auto">
          <li class="nav-item lud"><a class= "nav-link" href="index.html">Home</a></li>
          <li class="nav-item lud"><a class= "nav-link" href="produtos-todos.html">Produtos</a></li>
					<li class="nav-item lud"><a class= "nav-link" href="quem_somos.html">Quem Somos</a></li>
					<li class="nav-item lud"><a class= "nav-link" href="contato.html">Contato</a></li>
					<li class="nav-item lud"><a class= "nav-link" href="localizacao.html">Local</a></li>
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
    <h1 class="titulo">Todos os Produtos</h1>
  </div>
  <div class="container">
    <div class="row" >     
      

        <div class="col busc">
          <form class="form-search ">
            <div class="input-append busca-bloco">
              <input type="text" name="busca" class="search-query " >
              <button type="submit" class="btn btn-sm botao bsc lud"><h6>Buscar</h6></button>
            </div>
          </form></div>

    </div>
  </div>
  <br>
  <div class="row"> 
    <div class="col-sm-2 menu-categ">
      <div class="list-group" id="list-tab" role="tablist">
        <a class="list-group-item list-group-item-action active lud list-group-item-light" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Todos</a>
        <a class="list-group-item list-group-item-action lud list-group-item-light" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Quadrinhos</a>
        <a class="list-group-item list-group-item-action lud list-group-item-light" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Tabuleiros</a>
        <a class="list-group-item list-group-item-action lud list-group-item-light" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Cartas</a>
        <a class="list-group-item list-group-item-action lud list-group-item-light" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Xadrez</a>
      </div>
    </div>
  
  
    <div class="col-sm-9 tabela">
  
        <div class="card-columns">
                <div class="card filter infantil cartao">
                        <img class="card-img-top img-200-200" src="../fotos/game_of_life.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title lud">Game of Life</h5>
                                <p class="card-text">R$20,00</p>
                                <a href="produto-individual.html" class="btn btn-default botao lud">Mais</a>
                            </div>
                    </div>
                <div class="card filter infantil cartao" >
                        <img class="card-img-top img-200-200" src="../fotos/play_to_learn.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title lud">Play to Learn - Roupas</h5>
                                <p class="card-text">R$20,00</p>
                                <a href="produto-individual.html" class="btn btn-default botao lud">Mais</a>
                            </div>
                </div>
                <div class="card filter infantil cartao" >
                        <img class="card-img-top img-200-200" src="../fotos/content_blr001_3d-box_400px.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title lud">Uno</h5>
                                <p class="card-text">R$20,00</p>
                                <a href="produto-individual.html" class="btn btn-default botao lud">Mais</a>
                            </div>
                </div>
                <div class="card filter adulto cartao">
                        <img class="card-img-top img-200-200" src="../fotos/jogo_da_aposta.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title lud">Jogo da Aposta</h5>
                                <p class="card-text">R$20,00</p>
                                <a href="produto-individual.html" class="btn btn-default botao lud">Mais</a>
                            </div>
                </div>
                <div class="card filter adulto cartao">
                        <img class="card-img-top img-200-200" src="../fotos/content_blk103_3d-box_400px.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title lud">Black Stories</h5>
                                <p class="card-text">R$20,00</p>
                                <a href="produto-individual.html" class="btn btn-default botao lud">Mais</a>
                            </div>
                </div>
                <div class="card filter adulto cartao"  >
                        <img class="card-img-top img-200-200" src="../fotos/Star-Realms.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title lud">Star Realms</h5>
                                <p class="card-text">R$20,00</p>
                                <a href="produto-individual.html" class="btn btn-default botao lud">Mais</a>
                            </div>
                </div>
                <div class="card filter infantil cartao"  >
                  <img class="card-img-top img-200-200" src="../fotos/adventure_time.jpg" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title lud">Adventure Time</h5>
                          <p class="card-text">R$20,00</p>
                          <a href="produto-individual.html" class="btn btn-default botao lud">Mais</a>
                      </div>
              </div>
          <div class="card filter infantil cartao"  >
                  <img class="card-img-top img-200-200" src="../fotos/menino.jpg" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title lud">Menino Maluquinho</h5>
                          <p class="card-text">R$20,00</p>
                          <a href="produto-individual.html" class="btn btn-default botao lud">Mais</a>
                      </div>
          </div>
          <div class="card filter infantil cartao"  >
                  <img class="card-img-top img-200-200" src="../fotos/monica.jpg" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title lud">Turma da Monica</h5>
                          <p class="card-text">R$20,00</p>
                          <a href="produto-individual.html" class="btn btn-default botao lud">Mais</a>
                      </div>
          </div>
          <div class="card filter adulto cartao"  >
                  <img class="card-img-top img-200-200" src="../fotos/harley.jpg" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title lud">Harley Quinn</h5>
                          <p class="card-text">R$20,00</p>
                          <a href="produto-individual.html" class="btn btn-default botao lud">Mais</a>
                      </div>
          </div>
          <div class="card filter adulto cartao"  >
                  <img class="card-img-top img-200-200" src="../fotos/deapool_spiderman.jpg" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title lud">Deadpool and Spider Man</h5>
                          <p class="card-text">R$20,00</p>
                          <a href="produto-individual.html" class="btn btn-default botao lud">Mais</a>
                      </div>
          </div>
          <div class="card filter adulto cartao"  >
                  <img class="card-img-top img-200-200" src="../fotos/espetacular_spiderman.jpg" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title lud">Espetacular Homem Aranha</h5>
                          <p class="card-text">R$20,00</p>
                          <a href="produto-individual.html" class="btn btn-default botao lud">Mais</a>
                      </div>
          </div>
          <div class="card filter infantil cartao"  >
            <img class="card-img-top img-200-200" src="../fotos/content_kro101_3d-box_400px.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title lud">Arena</h5>
                    <p class="card-text">R$20,00</p>
                    <a href="produto-individual.html" class="btn btn-default botao lud">Mais</a>
                </div>
        </div>
    <div class="card filter infantil"  >
            <img class="card-img-top img-200-200" src="../fotos/content_ajm001_3d-box_400px.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title lud">Jelly Monster</h5>
                    <p class="card-text">R$20,00</p>
                    <a href="produto-individual.html" class="btn btn-default botao lud">Mais</a>
                </div>
    </div>
    <div class="card filter infantil"  >
            <img class="card-img-top img-200-200" src="../fotos/content_tak001_3d-box_400px.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title lud">Takenoko</h5>
                    <p class="card-text">R$20,00</p>
                    <a href="produto-individual.html" class="btn btn-default botao lud">Mais</a>
                </div>
    </div>
    <div class="card filter adulto"  >
            <img class="card-img-top img-200-200" src="../fotos/content_ltc_3d-box_400px.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title lud">Senhor dos Anéis</h5>
                    <p class="card-text">R$20,00</p>
                    <a href="produto-individual.html" class="btn btn-default botao lud">Mais</a>
                </div>
    </div>
    <div class="card filter adulto"  >
            <img class="card-img-top img-200-200" src="../fotos/content_swl001_3d-box_400px.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title lud">Star Wars</h5>
                    <p class="card-text">R$20,00</p>
                    <a href="produto-individual.html" class="btn btn-default botao lud">Mais</a>
                </div>
    </div>
    <div class="card filter adulto"  >
            <img class="card-img-top img-200-200" src="../fotos/content_blb001_3d-box_400px.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title lud">Bloodborne</h5>
                    <p class="card-text">R$20,00</p>
                    <a href="produto-individual.html" class="btn btn-default botao lud">Mais</a>
                </div>
    </div>
    <div class="card filter infantil"  >
      <img class="card-img-top img-200-200" src="../fotos/bichos.jpg" alt="Card image cap">
          <div class="card-body">
              <h5 class="card-title lud">Bichos</h5>
              <p class="card-text">R$20,00</p>
              <a href="produto-individual.html" class="btn btn-default botao lud">Mais</a>
          </div>
  </div>
  <div class="card filter infantil"  >
      <img class="card-img-top img-200-200" src="../fotos/mario.jpg" alt="Card image cap">
          <div class="card-body">
              <h5 class="card-title lud">Mario Bros</h5>
              <p class="card-text">R$20,00</p>
              <a href="produto-individual.html" class="btn btn-default botao lud">Mais</a>
          </div>
  </div>
  <div class="card filter infantil"  >
      <img class="card-img-top img-200-200" src="../fotos/moveis.jpg" alt="Card image cap">
          <div class="card-body">
              <h5 class="card-title lud">Mini Moveis</h5>
              <p class="card-text">R$20,00</p>
              <a href="produto-individual.html" class="btn btn-default botao lud">Mais</a>
          </div>
  </div>
  <div class="card filter adulto"  >
      <img class="card-img-top img-200-200" src="../fotos/guerra civil.jpg" alt="Card image cap">
          <div class="card-body">
              <h5 class="card-title lud">Guerra Civil Americana</h5>
              <p class="card-text">R$20,00</p>
              <a href="produto-individual.html" class="btn btn-default botao lud">Mais</a>
          </div>
  </div>
  <div class="card filter adulto"  >
      <img class="card-img-top img-200-200" src="../fotos/harry.jpg" alt="Card image cap">
          <div class="card-body">
              <h5 class="card-title lud">Harry Potter</h5>
              <p class="card-text">R$20,00</p>
              <a href="produto-individual.html" class="btn btn-default botao lud">Mais</a>
          </div>
  </div>
  <div class="card filter adulto"  >
      <img class="card-img-top img-200-200" src="../fotos/aneis.jpg" alt="Card image cap">
          <div class="card-body">
              <h5 class="card-title lud">Lord of the Rings</h5>
              <p class="card-text">R$20,00</p>
              <a href="produto-individual.html" class="btn btn-default botao lud">Mais</a>
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