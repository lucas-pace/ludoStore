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
	<?php
	include 'navbar.php'
	?>

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
<?php include 'footer.php';?> 