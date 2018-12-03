<?php include 'navbar.php';?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ludoStore";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die ("Connection failed: " . $conn->connect_error);
}

?>

	<div class="container">

		<div class="row">

			<div class="col-sm-5 slide-index">


				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

					<div class="carousel-inner">

						<?php

$sql = "select * from produto order by produto.preco  asc limit 4;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

	$row = $result->fetch_assoc();
	echo "<div class=\"carousel-item active\">
				    </div>".
			"<div class=\"carousel-item\">
				      <a href=\"produto-individual.php?produto=".$row['id_produto'] ."\"><img class=\"d-block w-100\" src=\"" . $row['url_imagem'] . "\" alt=\"ultimos produtos lançados\"></a>
				    </div>
		
	";
	}

else {
	echo "
	<h5 style:\"text-color:red\">ERROR<h5>
	
	";
}

?>

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
					<p>Alguns jogos de tabuleiro (board games) e de cartas (card games) são milenários, principalmente porque podem
						ser jogados por qualquer um... Seja um casal de namorados, avós com seus filhos e netos ou um grupo de amigos.</p>
					<p>Temos orgulho de oferecer jogos de tabuleiro modernos de alta qualidade ao público brasileiro!</p>
					<p>Aqui você encontra jogos que inserem os jogadores em uma nova realidade, seja o desafio voltado para
						estratégia, para tática ou apenas para um momento de festa. Muito mais do que simplesmente rolar um dado e andar
						algumas casas!</p>
				</div>
			</div>
		</div>

		<div class="row">

			<div class="produtos-destaques">
				<h1>produtos em destaque</h1>
			</div>
		</div>

		<div class="row col-12">
			<?php
$sql = "select * from produto order by produto.preco  asc limit 5;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {


	while ($row = $result->fetch_assoc()) {

		echo (


		"<div style=\"background-image: url('" . $row["url_imagem"] . "')\" class =\"miniatura\">
					<a href=\"produto-individual.php?produto=".$row['id_produto'] ."\">
				<div class= \"blackbox\">	
					<div class=\"blackbox-text\">
						<h1><b>\" " . $row["nome_produto"] . " \"</b></h1>
						<h2>\"" . utf8_encode(substr($row["descricao"], 0, 120)) .'...'. " \"</h2>
					</div>
				</div>
			    </a>
				</div>");


	}
}
else {
	echo "
				<h5 style:\"text-color:red\">ERROR<h5>
				
				";
}


?>
			
		</div>
		<br>
	</div>
<?php include 'footer.php';?> 