<!DOCTYPE html>
<script>


var categoria=0;
var array;
var numitens=9;
var pagina=1;
var currentTreadId;
var k="";
var b=""

function setPage(i){
  pagina=i;
  ShowProd();
}
function ShowProd(){
k="";
b="";
$('#produtos').html('<div class=\"loader\"></div>');
$('#botoes').html('');

 if (!Array.isArray(array) || !array.length) {
  k+=('<tr><td><h4 style="color:#920000; text-align:center;">Produto não encontrado</h4><td><tr>'); 
}else
  {
  
   var cont = array.length;
	if(cont<=numitens){ //Verificando se há mais de uma página
	
    for(var i=0;i<=array.length-1;i++){
      produto=array[i];
      k  +=(' <div class= \"card filter infantil\" style=\"width: 250px;\">'+
                        '<img class=\"card-img-top img-200-200\" src=\" '+produto['url']+'\" alt=\"Card image cap\">'+
                            '<div class=\"card-body\">'+
                                '<h5 class=\"card-title lud\">'+ produto['nome'] +'</h5>'+
                                '<p class=\"card-text\"> R$ '+parseFloat(produto['preco']).toFixed(2)+'</p>'+
                                '<a href=\"produto-individual.php?produto='+ produto['id']+ '\" class=\"btn btn-default botao lud\">Mais</a>'+
                            '</div>'+
                    '</div>');
  
	}}else{
		
		
    
		var qtdpaginas=Math.ceil(cont/numitens); //arredondando divisão fracionada para cima
		for(var i=0;i<=numitens-1;i++){
      var ind=i + numitens*(pagina-1);
      if(ind<array.length){
      
      produto=array[ind];
      console.log(array.length+'--'+ind+'\n');
      k+=('<div class= \"card filter infantil\" style=\"width: 300px;\">'+
                        '<img class=\"card-img-top img-200-200\" src=\" '+produto['url']+'\" alt=\"Card image cap\">'+
                            '<div class=\"card-body\">'+
                                '<h5 class=\"card-title lud\">'+ produto['nome'] +'</h5>'+
                                '<p class=\"card-text\"> R$ '+parseFloat(produto['preco']).toFixed(2)+'</p>'+
                                '<a href=\"produto-individual.php?produto='+ produto['id']+ '\" class=\"btn btn-default botao lud\">Mais</a>'+
                            '</div>'+
                    '</div>');

		}}

    for(var i=1;i<=qtdpaginas;i++)
    {
      b+=('<td><div class= "botaopag" style="display: inline-block"  onclick="setPage('+(i)+')" href="#" >'+ i+'</div></td>');
		
    }
    
   
    
  }
}
clearTimeout(currentTreadId);
currentTreadId=setTimeout(function(){
  $('#botoes').html(b);
  $('#produtos').html('');
  $('#produtos').append(k);


}, 500),b,k;
}
</script>
<script>

function LoadProd() {
  
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
          var string= this.responseText;
          
          array=JSON.parse(string);
          ShowProd();            
          }
      };
  
  try{
  texto=document.getElementById('text_busca').value;}
  catch(ex)
  {
    texto="";

  }
  xmlhttp.open("GET","query.php?cat_nome="+categoria+ "&texto="+texto,true);
  xmlhttp.send();
 
}
function updateCat(cat){
    if (categoria!=cat) 
    {
    pagina=1;
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
      

        <div class="col busc">
          <form class="form-search ">
            <div class="input-append busca-bloco">
              <input type="text" id="text_busca"name="busca" class="search-query" default = "busque" onKeyUp="LoadProd()">
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
<div class="row">
<div class="col-sm-6">
     
     </div>
    
<div class="col-sm-6">
     
     <div id="botoes" class="containerbotoes">
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
