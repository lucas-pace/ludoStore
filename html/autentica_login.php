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
$senha = md5($_POST['senha']);
$sql = "SELECT * FROM usuario WHERE login = '$login' and senha = '$senha'";
$result=$conn->query($sql);

    if ( $result->fetch_assoc() ) {

        session_start();
        $_SESSION['login']=$_POST['login'];
        $_SESSION['senha']=$_POST['senha'];    
        
        header('Location:admin\tabela-categoria-ADM.php');
    }
    else{      
        
       
        echo ("<script>location.href='error.php';alert('Usuário ou senha não encontrado');</script>");
       
    }
?>
</body>
</html>