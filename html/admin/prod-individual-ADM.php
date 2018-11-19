<?php include 'navbar-ADM.php';?> 

  <div class="container">
    <div class="row">

<<<<<<< HEAD
=======
      <div class="col-sm-5 imagem-produto-individual-adm">
        <img src="../../fotos/imagem-aleatoria.png" class="img-fluid" alt="imagem do jogo">
        <div class="botao-produto-individual-adm botao-editar-imagem-prodADM">
          <button type="button" class="btn btn-outline-danger ">Editar Imagem</button>
        </div>  
      </div> 

>>>>>>> master
      <div class="col-sm-7">
        <h1 class="title-produto-individual-adm lud">Dados do Produto</h1>

        <form name="Cadastro" action="prod-individual-ADM.php" method="POST">
        <form method="POST" enctype="multipart/form-data" action="prod-individual-ADM.php">

           <div class="form-group">
            <label class="lud">Nome:</label>
            <input type="text" class="form-control inputtext" name="nome_produto">
            
          </div>
          <div class="form-row">  
            <div class="form-group col-md-7">
              <label class="lud">Categoria:</label>
              <select class="form-control" id="categoria" name="categoria">
              <option disabled selected>---</option>
              <?php
                  $strcon = mysqli_connect('localhost','root','','ludostore') or die('Erro ao conectar ao banco de dados');
                  $query = "SELECT * FROM categoria";
                  $resultado = mysqli_query($strcon, $query);
                  while($prod = mysqli_fetch_assoc($resultado)) { ?>
                    <option value= "<?php echo $prod['id_categoria'];?>"><?php echo $prod['nome_categoria']; ?>  
                  </option>
              <?php } ?>
              </select> 
            </div>
            <div class="col-md-1"></div>

            <div class="form-group col-md-4">
              <label class="lud">Preço:</label>
              <input type="text" class="form-control inputtext" name="preco">
            </div>
          </div>  

          <div class="form-group">
            <label class="lud">Descrição:</label>
             <textarea class="form-control" name="descricao" rows="9"></textarea>
          </div>
          <div class="col-sm-5 imagem-produto-individual-adm">
        <div class="botao-produto-individual-adm botao-editar-imagem-prodADM">
               <input  type="file"  required name="url_imagem" />
               <input type="submit" value="submit">
              <br />
        </form>
        </div>  
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
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if( !(isSet($_POST['nome_produto'])) ||  !(isSet($_POST['categoria'])) || !(isSet($_POST['preco'])) || !(isSet($_POST['descricao'])) ){
            
              echo "Produto não cadastrado!";
            }

            else
          {
            $strcon = mysqli_connect('localhost','root','','ludostore') or die('Erro ao conectar ao banco de dados');
            
            $arquivo = "/fotos/".$_POST['url_imagem'];
           
            
            $nome_produto = $_POST['nome_produto'];
            $categoria = $_POST['categoria'];
            $preco = $_POST['preco'];
            $descricao = $_POST['descricao'];
            $sql = "INSERT INTO produto (id_categoria, nome_produto, preco, descricao, url_imagem) VALUES ('$categoria', '$nome_produto', '$preco', '$descricao', '$arquivo')";
            mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
            mysqli_close($strcon);
            

          }
                
        }
        /*  $nome_produto = $_POST['nome_produto'];
          $categoria = $_POST['categoria'];
            //select id_categoria from categoria where categoria.nome = $id_categoria;
          $preco = $_POST['preco'];
          $descricao = $_POST['descricao'];
          $strcon = mysqli_connect('localhost','root','','ludostore') or die('Erro ao conectar ao banco de dados');
          $msg = false;
          if(isset($_FILES['url_imagem']))
          {
            echo "Oi2";
            $extensao = strtolower(substr($_FILES['url_imagem']['name'], -4));
            $url_imagem = md5(time()) . $extensao;
            $diretorio = "fotos/";

            move_uploaded_file($_FILES['url_imagem']['tmp_name'], $diretorio.$url_imagem);
            $sql = "INSERT INTO produto (id_categoria, nome_produto, preco, descricao, url_imagem) VALUES ('$categoria', '$nome_produto', '$preco', '$descricao', '$url_imagem')";
            mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
            mysqli_close($strcon);
            echo "Produto cadastrado com sucesso!";

        }*/

?>
