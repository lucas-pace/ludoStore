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

                                    $query="SELECT *  FROM usuario ";

                                    $result = mysqli_query($db_connect,$query); ?>

                                <table class="table table-bordered productTable"> 

                                    <thead class="thead">
                                      <tr>
                                        <th>Id</th>
                                        <th>Login</th>
                                        <th>Opções</th>
                                      </tr>
                                    </thead> 

                                   <?php $consultausuario= "SELECT id_usuario FROM usuario ";
                                         $resultadousuario = $db_connect->query($consultausuario);

                                    if ($resultadousuario->fetch_assoc() != NULL){ 
                                        while ($row = $result->fetch_assoc()){ ?>
                                            
                                            <tr> 
                                                <td><?php echo $row['id_usuario'];?></td>

                                                <td>
                                                    <a class="hiperlinkProductTable"><?php echo $row['login'];?></a>
                                                </td>

                                                <td>

                                                    <div class="iconeDeleteProductTableWraper icone-tab-adm">
                                                        <a href="edita-usuario.php?usuario=<?php echo $row['id_usuario'];?>" class="fa fa-pencil iconeDeleteProductTable"></a>
                                                    </div> 

                                                    <div class="iconeDeleteProductTableWraper">
                                                        <a href="botao-delete-usuario.php?id=<?php echo $row['id_usuario'];?>" class="fa fa-trash o iconeDeleteProductTable"></a>
                                                    </div>

                                                </td>
                                            </tr>

                                       <?php } } else{ ?>
                                                    <td colspan="3">Não há usuários cadastradas!</td>
                                                <?php } ?>    

                                 </table>    
                           <?php }                                                                                   
                   ?>         
                      
                </tbody>
              
            </div>   
        </div> 

        <div class="col">
            <div class="iconeAddProductTableWraper">
              <a href="adiciona-usuario.php" class="fa fa-plus iconeAddProductTable"></a>
            </div>
         </div> 
    </div>               
    
<?php include 'footer-ADM.php';?> 