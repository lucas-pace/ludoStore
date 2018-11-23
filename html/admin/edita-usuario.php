<?php include 'navbar-ADM.php';
session_start();?> 
<div class="pag-add-usuario">
  <h1>Editar usuário</h1>
	<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
	?>
</div>

    <?php
        $cod_usuario= $_GET['usuario'];

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

            $query="SELECT *  FROM usuario WHERE id_usuario='$cod_usuario'";

            $result = mysqli_query($db_connect,$query); 
            if($result->num_rows >0){

                    while($row = $result->fetch_assoc()){
                         $usuario_login= $row['login'];
                         $usuario_senha= $row['senha'];
                       }     
                    }
                }    
		    ?>


<form method="POST" action="edita-usuario-botao.php" class="form-row tabela-user">

	<input type="hidden" name="cod_usuario" value="<?php echo $cod_usuario; ?>">

	<div class="row col-md-7" >
	    <div class="form-group col-md-6">
	      <label for="login">Nome do usuário:</label>
	      <input type="text" class="form-control" name="login" value="<?php echo $usuario_login;?>" required>
	    </div>
	</div>

	<div class="row col-md-7" >   
	    <div class="form-group col-md-6">
	      <label for="senha">Nova senha:</label>
	      <input type="text"  class="form-control" name="senha" value="" required>
	    </div>
	</div>  

	<div class="row col-md-7" > 
		<button type="button" class="btn btn-outline-danger botao-produto-individual botao-usuario" onclick='history.go(-1)' >Voltar</button>
	    <button type="subimit" class="btn btn-outline-danger botao-produto-individual botao-usuario ">Salvar</button>
	</div>
	
	
 </form>

<?php include 'footer-ADM.php';?> 
