<?php include 'navbar-ADM.php';?> 

    <div class = "row">
        <div class="col-md-11">
            <div class="productTableContainer">
      
      
        
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

                                    $sql="SELECT id_produto, nome_produto  FROM produto ";

                                    $result = $db_connect->query($sql); ?>

                                <table class="table table-bordered productTable"> 

                                    <thead class="thead">
                                      <tr>
                                        <th>Id</th>
                                        <th>Nome do Produto</th>
                                        <th>Delete</th>
                                      </tr>
                                    </thead> 

                                   <?php $consultatabela= "SELECT id_produto FROM produto ";
                                         $resultadotab = $db_connect->query($consultatabela);

                                    if ($resultadotab->fetch_assoc() != NULL){ 
                                        while ($row = $result->fetch_assoc()){ ?>
                                            
                                            <tr> 
                                                <td><?php echo $row['id_produto'];?></td>
                                                <td>
                                                    <a class="hiperlinkProductTable" href="prod-individual-ADM.php?produto=<?php echo $row['id_produto']; ?>" ><?php echo $row['nome_produto'];?></a>
                                                    </td>
                                                <td>
                                                    <div class="iconeDeleteProductTableWraper">
                                                        <a href="botao-delete-produto.php?id=<?php echo $row['id_produto'];?>" class="fa fa-trash-o iconeDeleteProductTable"></a>
                                                      </div>
                                                </td>
                                              </tr>

                                       <?php } } else{ ?>
                                                    <td colspan="3">Não há produtos cadastrados!</td>
                                                <?php } ?>    

                                 </table>    
                           <?php }                                                                                   
                   ?>         
                      
                </tbody>
              
            </div>   
        </div> 

        <div class="col">
            <div class="iconeAddProductTableWraper">
              <a href="prod-individual-ADM.php" class="fa fa-plus iconeAddProductTable"></a>
            </div>
         </div> 
    </div>               
    
<?php include 'footer-ADM.php';?>      
   

