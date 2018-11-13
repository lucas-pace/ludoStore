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

		$apaga_todos_produtos_da_categoria="DELETE FROM  produto WHERE id_categoria='$id'";
		$resultado_usuario_delete_prod = mysqli_query($db_connect, $apaga_todos_produtos_da_categoria);

		$result_categoria="DELETE FROM categoria  WHERE id_categoria='$id'";
		$resultado_usuario_categoria = mysqli_query($db_connect, $result_categoria);

		header ("Location: tabela-categoria-ADM.php");
		

	}else{
			header ("Location: tabela-categoria-ADM.php");
		}
?>	

 