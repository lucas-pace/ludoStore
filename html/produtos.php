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
                                "<a href=\"produto-individual.php?produto="+ produto['id']+ "\" class=\"btn btn-default botao lud\">Mais</a>"+
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
$('.section').hide().filter('#section1').show()
 
 $(function(){
  
 
 $('tab').click(function(){ 
  
 
 $('.tab').removeClass('active').filter($(this)).addClass('active');
  

 $('.section').hide().filter(this.hash).show();
  
 })
  
 });
 
}
LoadProd();
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
<body onLoad="LoadProd()">
  
<?php 
  include 'navbar.php'?>
  <div class="container">
  <div class=row>
  <div class="produtos-destaques" style ="margin-right: auto;
    margin-left: auto;">
  <br>
  <br>
				<h1>produtos </h1>
			</div>
  </div>
    <div class="row" >     
      
  <script>
  loadProd();
  </script>
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


echo "<a class=\"tab list-group-item list-group-item-action active lud list-group-item-light  active \"
id=\"list-home-list\" data-toggle=\"list\" onClick=\"updateCat(0)\"  
role=\"tab\" aria-controls=\"home\"> Todos </a>
   ";

	
	while ($row = $result->fetch_assoc()) {

    echo "<a class=\" tab list-group-item list-group-item-action lud list-group-item-light \"  
     id=\"list-home-list\" data-toggle=\"list\" onClick=\"updateCat(".$row['id_categoria'].")\" 
     role=\"tab\" aria-controls=\"home\">".$row['nome_categoria']."</a>
        ";}


      ?>
        </div>
    </div>
  
  
    <div class="col-sm-9 tabela">
  
        
            <div class="card-columns" id="produtos" style="min-height:40pc">
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
