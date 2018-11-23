<?php include 'navbar-ADM.php';?> 


    <div class = "row">
        <div class="col-md-11">
            <div class="table">
      
      
        
                <tbody>

                  <?php
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

                                    $query="SELECT *  FROM categoria ";

                                    $result = mysqli_query($db_connect,$query); ?>

                                <table class="table table-bordered productTable"> 

                                    <thead class="thead">
                                      <tr>
                                        <th>Categoria</th>
                                        <th>Opções</th>
                                      </tr>
                                    </thead> 

                                   <?php $consultatabela= "SELECT id_categoria FROM categoria ";
                                         $resultadotab = $db_connect->query($consultatabela);

                                    if ($resultadotab->fetch_assoc() != NULL){ 
                                        while ($row = $result->fetch_assoc()){ ?>
                                            
                                            <tr> 
                                                <td>
                                                    <a class="hiperlinkProductTable" href="tabelacategoriaprodutos-ADM.php?categoria=<?php echo $row['id_categoria']; ?>" ><?php echo $row['nome_categoria'];?></a>
                                                    </td>
                                                <td>

                                                    <div class="iconeDeleteProductTableWraper icone-tab-adm">
                                                        <a href="tabelacategoriaindividual.php?id=<?php echo $row['id_categoria'];?>" class="fa fa-pencil iconeDeleteProductTable"></a>
                                                    </div> 

                                                    <div class="iconeDeleteProductTableWraper">
                                                        <a href="#" class="fa fa-trash-o iconeDeleteProductTable" onclick=excluir('<?php echo $row['id_categoria'];?>') ></a>
                                                    </div>

                                                </td>
                                              </tr>

                                       <?php } } else{ ?>
                                                    <td colspan="2">Não há categorias cadastradas!</td>
                                                <?php } ?>    

                                 </table>    
                           <?php }                                                                                   
                   ?>         
                      
                </tbody>
              
            </div>   
        </div> 

        <div class="col">
            <div class="iconeAddProductTableWraper">
              <a href="tabelacategoriaindividual.php?id=<?php echo $row['id_categoria'];?>" class="fa fa-plus iconeAddProductTable"></a>
            </div>
         </div> 
    </div>               
    
<?php include 'footer-ADM.php';?> 