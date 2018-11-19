<!DOCTYPE html>
<html>

<head>
  <!-- Importando CSS do Bootstrap -->
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href = "../../assets/css/desgin.css">
  <link rel="stylesheet" href = "../../assets/css/yan.css">
  <link rel="stylesheet" href="../../assets/css/styles.css">
  <link rel="icon" type="imagem/png" href="../../assets/imagem/agora-logo.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../assets/js/scripts.js">
  <title >LudoStore</title>

</head>

<body>
  
    <nav class= "navbar navbar-fixed-top navbar-expand-lg adm navbar-dark">
        <a class="navbar-brand" href="#">
          <img src="../../assets/imagem/agora-logo.png" width="100" height="100" alt="Logo LudoStore">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite" aria-controls="navbarSite" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class ="container">
          <a class="navbar-brand lud" href="#">LudoStore</a>
          <div class = "collapse navbar-collapse" id= "navbarSite">
            <ul class = "navbar-nav mr-auto">
              <li class="nav-item lud"><a class= "nav-link" href="tabela-categoria-ADM.php">Tabela Categoria</a></li>
              <li class="nav-item lud"><a class= "nav-link" href="tabelaproduto.php">Tabela Produto</a></li>
              <li class="nav-item lud"><a class= "nav-link" href="tabelacategoriaindividual.php">Categoria Individual</a></li>
              <li class="nav-item lud"><a class= "nav-link" href="prod-individual-ADM.php">Produto Individual</a></li>
            </ul>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item mass lud"><button type="button" class="btn btn-link" data-toggle="modal" data-target="#Login">Login</button></li>
            </ul>
          </div>
        </div>
      </nav>
    
      <div class="modal fade" id="Logout" role="dialog">
    
          <div class="modal-dialog">
    
              <div class="modal-content">
            
    
                  <div class="modal-body">
                      <form>
                          <div class="caixa_login">  
                            
                            <label class="dad lud">Logout</label>  <br>
                            <img src="../../assets/imagem/agora-logo.png">
                            <div class="dad2 lud">
                            <label >Usuario: </label>	<input type="text" title="usuario" placeholder=""><br>    
                            <div class="dad3 lud"><label>Senha: </label><input type="password" title="senha" placeholder="">
                            
                            <br><br></div>
                            </div>
                            <div class="modal_button">
                            <button type="button" class="btn btn-link lud" data-dismiss="modal">Voltar</button> 
                            <button type="button" class="btn btn-link lud" value="entrar">Entrar</button> 
        
                             
                          </div> 
                                                                        
                          </div>    
                  
                          </form> 
        
                  </div>					
        
                </div>
          </div>
        </div>
  <div class="container">
    <div class="row">

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