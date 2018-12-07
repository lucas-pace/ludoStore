<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ludoStore";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die ("Connection failed: " . $conn->connect_error);
}
if(session_status () ==PHP_SESSION_NONE){
session_start();
}
if(empty($_SESSION['login']))
{
	header('Location:../error.php');
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
		<link rel="icon" type="imagem/png" href="../assets/imagem/agora-logo.png">
		<title >LudoStore</title>

		<script>
			function excluir(id){
			if (confirm("Ao apagar essa categoria TODOS os produtos relacionadas a mesma serão apagados, deseja continuar?"))
				location.href="botao-delete-categoria.php?id="+id;
			else
				alert("Exclusão cancelada");	
			}
		</script>

	</head>
	<body>
		<nav class= "navbar navbar-fixed-top navbar-expand-lg adm navbar-dark">
			<div class="navbar-brand">
				<img src="../../assets/imagem/agora-logo.png" width="100" height="100" alt="Logo LudoStore">
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite" aria-controls="navbarSite" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class ="container">
				<a class="navbar-brand lud" href="tabelaUsuario.php">LudoStore</a>
				<div class = "collapse navbar-collapse" id= "navbarSite">
					<ul class = "navbar-nav mr-auto">
						<li class="nav-item lud"><a class= "nav-link" href="tabelaUsuario.php">Tabela de Usuarios</a></li>
						<li class="nav-item lud"><a class= "nav-link" href="tabela-categoria-ADM.php">Tabela Categoria</a></li>
						<li class="nav-item lud"><a class= "nav-link" href="tabelaproduto.php">Tabela Produto</a></li>
						
					</ul>
					<ul class="navbar-nav ml-auto">
						<li class="nav-item lud"><a class="nav-link" href="logout.php">Logout</a></li>
					</ul>
				</div>
			</div>
		</nav>

		
		</body>
		</html>
