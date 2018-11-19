
<!DOCTYPE html>
<html>
<head>
  <!-- Importando CSS do Bootstrap -->
  <meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href = "../../assets/css/desgin.css">
    <link rel="stylesheet" href = "../../assets/css/yan.css">
    <link rel="icon" type="imagem/png" href="../../assets/imagem/agora-logo.png">
	<link rel="stylesheet" href="../../assets/css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../assets/js/scripts.js">
  <title> LudoStore - ADM </title>
</head>
<body>
    <h2 class="lud" align="center">Cadastro de Produtos</h2>
    <br>
    <div class="container">
   <div class="row col-sm-10"> 
        <form name="Cadastro" action="cadastra_produto.php" method="POST">
            <label class="lud">Identificação da Categoria </label>
            <br>
            <input type="text" name="id_categoria" size="10">
            <br>
            <br>
            <label class="lud">Nome do Produto </label>
            <br>
            <input type="text" name="nome_produto" size="50">
            <br> 
            <br>
            <label class="lud">Preço </label>
            <br>
            <input type="text" name="preco" size="20">
            <br> 
            <br>
            <label class="lud">Descricao do produto </label>
            <br>
            <textarea type="text" name="descricao" rows="4" cols="50"></textarea>
            <br>
            <br>
            <label class="lud">URL da imagem </label>
            <br>
            <input type="text" name="url_imagem" size="50">
            <br>  
            <br>   
            <input type="submit" name="submit" value="Cadastrar">
        </form>
    </div>
</div>
</body>
</html>
<?php
    if (isset($_POST["submit"])) {
        echo "fala";
        $id_categoria = $_POST['id_categoria'];
        $nome_produto = $_POST['nome_produto'];
        $preco = $_POST['preco'];
        $descricao = $_POST['descricao'];
        $url_imagem = $_POST['url_imagem'];
        /*$arquivo 	= $_FILES['arquivo']['name'];
        move_uploaded_file($_FILES['arquivo']['name']);*/
        $strcon = mysqli_connect('localhost','root','','ludostore') or die('Erro ao conectar ao banco de dados');
        $sql = "INSERT INTO produto (id_categoria, nome_produto, preco, descricao, url_imagem) VALUES ('$id_categoria', '$nome_produto', '$preco', '$descricao', '$url_imagem')"; 
        mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
        mysqli_close($strcon);
        echo "Produto cadastrado com sucesso!";
        }
?>
