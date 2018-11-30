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
    
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    
</head>
<body>


<?php

    $nome_produto_adm= $_POST['nome-produto-adm'];
    $selecao_categoria_adm= $_POST['selecao-categoria-adm'];
    $preco_produto_adm= $_POST['preco-produto-adm'];
    $descricao_produto_adm= $_POST['descricao-produto-adm'];   
    $id_produto = $_POST['id_produto'];      
    $end=mysqli_query($conn,"UPDATE produto SET nome_produto=' $nome_produto_adm', preco='$preco_produto_adm', descricao='$descricao_produto_adm' WHERE id_produto= ' $id_produto' ") or die(mysqli_error($conn));
         
?>
   <pre><?php print_r($_POST); ?></pre><br><br>
   <pre><?php print_r($_GET); ?></pre>   

</body>
</html>