<!DOCTYPE html>
<html>
<head>
  	<!-- Importando CSS do Bootstrap -->
  <!-- Importando CSS do Bootstrap -->
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href = "../assets/css/desgin.css">
  <link rel="stylesheet" href = "../assets/css/yan.css">
  <link rel="stylesheet" href="../assets/css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/js/scripts.js">
  <link rel="icon" type="imagem/png" href="../assets/imagem/agora-logo.png">
  <title>Contato</title> 
</head>
<body>
  <nav class= "navbar navbar-fixed-top navbar-expand-lg navbar-default navbar-dark">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite" aria-controls="navbarSite" aria-expanded="false" aria-label="Toggle navigation">
		</button>
		<div class ="container">
			<a class="navbar-brand lud" href="index.php">LudoStore</a>
			<div class = "collapse navbar-collapse" id= "navbarSite">
				<ul class = "navbar-nav mr-auto">
					<li class="nav-item lud"><a class= "nav-link" href="index.php">Home</a></li>
					<li class="nav-item dropdown lud"><a class= "nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Produtos</a>
						<div class="dropdown-menu">
							<a class="dropdown-item lud" href="produtos-tabuleiros.php">Tabuleiros</a>
							<a class="dropdown-item lud" href="produtos-cartas.php">Cartas</a>
							<a class="dropdown-item lud" href="produtos-leitura.php">Quadrinhos</a>
							<a class="dropdown-item lud" href="produtos-xadrez.php">Xadrez</a>
						</div>
					</li>
					<li class="nav-item lud"><a class= "nav-link" href="quem_somos.php">Quem Somos</a></li>
					<li class="nav-item lud"><a class= "nav-link" href="contato.php">Contato</a></li>
					<li class="nav-item lud"><a class= "nav-link" href="localizacao.php">Local</a></li>
				</ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item mass lud"><button type="button" class="btn btn-link" data-toggle="modal" data-target="#Login">Login</button></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="modal fade" id="Login" role="dialog">

			<div class="modal-dialog">

					<div class="modal-content">
				

							<div class="modal-body">
									<form>
											<div class="caixa_login">  
												
												<label class="dad lud">Login</label>  <br>
												<img src="../assets/imagem/agora-logo.png">
												<div class="dad2 lud">
												<label >Usuario: </label>	<input type="text" title="usuario" placeholder=""><br>    
												<div class="dad3 lud"><label>Senha: </label><input type="password" title="senha" placeholder="">
												
												<br><br></div>
												</div>
												<div class="modal_button">
												<button type="button" class="btn btn-link lud" data-dismiss="modal">Voltar</button> 
												<button type="button" class="btn btn-link lud" value="entrar">Entrar</button> 
		
												 
											</div> 
																																		
											</div>    
							
											</form> 
		
							</div>					
		
						</div>
			</div>
		</div>
    <br>                 


  <div class="container">
    <div class="row">

      <div class="col-5">
        <div class="img-contato">
          <img src="../img/contato-pic.png" class="img-fluid"  alt="imagem de um mago e sua coruja">
        </div>
      </div>

      <div class="col-7">
        <div class="titulo-contato">
             <h1><b>Fale Conosco</b></h1>
        </div>
          
          <form action="contato.php" method="post">

              <div class="form-group nome-contato">
                    <label for="nome-contato">Nome</label>
                    <input type="text" name="nome" class="form-control field" id="nome-contato" placeholder="┬┴┬┴┤(･_├┬┴┬┴" required>

              </div>

              <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control field"  placeholder="(≧▽≦)/" required>    
              </div>
                
              <div class="form-group">
               
                <label for="selecao-assunto">Assunto</label>
                <select class="form-control"  name="assunto" required>
                  <option disabled selected value="" >(・・ ) ? </option>
                  <option value="Sugestões">Sugestões</option>
                  <option value="Dúvidas">Dúvidas</option>
                  <option value="Elogios">Elogios</option>
                  <option value="Criticas">Criticas</option>
                  <option value="Outros">Outros</option>
                </select> 
              </div>

              <div class="form-group mensagem-contato">
                <label for="mensagem-contato">Mensagem</label>
                <textarea class="form-control field" name="mensagem"  rows="3" placeholder="__φ(．．) " required></textarea>
              </div>

              <div class="contato-botao-enviar">
                <button class="btn btn-outline-danger contato-botao" type="submit" name="submit" value="enviar">enviar</button>
              </div>
              <br>  
        </form>
                            
          <?php 


                // Inserir Arquivos do PHPMailer
                require '../assets/phpmailer/Exception.php';
                require '../assets/phpmailer/PHPMailer.php';
                require '../assets/phpmailer/SMTP.php';

                // Usar as classes sem o namespace
                use PHPMailer\PHPMailer\PHPMailer;
                use PHPMailer\PHPMailer\Exception;


                function clean_input($input){
                    $input = trim($input);
                    $input = stripslashes($input);
                    $input = htmlspecialchars($input);

                    return $input;
                }

                if($_SERVER['REQUEST_METHOD']== 'POST'){
                    $nome=$_POST['nome'];
                    $email=$_POST['email'];
                    $mensagem=$_POST['mensagem'];
                    $assunto=$_POST['assunto'];

                    $nome= clean_input($nome);
                    $email= clean_input($email);
                    $mensagem= clean_input($mensagem);
                    $texto_msg = 'E-mail enviado através da pagina de contato do site'
                    . '<br><br>' . 
                    'Nome: ' . $nome . '<br>' .
                    'E-mail: ' . $email . '<br>' .
                    'Mensagem: ' . $mensagem . '<br>' ;


                    // Criação do Objeto da Classe PHPMailer
                    $mail = new PHPMailer(true); 
                    $mail->CharSet="UTF-8";


                    try {       
                        //$mail->SMTPDebug = 2;                                                       
                        
                        // Usar SMTP para o envio
                        $mail->isSMTP();                                      

                        // Detalhes do servidor (No nosso exemplo é o Google)
                        $mail->Host = 'smtp.gmail.com';

                        // Permitir autenticação SMTP
                        $mail->SMTPAuth = true;                               

                        // Nome do usuário
                        $mail->Username = 'ludostore42@gmail.com';        
                        // Senha do E-mail         
                        $mail->Password = 'amelhorloja';                           
                        // Tipo de protocolo de segurança
                        $mail->SMTPSecure = 'tls';   

                        // Porta de conexão com o servidor                        
                        $mail->Port = 587;

                        
                        // Garantir a autenticação com o Google
                        $mail->SMTPOptions = array(
                            'ssl' => array(
                                'verify_peer' => false,
                                'verify_peer_name' => false,
                                'allow_self_signed' => true
                            )
                        );

                        // Remetente
                        $mail->setFrom($email, $nome);
                        
                        // Destinatário
                        $mail->addAddress('ludostore42@gmail.com', 'LudoStore');

                        // Conteúdo

                        // Define conteúdo como HTML
                        $mail->isHTML(true);                                  

                        // Assunto
                        $mail->Subject = $assunto;
                        $mail->Body    = $texto_msg;
                        $mail->AltBody = $texto_msg;

                        // Enviar E-mail
                        $mail->send();
                        $confirmacao = '☆*:.｡. Mensagem enviada com sucesso  ☆*:.｡.o(≧▽≦)o.｡.:*☆';
                    } catch (Exception $e) {
                        $confirmacao = 'A mensagem não foi enviada ･ﾟﾟ･(／ω＼)･ﾟﾟ･.';
                    }
                                           
                } 

          ?>

        <?php if($_SERVER['REQUEST_METHOD']== 'POST'){ ?>
          <div class="confirmacao-contato">
           <p><?php echo $confirmacao; ?></p>
          </div> 
        <?php }; ?>

      </div>
    </div> 
</div> 



  <footer class="page-footer"> 
 
 <div class ="row">
 <div class ="col-md-2">
 </div>
 <div class ="col-md-5">
  <div class="infoLojaWraperFooter">
  <div class="list-unstyled">
  <li>
  <div class="infoLojaFooter">
    <p> Endereço: xxxxxx xxxxxxxxx xxxxxxxxxxx</p>
  </div>
  </li>
  <li>
  <div class="infoLojaFooter">
    <p> Email: xxxxxxxxxxxxxxxxx@xxxx.xxx</p>
  </div>
  </li>
  <li>
  <div class="infoLojaFooter">
    <p> Telefone: (xx)xxxxx-xxxxx</p>
  </div>
  </li>
  <li><div class = "iconeMidiaSocialFooterWarper">
      <div class= "iconeMidiaSocialFooterWraperIndividual">
      <a href="#" class="fa fa-facebook iconeMidiaSocialFooter"></a>
      </div>
      <div class= "iconeMidiaSocialFooterWraperIndividual">
      <a href="#" class="fa fa-instagram iconeMidiaSocialFooter"></a>
      </div>
      <div class= "iconeMidiaSocialFooterWraperIndividual">
      <a href="#" class="fa fa-twitter iconeMidiaSocialFooter"></a>
      </div>
      <div class= "iconeMidiaSocialFooterWraperIndividual">
      <a href="#" class="fa fa-google-plus-square iconeMidiaSocialFooter"></a>
      </div>
      </div>

  </li>    
  
  </div>
  
  </div>
  </div>
  <div class="col-md-1">
  <div class="map-wraper">
  <div id="map">
  <script>
  
  function initMap() {
    var uluru = {lat: 40.7143528, lng: -74.0059731};
    var map = new google.maps.Map(
    document.getElementById('map'), {zoom: 4, center: uluru});
    var marker = new google.maps.Marker({position: uluru, map: map});
  }
  </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD634e8vHGhmv9HxtQb94zFcBCs8C1TTd8&callback=initMap">
      </script>
      </div>
      </div>
    </div>
    <div class="col-md-3">
  </div>
 
 <div class= "footer-copyright ">
  
 </div>
 
 </footer>

</body>
<!-- Importando Javascript do Bootstrap -->
<script  src="../assets/js/popper.min.js"></script>
<script  src="../assets/js/jQuery-3.2.1.slim.min.js"></script>
<script  src="../assets/js/bootstrap.min.js"></script>
</html>