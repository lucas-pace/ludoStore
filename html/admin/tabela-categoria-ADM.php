<?php include 'navbar-ADM.php';?> 
  <div class="container">

    <div class="row titulo-categoria-adm">
      <h1>Categorias</h1>
    </div> 

      <table class="table table-hover table-bordered">
      <thead>
          <th width="70%"><h2>Categoria</h2></th>
          <th class="col"><h2>Opções</h2></th>
        </tr>
      </thead>

      <tbody>

        <tr>
          <td><a href="tabelacategoriaindividual.php">Tabuleiros</a></td>
          <td>
            <div class="icone-categoria-adm" >
              <li>
               <a href= "#" target="_blanck"><img src="../../img/icone-lapis.png" class="img-fluid">
               <a href= "#" target="_blanck"><img src="../../img/icone-lixeira.png" class="img-fluid">
              </li> 
            </div> 
          </td>
        </tr>

        <tr>
          <td><a href="tabelacategoriaindividual.php">Cartas</a></td>
           <td>
            <div class="icone-categoria-adm">
               <li>
               <a href= "#" target="_blanck"><img src="../../img/icone-lapis.png" class="img-fluid">
               <a href= "#" target="_blanck"><img src="../../img/icone-lixeira.png" class="img-fluid">
              </li> 
            </div> 
          </td>
        </tr>

        <tr>
          <td><a href="tabelacategoriaindividual.php">Leitura</a></td>
           <td>
            <div class="icone-categoria-adm">
               <li>
               <a href= "#" target="_blanck"><img src="../../img/icone-lapis.png" class="img-fluid">
               <a href= "#" target="_blanck"><img src="../../img/icone-lixeira.png" class="img-fluid">
              </li> 
            </div> 
          </td>
        </tr>

        <tr>
          <td><a href="tabelacategoriaindividual.php">Xadrez</a></td>
           <td>
            <div class="icone-categoria-adm">
               <li>
               <a href= "#" target="_blanck"><img src="../../img/icone-lapis.png" class="img-fluid">
               <a href= "#" target="_blanck"><img src="../../img/icone-lixeira.png" class="img-fluid">
              </li> 
            </div> 
          </td>
        </tr>

      </tbody>
    </table>

    <div class="icone-adicionar-categoria">
      <a href= "#" target="_blanck"><img src="../../img/icone-mais.png" class="img-fluid" title="Adicionar Nova Categoria">
    </div>

  </div>
  <?php 
  $pagina="tabela-categoria-ADM.php"; 
  if(basename($_SERVER["PHP_SELF"])=='$pagina'){
  die("<script>alert('Sem permição de acesso !')</script>\n<script>window.location=('../index.php')</script>");
  }
  ?>

<?php include 'footer-ADM.php';?>  