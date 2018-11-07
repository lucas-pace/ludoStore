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
              <li class="nav-item lud"><a class= "nav-link" href="tabela-categoria-ADM.html">Tabela Categoria</a></li>
              <li class="nav-item lud"><a class= "nav-link" href="tabelaproduto.html">Tabela Produto</a></li>
              <li class="nav-item lud"><a class= "nav-link" href="tabelacategoriaindividual.html">Categoria Individual</a></li>
              <li class="nav-item lud"><a class= "nav-link" href="prod-individual-ADM.html">Produto Individual</a></li>
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

      <div class="col-sm-5 imagem-produto-individual-adm">
        <img src="fotos/imagem-aleatoria.png" class="img-fluid" alt="imagem do jogo">
        <div class="botao-produto-individual-adm botao-editar-imagem-prodADM">
          <button type="button" class="btn btn-outline-danger ">Editar Imagem</button>
        </div>  
      </div> 

      <div class="col-sm-7">
        <h1 class="title-produto-individual-adm">Dados do Produto</h1>

        <form>

           <div class="form-group">
            <label for="nome-produto-adm">Nome:</label>
            <input type="text" class="form-control inputtext" id="nome-produto-adm" value="nome do produto">
            
          </div>

          <div class="form-row">  
            <div class="form-group col-md-7">
              <label for="selecao-categoria-adm">Categoria:</label>
              <select class="form-control" id="selecao-categoria-adm">
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
              <input type="text" class="form-control inputtext" id="preco-produto-adm" value="R$ 0,00">
            </div>
          </div>  

          <div class="form-group">
            <label for="descricao-produto-adm">Descrição:</label>
             <textarea class="form-control" id="descricao-produto-adm" rows="9">descrição do produto...</textarea>
          </div>

        </form>

        <div class="botao-produto-individual-adm">
          <button type="button" class="btn btn-outline-danger" onclick='history.go(-1)' >Voltar</button>
          <button type="button" class="btn btn-outline-danger ">Excluir Produto</button>
          <button type="button" class="btn btn-outline-danger ">Salvar Alterações</button> 

        </div>
           
      </div>  
    </div>
  </div>     
</body>
<!-- Importando Javascript do Bootstrap -->
<script  src="../../assets/js/popper.min.js"></script>
<script  src="../../assets/js/jQuery-3.2.1.slim.min.js"></script>
<script  src="../../assets/js/bootstrap.min.js"></script>
</html>