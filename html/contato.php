<?php include 'navbar.php';?>                   


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


<?php include 'footer.php';?> 