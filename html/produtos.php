<!DOCTYPE html>
<script>
var categoria=0;
 
function LoadProd() {
  
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      if(this.responseText==""){
      document.getElementById("produtos").innerHTML="";
      document.getElementById("produtos").style.height="100px";
    }
      else{
          var string= this.responseText;
          var array=JSON.parse(string);
          console.log(array);
          document.getElementById("produtos").innerHTML=" ";
          for ( produto of array){
            console.log(produto);
            document.getElementById("produtos").innerHTML+=" <div class= \"card filter infantil\" style=\"width: 20rem;\">"+
                        "<img class=\"card-img-top img-200-200\" src=\" "+produto['url']+"\" alt=\"Card image cap\">"+
                            "<div class=\"card-body\">"+
                                "<h5 class=\"card-title lud\">"+ produto['nome'] +"</h5>"+
                                "<p class=\"card-text\"> R$ "+parseFloat(produto['preco']).toFixed(2)+"</p>"+
                                "<a href=\"produto-individual.html\" class=\"btn btn-default botao lud\">Mais</a>"+
                            "</div>"+
                    "</div>";
              
          }
      }
    }
  };
  texto=document.getElementById("text_busca").value;
  xmlhttp.open("GET","query.php?cat_nome="+categoria+ "&texto="+texto,true);
  xmlhttp.send();
}
function updateCat(cat){
    categoria=cat;
    LoadProd();
}
</script>
<?php
$servername = "localhost";
$username ="root";
$password = "";
$dbname = "ludoStore";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die ("Connection failed: " . $conn->connect_error);
}
?>
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
  
<body>
<?php 
  include 'navbar.php'?>
  <div class="container">
    <div class="row" >     
      

        <div class="col busc">
          <form class="form-search ">
            <div class="input-append busca-bloco">
              <input type="text" id="text_busca"name="busca" class="search-query" onKeyUp="LoadProd()">
              <button type="submit" class="btn btn-sm botao bsc lud"><h6>Buscar</h6></button>
            </div>
          </form></div>

    </div>
  </div>
  <br>
  <div class="row"> 
    <div class="col-sm-2 menu-categ">
      <div class="list-group" id="list-tab" role="tablist">

      <?php
$sql = "select * from categoria ";
$result = $conn->query($sql);


echo "<a class=\"list-group-item list-group-item-action active lud list-group-item-light\"
id=\"list-home-list\" data-toggle=\"list\" onClick=\"updateCat(0)\" 
role=\"tab\" aria-controls=\"home\"> Todos </a>
   ";

	
	while ($row = $result->fetch_assoc()) {

    echo "<a class=\"list-group-item list-group-item-action lud list-group-item-light\"
     id=\"list-home-list\" data-toggle=\"list\" onClick=\"updateCat(".$row['id_categoria'].")\" 
     role=\"tab\" aria-controls=\"home\">".$row['nome_categoria']."</a>
        ";}


      ?>
        <a class="list-group-item list-group-item-action lud list-group-item-light" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Xadrez</a>
      </div>
    </div>
  
  
    <div class="col-sm-9 tabela">
  
<<<<<<< HEAD
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
=======
        <div class="card-columns" id ="produtos">
                
>>>>>>> master
        </div>
                      
        </div>
</div>
<?php 
  include 'footer.php'?>
</body>

<!-- Importando Javascript do Bootstrap -->
<script  src="../assets/js/popper.min.js"></script>
<script  src="../assets/js/jQuery-3.2.1.slim.min.js"></script>
<script  src="../assets/js/bootstrap.min.js"></script>
<script  src="../assets/js/prod.min.js"></script>
</html>