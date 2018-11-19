<?php
		session_start ();
		$server = 'localhost';
		$user = 'root';
		$password = '';
		$db_name = 'ludostore';
		$port = '3306';

		$db_connect = new mysqli($server,$user,$password,$db_name,$port);
		mysqli_set_charset($db_connect,"utf8");

		$id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
		
	if(!empty ($id)){

		$result_produto="DELETE FROM produto WHERE id_produto='$id'";

		$resultado_usuario= mysqli_query($db_connect, $result_produto);

		header ("Location: tabelaproduto.php");
		

	}else{
			header ("Location: tabelaproduto.php");
		}
?>	
	



