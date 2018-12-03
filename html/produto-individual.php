<?php include 'navbar.php';?> 
		
	<div class="container" style="min-height:700px">
		<?php 
			$cod_produto= $_GET['produto'];

            $server = 'localhost';
            $user = 'root';
            $password = '';
            $db_name = 'ludostore';
            $port = '3306';
            $produto_img;
            $db_connect = new mysqli($server,$user,$password,$db_name,$port);
            mysqli_set_charset($db_connect,"utf8");

            if ($db_connect->connect_error == true) {
                echo 'Falha: ' . $db_connect->connect_error;
            } else { 

               $sql="SELECT * FROM produto WHERE id_produto='$cod_produto'";
               $result = $db_connect->query($sql);  

                if($result->num_rows >0){

                    while($row = $result->fetch_assoc()){
                         $produto_nome= $row['nome_produto'];
                         $produto_descr= $row['descricao'];
                         $produto_preco= $row['preco'];
                         $produto_id_categoria= $row['id_categoria'];
                         $produto_img=$row['url_imagem'];
                       }}

                 $query="SELECT * FROM categoria WHERE id_categoria= '$produto_id_categoria'" ;   
                 $resultado= mysqli_query($db_connect,$query);
                 

                    if($result->num_rows >0){
                     while($prod=mysqli_fetch_assoc($resultado)){
                          $produto_categoria= $prod['nome_categoria'];
                       }     
                    }
                }    
		?>	

		<div class="row">

			<div class="col-sm-7 descricao-produto">
				<h1><?php echo $produto_nome;?></h1>
			
				<center><img src="<?php echo $produto_img;?>" class="img-fluid" alt="imagem do jogo"></center>
				<p><?php echo $produto_descr;?></p>
			
			</div>

			<div class="col-sm-4 descricao-produto">

				<h2><b>Categoria:</b></h2>  
				<h3><?php echo $produto_categoria;?></h3>
				 
				<hr>

				<h2><b>Valor:</b></h2>
				<h3>R$ <?php echo $produto_preco;?></h3>
					
				</div>
											
			</div>
		</div>
		<button type="button" class="btn btn-outline-danger botao-produto-individual " onclick='history.go(-1)' >Voltar</button>		
	</div>  

<?php include 'footer.php';?> 	