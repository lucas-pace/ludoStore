<?php
	session_start();
	$server = 'localhost';
	$user = 'root';
	$password = '';
	$db_name = 'ludostore';
	$port = '3306';

	$db_connect = new mysqli($server,$user,$password,$db_name,$port);
	mysqli_set_charset($db_connect,"utf8");

	$id_usuario = filter_input(INPUT_POST, 'cod_usuario', FILTER_SANITIZE_NUMBER_INT);
	$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_EMAIL);
	$senha = md5($_POST['senha']);

	$vereficaduplicacao = "SELECT * FROM usuario WHERE login ='$login' AND id_usuario !='$id_usuario'";
    $result = mysqli_query($db_connect, $vereficaduplicacao);

     if(mysqli_num_rows($result) > 0 ){   
           $_SESSION['msg'] = "<p style='color:red;'>Usuário já existente!</p>";
           header("Location: adiciona-usuario.php");
	}		

	else { 
			$result_usuario = "UPDATE usuario SET login='$login', senha='$senha' WHERE id_usuario='$id_usuario'";
		    $resultado_usuario = mysqli_query($db_connect, $result_usuario);

		if(mysqli_insert_id($db_connect)){
			header("Location: tabelaUsuario.php");

		}else{
			print"<script>alert('Erro ao cadastrar usuário!')</script>";
			header("Location: tabelaUsuario.php");}}
?>