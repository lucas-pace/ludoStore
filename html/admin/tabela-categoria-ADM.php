
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ludoStore";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die ("Connection failed: " . $conn->connect_error);
}
include 'navbar-ADM.php' ;
?>
  <html>
 <body><div class="container">

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
          
      <?php
              $sql = "select * from categoria";
              $result = $conn->query($sql);                  
                  while ($row=$result->fetch_assoc()) {
                    echo "
                    <tr>
                    <td><a href=\"tabelacategoriaindividual.php\">Tabuleiros</a></td>
                    <td>
                      <div class=\"icone-categoria-adm\" >
                        <li>
                         <a href= \"tabelacategoriaindividual.php?id=".$row['id_categoria']."\" target=\"_blanck\"><img src=\"../../img/icone-lapis.png\" class=\"img-fluid\">
                         <a href= \"botao-delete-categoria.php?id=".$row['id_categoria']."\" target=\"_blanck\"><img src=\"../../img/icone-lixeira.png\" class=\"img-fluid\">
                        </li> 
                      </div> 
                    </td>
                  </tr>
                      
                    
                    ";
                  }        
        ?>

        
      </tbody>
    </table>

    <div class="icone-adicionar-categoria">
      <a href= "tabelacategoriaindividual.php?id=0" target="_blanck"><img src="../../img/icone-mais.png" class="img-fluid" title="Adicionar Nova Categoria">
    </div>

  </div>
  <?php 
  $pagina="tabela-categoria-ADM.php"; 
  if(basename($_SERVER["PHP_SELF"])=='$pagina'){
  die("<script>alert('Sem permição de acesso !')</script>\n<script>window.location=('../index.php')</script>");
  }
  ?>

<?php include 'footer-ADM.php';?>  
</body>
<html>