<?php include 'navbar-ADM.php';?> 

  <div class="container">
    <div class="row">

      <div class="col-sm-5 imagem-produto-individual-adm">
        <img src="../../fotos/imagem-aleatoria.png" class="img-fluid" alt="imagem do jogo">
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

<?php include 'footer-ADM.php';?> 