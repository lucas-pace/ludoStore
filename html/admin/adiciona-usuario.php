<?php include 'navbar-ADM.php';
?> 
<div class="pag-add-usuario">
  <h1>Cadastro do usuário</h1>
	<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
	?>
</div>

<form method="POST" action="adiciona-usuario-botao.php" class="form-row tabela-user">

	<div class="row col-md-7" >
	    <div class="form-group col-md-6">
	      <label for="login">Nome de usuário:</label>
	      <input type="text" class="form-control" name="login" placeholder="nome de usuário" required>
	    </div>
	</div>

	<div class="row col-md-7" >   
	    <div class="form-group col-md-6">
	      <label for="senha">Senha:</label>
	      <input type="text" class="form-control" name="senha" placeholder="Senha" required>
	    </div>
	</div>  

	<div class="row col-md-7" > 
		<button type="button" class="btn btn-outline-danger botao-produto-individual botao-usuario" onclick='history.go(-1)' >Voltar</button>
	    <button type="subimit" class="btn btn-outline-danger botao-produto-individual botao-usuario ">Cadastrar</button>
	</div>
	
	
 </form>

<?php include 'footer-ADM.php';?> 
