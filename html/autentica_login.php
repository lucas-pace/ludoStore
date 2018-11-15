<?php 

$host = "localhost";
$user = "yan";
$pass = "root";
$banco = "ludostore";
$conexao = mysql_connect($host,$user,$pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>

<!DOCTYPE html>
<html>
<head>
  

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
   
</head>
<body>


<?php
$login = $_POST['login'];
$senha = $_POST['senha'];
$sql = mysql_query("SELECT * FROM usuario WHERE LOGIN = '$login' and SENHA = '$senha' ") or die(mysql_error());
$row = mysql_num_rows($sql);

    if ( $row > 0 ) {

        session_start();
        $_SESSION['login']=$_POST['login'];
        $_SESSION['senha']=$_POST['senha'];    
        
        header('Location:admin\tabela-categoria-ADM.php');
    }
    else{      
        
       
        echo ("<script>alert('Usuário ou senha incorretos!'); location.href='index.php';</script>");
       
    }
?>
</body>
</html>