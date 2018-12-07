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
                            $row = mysqli_fetch_assoc($result);    
                            //echo $url['url_imagem'];   
                       
                            if ($row['url_imagem'] != NULL ){ ?>          
                                <img src="<?php echo '../'.$row['url_imagem']?>" class="img-fluid" alt="imagem do jogo">


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

                <?php if(isset($_GET['produto'])) { ?>
                  
                  <input type="text" class="form-control inputtext" id="nome-produto-adm"  name="nome-produto-adm" value="<?php echo $row['nome_produto'] ?> ">

        <?php
        } else { ?>

        <input type="text" class="form-control inputtext" id="nome-produto-adm"  name="nome-produto-adm"value="nome do produto">
          
         <?php } ?>
                
                
                </div>

                <div class="form-row">  
                <div class="form-group col-md-7">

                  <label for="selecao-categoria-adm">Categoria:</label>

                  <select class="form-control" id="selecao-categoria-adm" name="selecao-categoria-adm" required>
                    <option disabled selected value="">---</option>
                   <?php $query="SELECT *  FROM categoria ";
                    $result = mysqli_query($conn,$query);
                    while ($cat = $result->fetch_assoc()){ ?>
                    
                    <option value="<?php echo $cat['nome_categoria'] ?> "><?php echo $cat['nome_categoria'] ?></option>


                  <?php } ?>  
                    
                  </select> 
                </div>
                <div class="col-md-1"></div>

                <div class="form-group col-md-4">
                  <label for="preco-produto-adm">Preço:</label>
                  <?php if ( isset($_GET['produto'])) { ?>
                  <input type="text" class="form-control inputtext" id="preco-produto-adm" name="preco-produto-adm" value="<?php echo (number_format((float)$row['preco'], 2, '.', '')); ?>">
                 <?php } else { ?>

                      <input type="text" class="form-control inputtext" id="preco-produto-adm" name="preco-produto-adm" value="0.00">

                 <?php } ?>
                </div>
                </div>  

                <div class="form-group">
                <label for="descricao-produto-adm">Descrição:</label>
                <?php if(isset($_GET['produto'])) { ?>
                  
                            <textarea class="form-control" id="descricao-produto-adm" name="descricao-produto-adm" rows="9"><?php echo utf8_encode($row['descricao']);?></textarea>

                  <?php
                  } else { ?>

                  <textarea class="form-control" id="descricao-produto-adm" name="descricao-produto-adm" rows="9">descrição do produto...</textarea>
                    
                   <?php } ?>
                
                </div>
                <div class="botao-produto-individual-adm">


                <?php if ( isset($_GET['produto'])) { ?>
                   <input type="hidden" id="id-prod" name="id-prod" value="<?php echo $row['id_produto'] ?> ">
                   <input type="submit" class="btn btn-outline-danger" name="Editar" value="Salvar">
                 <?php } 

                 else { ?>
                  <input type="hidden" id="id-prod" name="id-prod" value="novo">
                  <input type="submit" class="btn btn-outline-danger" name="novo" value="Salvar">
                 <?php } ?>                  
                
                  <input type="button" class="btn btn-outline-danger" onclick='history.go(-1)' value="Voltar" >
                
                </div>
                <br>

</form>
      </div>  
    </div>
  </div>     

<?php include 'footer-ADM.php'; ?> 