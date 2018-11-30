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
$senha = $_POST['senha'];
$sql = mysqli_query("SELECT * FROM usuario WHERE login = '$login' and senha = '$senha' ") or die(mysql_error());
$row = mysqli_num_rows($sql);

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