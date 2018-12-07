<?php
	session_start();
	$server = 'localhost';
	$user = 'root';
	$password = '';
	$db_name = 'ludostore';
	$port = '3306';

	$db_connect = new mysqli($server,$user,$password,$db_name,$port);
	mysqli_set_charset($db_connect,"utf8");
	$nome = ($_POST['nome']);
	$id = ($_POST['id']);
	
    
			$result_usuario = "UPDATE categoria SET nome_categoria ='$nome' WHERE id_categoria =$id ";
            echo($result_usuario);
            $resultado_usuario =  $db_connect->query($result_usuario);
		header("Location: tabelacategoriaprodutos-ADM.php?categoria=".$id);
?>
