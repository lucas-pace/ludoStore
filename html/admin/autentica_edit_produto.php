
<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ludoStore";
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");
if ($conn->connect_error) {
	die ("Connection failed: " . $conn->connect_error);
}

?>

<?php
function get_post_action($name)
{
    $params = func_get_args();

    foreach ($params as $name) {
        if (isset($_POST[$name])) {
            return $name;
        }
    }
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
    $imagem = $_FILES["foto"];
    $id_teste= $_POST['id-prod'];
    echo $selecao_categoria_adm;
    if ( $imagem != NULL){
    $destino = '../fotos/' . $_FILES['foto']['name']; 
    $arquivo_tmp = $_FILES['foto']['tmp_name'];     
    move_uploaded_file( $arquivo_tmp, $destino  );
    }

 if ($id_teste != 'novo' )
        {
            $sql="SELECT * FROM categoria WHERE nome_categoria = '$selecao_categoria_adm' ";
            $result=mysqli_query($conn,$sql);
            $endereco = mysqli_fetch_assoc($result);
            echo $_POST['id_produto'];  
            $id_produto = $_POST['id_produto'];  

            if (empty($_FILES['foto']['name'])) {
                $end=mysqli_query($conn,"UPDATE produto SET id_categoria='$endereco[id_categoria]', nome_produto=' $nome_produto_adm', preco='$preco_produto_adm', descricao='$descricao_produto_adm' WHERE id_produto= ' $id_produto' ") or die(mysqli_error($conn));
                header('location: tabelaproduto.php');
            }

             else{    
            $end=mysqli_query($conn,"UPDATE produto SET id_categoria='$endereco[id_categoria]', nome_produto=' $nome_produto_adm', preco='$preco_produto_adm', descricao='$descricao_produto_adm', url_imagem='$destino' WHERE id_produto= ' $id_produto' ") or die(mysqli_error($conn));
            header('location: tabelaproduto.php'); }
                
        }

else
    {
        
        $sql="SELECT * FROM categoria WHERE nome_categoria = '$selecao_categoria_adm' ";
        $result=mysqli_query($conn,$sql);
        $endereco = mysqli_fetch_assoc($result);                 
        $end=mysqli_query($conn,"INSERT INTO produto(id_categoria, nome_produto, preco, descricao, url_imagem) VALUES ($endereco[id_categoria], '$nome_produto_adm', $preco_produto_adm,'$descricao_produto_adm', '$destino' )") or die(mysqli_error($conn));
         header('location: tabelaproduto.php');
    }
            
?>
  

</body>
</html>
