<?php
session_start();

if (empty($_SESSION['login'])) {
    return header('location: ../error.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<!-- Importando CSS do Bootstrap -->
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href = "../../assets/css/desgin.css">
	<link rel="stylesheet" href = "../../assets/css/yan.css">
	<link rel="stylesheet" href="../../assets/css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../assets/js/scripts.js">
	<link href="../../assets/css/footer-ADM-styles.css" rel="stylesheet">
	<title >LudoStore</title>
</head>
<body>
	<nav class= "navbar navbar-fixed-top navbar-expand-lg adm navbar-dark">
		<a class="navbar-brand" href="tabelaUsuario.php">
			<img src="../../assets/imagem/agora-logo.png" width="100" height="100" alt="Logo LudoStore">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite" aria-controls="navbarSite" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class ="container">
			<a class="navbar-brand lud" href="tabelaUsuario.php">LudoStore</a>
			<div class = "collapse navbar-collapse" id= "navbarSite">
				<ul class = "navbar-nav mr-auto">
					<li class="nav-item lud"><a class= "nav-link" href="tabela-categoria-ADM.php">Tabela Categoria</a></li>
					<li class="nav-item lud"><a class= "nav-link" href="tabelaproduto.php">Tabela Produto</a></li>
					<li class="nav-item lud"><a class= "nav-link" href="tabelacategoriaindividual.php">Categoria Individual</a></li>
					<li class="nav-item lud"><a class= "nav-link" href="prod-individual-ADM.php">Produto Individual</a></li>
				</ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item mass lud"><a href="logout.php?token='.md5(session_id()).'"><button type="button" class="btn btn-link" data-toggle="modal" data-target="#Login">Logout</button></a></li>
				</ul>
			</div>
		</div>
	</nav>

	
