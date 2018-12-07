<?php
	session_start();
	$server = 'localhost';
	$user = 'root';
	$password = '';
	$db_name = 'ludostore';
	$port = '3306';

	$db_connect = new mysqli($server,$user,$password,$db_name,$port);
	mysqli_set_charset($db_connect,"utf8");

	$nome = $_POST['nome']);
    		
	
	header("Location: tabelaCategoriaProdutos.php");

?>