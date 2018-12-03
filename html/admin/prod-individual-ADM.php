<?php include 'navbar-ADM.php';?> 

  <div class="container">
    
  <form  method="post" enctype="multipart/form-data" name="edit_" action="autentica_edit_produto.php">
    
    
              <div class="row">
                
                <div class="col-sm-5 imagem-produto-individual-adm">

<<<<<<< HEAD
<<<<<<< HEAD
=======
      <div class="col-sm-5 imagem-produto-individual-adm">
        <img src="../../fotos/imagem-aleatoria.png" class="img-fluid" alt="imagem do jogo">
        <div class="botao-produto-individual-adm botao-editar-imagem-prodADM">
          <button type="button" class="btn btn-outline-danger ">Editar Imagem</button>
        </div>  
      </div> 

>>>>>>> master
=======
                      <?php if(isset($_GET['produto'])) {  ?> 
                            
                           <?php
                            $id = $_GET['produto'];
                            $sql="SELECT * FROM produto WHERE id_produto = '$id' ";
                            $result=mysqli_query($conn,$sql);
                            $url = mysqli_fetch_assoc($result);    
                            //echo $url['url_imagem'];                        
                            if ($url['url_imagem'] != NULL ){ ?>          
                                <img src="<?php echo $url['url_imagem']?>" class="img-fluid" alt="imagem do jogo">

                            <?php }else { ?>
                              <img src="../../fotos/imagem-aleatoria.png" class="img-fluid" alt="imagem do jogo">
                            <?php } ?>
                            
                      <?php } else { ?>  
                            <img src="../../fotos/imagem-aleatoria.png" class="img-fluid" alt="imagem do jogo">

                      <?php } ?>







                  <div class="botao-produto-individual-adm botao-editar-imagem-prodADM">
                    <input type="file" name="foto" class="btn btn-outline-danger ">
                    
                  </div>  
                </div> 



    
>>>>>>> d82b0d8fad9d37c7b6625d92f08d4725840a40de
      <div class="col-sm-7">
        <h1 class="title-produto-individual-adm lud">Dados do Produto</h1>

<<<<<<< HEAD
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
=======
       

          <?php if(isset($_GET['produto'])) { ?>

              <input type="hidden" name="id_produto" value="<?php echo $_GET['produto'] ?>">
              <?php
            }  ?>
                <div class="form-group">
                <label for="nome-produto-adm">Nome:</label>
                <input type="text" class="form-control inputtext" id="nome-produto-adm"  name="nome-produto-adm"value="nome do produto">
                
                </div>

                <div class="form-row">  
                <div class="form-group col-md-7">
                  <label for="selecao-categoria-adm">Categoria:</label>
                  <select class="form-control" id="selecao-categoria-adm" name="selecao-categoria-adm">
                    <option disabled selected>---</option>
                    <option>Tabuleiros</option>
                    <option>Cartas</option>
                    <option>Leitura</option>
                    <option>Xadrez</option>
                  </select> 
                </div>
                <div class="col-md-1"></div>

                <div class="form-group col-md-4">
                  <label for="preco-produto-adm">Preço:</label>
                  <input type="text" class="form-control inputtext" id="preco-produto-adm" name="preco-produto-adm" value="R$ 0,00">
                </div>
                </div>  

                <div class="form-group">
                <label for="descricao-produto-adm">Descrição:</label>
                  <textarea class="form-control" id="descricao-produto-adm" name="descricao-produto-adm" rows="9">descrição do produto...</textarea>
                </div>
                <div class="botao-produto-individual-adm">
                                     
                
                <input type="button" class="btn btn-outline-danger" onclick='history.go(-1)' value="Voltar" >
                <input type="submit" class="btn btn-outline-danger" name="Adicionar" value="Adicionar Produto">
                <input type="submit" class="btn btn-outline-danger" name="Editar" value="Salvar Alterações">

                </div>

</form>
>>>>>>> d82b0d8fad9d37c7b6625d92f08d4725840a40de
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

<<<<<<< HEAD
?>
=======
<?php include 'footer-ADM.php'; ?> 
>>>>>>> d82b0d8fad9d37c7b6625d92f08d4725840a40de
