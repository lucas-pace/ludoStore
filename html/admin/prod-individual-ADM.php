<?php include 'navbar-ADM.php';?> 

  <div class="container">
    
  <form  method="post" enctype="multipart/form-data" name="edit_" action="autentica_edit_produto.php">
    
    
              <div class="row">
                
                <div class="col-sm-5 imagem-produto-individual-adm">

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



    
      <div class="col-sm-7">
        <h1 class="title-produto-individual-adm">Dados do Produto</h1>

       

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
      </div>  
    </div>
  </div>     

<?php include 'footer-ADM.php'; ?> 