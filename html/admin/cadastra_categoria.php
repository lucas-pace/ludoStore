<?php include 'navbar-ADM.php';?> 
        <div class="container">
            <div class="row">

            <div class="col-sm-7">
                <h1 class="title-produto-individual-adm lud">Cadastrar nova Categoria</h1>

                <form name="Cadastro" action="cadastra_categoria.php" method="POST">
                    <div class="form-group">
                        <label class="lud">Nome:</label>
                        <input type="text" class="form-control inputtext" name="nome_categoria">
                        <br>
                        <input type="submit" class="btn lud" name="submit">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                </form>
            </div>
</div>
</div>
</body>
<!-- Importando Javascript do Bootstrap -->
<script  src="../../assets/js/popper.min.js"></script>
<script  src="../../assets/js/jQuery-3.2.1.slim.min.js"></script>
<script  src="../../assets/js/bootstrap.min.js"></script>
</html>
<?php
    if (isset($_POST["submit"])) {
        $strcon = mysqli_connect('localhost','root','','ludostore') or die('Erro ao conectar ao banco de dados');
        $nome_categoria = $_POST['nome_categoria'];
             $sql = "INSERT INTO categoria (nome_categoria) VALUES ('$nome_categoria')";
            mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar categoria");
            mysqli_close($strcon);
            echo "Categoria cadastrada com sucesso!";
    }

?>
<?php include 'footer-ADM.php';?> 