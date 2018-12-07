<?php include 'navbar-ADM.php';
  
  $cod_categoria= $_GET['categoria'];

  $server = 'localhost';
  $user = 'root';
  $password = '';
  $db_name = 'ludostore';
  $port = '3306';

  $db_connect = new mysqli($server,$user,$password,$db_name,$port);
  mysqli_set_charset($db_connect,"utf8");

  if ($db_connect->connect_error == true) {
      echo 'Falha: ' . $db_connect->connect_error;
  } else { 

     $sql="SELECT * FROM produto WHERE id_categoria='$cod_categoria'";
     $query="SELECT * FROM categoria WHERE id_categoria='$cod_categoria'";

     $resultado= mysqli_query($db_connect,$query);
     $result = $db_connect->query($sql); 

          while($prod=mysqli_fetch_assoc($resultado)){
               $produto_categoria= $prod['nome_categoria'];
             }     
      }   
?>
<br>
  <div class="container">
   <div class="row">
     <div class="col-md-12">
        <div class="productTableContainer">
                  
          <table class="table table-bordered productTable">
            <thead class="thead">
              <tr>
                <th>Id</th>
                <th>Produtos cadastrados na categoria <?php echo $produto_categoria;?> </th>
                <th>Delete</th>
              </tr>
            </thead>

            <tbody>
              <?php $consultatabelacatg= "SELECT id_produto FROM produto  WHERE id_categoria='$cod_categoria' ";
                    $resultadotabcatg = $db_connect->query($consultatabelacatg);

              if ($resultadotabcatg->fetch_assoc() != NULL){ 
                  while ($row = $result->fetch_assoc()){ ?>
                      <tr>
                        <td><?php echo $row['id_produto'];?></td>
                        <td>
                            <a class="hiperlinkProductTable" href="prod-individual-ADM.php?produto=<?php echo $row['id_produto']; ?>"><?php echo $row['nome_produto'];?></a>
                            </td>
                        <td>
                            <div class="iconeDeleteProductTableWraper">
                                <a href="botao-delete-produto-categoria.php?id=<?php echo $row['id_produto'];?>" class="fa fa-trash-o iconeDeleteProductTable"></a>
                            </div>
                        </td>
                      </tr>
    <?php } } else{ ?>

                <td colspan="3">Não há produtos cadastrados!</td>
    <?php } ?>       

            </tbody>
          </table>
   
<form method="POST" action="editar_categoria.php" class="form-row tabela-user">
<input type="hidden" name="id" value="<?php echo $_GET['categoria']; ?>">

<div class="row col-md-7" >   
     <div class="form-group col-md-6">
      <label for="nome">Editar nome da Categoria:</label>
      <input type="text" class="form-control" name="nome" placeholder= <?php echo $produto_categoria?> required>
    </div>
</div>  


<div class="row col-md-7" > 
  <button type="button" class="btn btn-outline-danger botao-produto-individual botao-usuario" onclick='history.go(-1)' >Voltar</button>
    <button type="subimit" class="btn btn-outline-danger botao-produto-individual botao-usuario ">Salvar Edição</button>
</div>


</form>

        </div>
      </div>       
    </div>
  </div>
    


<!-- Importando Javascript do Bootstrap -->
<script src="../../assets/js/bootstrap.min.js"></script>

<?php include 'footer-ADM.php';?> 