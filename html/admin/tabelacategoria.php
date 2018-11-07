<!DOCTYPE html>
<html>

<head>
  <!-- Importando CSS do Bootstrap -->
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/desgin.css">

  <link rel="stylesheet" href="../assets/css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/css/yan.css">
  <title>LudoStore</title>
</head>

<body>
  <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-dark bg-danger">
    <a class="navbar-brand" href="index.php">
      <img src="../assets/imagem/agora-logo.png" width="50" height="50" alt="Logo LudoStore">
    </a>
    <div class="container">
      <a class="navbar-brand" href="index.php">LudoStore</a>
      <div class="collapse navbar-collapse" id="navbarSite">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Produtos</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Tabuleiros</a>
              <a class="dropdown-item" href="#">Cartas</a>
              <a class="dropdown-item" href="#">Leitura</a>
              <a class="dropdown-item" href="#">Xadrez</a>
            </div>
          </li>
          <li class="nav-item"><a class="nav-link" href="#">Quem Somos</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contato</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Localização</a></li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
  
   
<div class="row categoriaInfo">
  <div class="categoriaInfoBox">
  <form action="/action_page.php">
    <div class="row">
      <div class="col-md-9">
    <p class="categoriaInfoText"><input class="categoriaNomeInput" type="text" name="fname" value="Jogos De Tabuleiro"></p><br>
     <p class="categoriaDescText">   
    <TEXTAREA class= "categoriaDescInput"name="thetext" rows="3" cols="60">
      Descrição da categoria, todas as informações nessa página são editaveis. Exemplo de texto filler, code, code, code, code, teste123.
     </TEXTAREA>
     <p></div><div class = "col">
        <button type="submit" class="btn categoriaInputConfirm">
          <div class="categoriaInputConfirmButtomWraper">
            <i class="fa fa-check fa-lg categoriaInputConfirmButtom "></i>
        </div>
          </button>
    </div>

</div>
  </form>
  
</div>
</div>
 <div class="row">
   <div class="col-md-11">
  <div class="container productTableContainer">
                
      <table class="table table-bordered productTable">
        <thead class="thead">
          <tr>
            <th>Id</th>
            <th>Nome do Produto na Categoria</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>0</td>
            <td>
                <a class="hiperlinkProductTable"href="/produtos.php/?id=1" >Produto1</a>
                </td>
            <td>
                <div class="iconeDeleteProductTableWraper">
                    <a href="/delete.php?id=1" class="fa fa-trash-o iconeDeleteProductTable"></a>
                  </div>
            </td>
          </tr>
          <tr>
              <td>0</td>
              <td>
                  <a class="hiperlinkProductTable"href="/produtos.php/?id=1" >Produto1</a>
                  </td>
              <td>
                  <div class="iconeDeleteProductTableWraper">
                      <a href="/delete.php?id=1" class="fa fa-trash-o iconeDeleteProductTable"></a>
                    </div>
              </td>
            </tr>
            <tr>
                <td>0</td>
                <td>
                    <a class="hiperlinkProductTable"href="/produtos.php/?id=1" >Produto1</a>
                    </td>
                <td>
                    <div class="iconeDeleteProductTableWraper">
                        <a href="/delete.php?id=1" class="fa fa-trash-o iconeDeleteProductTable"></a>
                      </div>
                </td>
              </tr>
              <tr>
                  <td>0</td>
                  <td>
                      <a class="hiperlinkProductTable"href="/produtos.php/?id=1" >Produto1</a>
                      </td>
                  <td>
                      <div class="iconeDeleteProductTableWraper">
                          <a href="/delete.php?id=1" class="fa fa-trash-o iconeDeleteProductTable"></a>
                        </div>
                  </td>
                </tr>
                <tr>
                    <td>0</td>
                    <td>
                        <a class="hiperlinkProductTable"href="/produtos.php/?id=1" >Produto1</a>
                        </td>
                    <td>
                        <div class="iconeDeleteProductTableWraper">
                            <a href="/delete.php?id=1" class="fa fa-trash-o iconeDeleteProductTable"></a>
                          </div>
                    </td>
                  </tr>
                  <tr>
                      <td>0</td>
                      <td>
                          <a class="hiperlinkProductTable"href="/produtos.php/?id=1" >Produto1</a>
                          </td>
                      <td>
                          <div class="iconeDeleteProductTableWraper">
                              <a href="/delete.php?id=1" class="fa fa-trash-o iconeDeleteProductTable"></a>
                            </div>
                      </td>
                    </tr>
                    <tr>
                        <td>0</td>
                        <td>
                            <a class="hiperlinkProductTable"href="/produtos.php/?id=1" >Produto1</a>
                            </td>
                        <td>
                            <div class="iconeDeleteProductTableWraper">
                                <a href="/delete.php?id=1" class="fa fa-trash-o iconeDeleteProductTable"></a>
                              </div>
                        </td>
                      </tr>
                      <tr>
                          <td>0</td>
                          <td>
                              <a class="hiperlinkProductTable"href="/produtos.php/?id=1" >Produto1</a>
                              </td>
                          <td>
                              <div class="iconeDeleteProductTableWraper">
                                  <a href="/delete.php?id=1" class="fa fa-trash-o iconeDeleteProductTable"></a>
                                </div>
                          </td>
                        </tr>
                        <tr>
                            <td>0</td>
                            <td>
                                <a class="hiperlinkProductTable"href="/produtos.php/?id=1" >Produto1</a>
                                </td>
                            <td>
                                <div class="iconeDeleteProductTableWraper">
                                    <a href="/delete.php?id=1" class="fa fa-trash-o iconeDeleteProductTable"></a>
                                  </div>
                            </td>
                          </tr>
                          <tr>
                              <td>0</td>
                              <td>
                                  <a class="hiperlinkProductTable"href="/produtos.php/?id=1" >Produto1</a>
                                  </td>
                              <td>
                                  <div class="iconeDeleteProductTableWraper">
                                      <a href="/delete.php?id=1" class="fa fa-trash-o iconeDeleteProductTable"></a>
                                    </div>
                              </td>
                            </tr>
                            <tr>
                                <td>0</td>
                                <td>
                                    <a class="hiperlinkProductTable"href="/produtos.php/?id=1" >Produto1</a>
                                    </td>
                                <td>
                                    <div class="iconeDeleteProductTableWraper">
                                        <a href="/delete.php?id=1" class="fa fa-trash-o iconeDeleteProductTable"></a>
                                      </div>
                                </td>
                              </tr>
                              <tr>
                                  <td>0</td>
                                  <td>
                                      <a class="hiperlinkProductTable"href="/produtos.php/?id=1" >Produto1</a>
                                      </td>
                                  <td>
                                      <div class="iconeDeleteProductTableWraper">
                                          <a href="/delete.php?id=1" class="fa fa-trash-o iconeDeleteProductTable"></a>
                                        </div>
                                  </td>
                                </tr>
                                <tr>
            <td></td>
            <td>
                <a class="hiperlinkProductTable"href="/produtos.php/?id=1" >Produto1</a>
                </td>
            <td>
                <div class="iconeDeleteProductTableWraper">
                    <a href="/delete.php?id=1" class="fa fa-trash-o iconeDeleteProductTable"></a>
                  </div>
            </td>
          </tr>
        </tbody>
      </table>
</div>
   </div>
   <div class="col-md-1">
      <div class="iconeAddProductTableWraper">
          <a href="/produto.php?" class="fa fa-plus iconeAddProductTable"></a>
        </div>

   </div>    
    </div>

    </div>
      <footer class="page-footer">

        <div class="row">
          <div class="col-md-2">
          </div>
          <div class="col-md-5">
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
                <li>
                  <div class="iconeMidiaSocialFooterWarper">
                    <div class="iconeMidiaSocialFooterWraperIndividual">
                      <a href="#" class="fa fa-facebook iconeMidiaSocialFooter"></a>
                    </div>
                    <div class="iconeMidiaSocialFooterWraperIndividual">
                      <a href="#" class="fa fa-instagram iconeMidiaSocialFooter"></a>
                    </div>
                    <div class="iconeMidiaSocialFooterWraperIndividual">
                      <a href="#" class="fa fa-twitter iconeMidiaSocialFooter"></a>
                    </div>
                    <div class="iconeMidiaSocialFooterWraperIndividual">
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
                    var uluru = { lat: 40.7143528, lng: -74.0059731 };
                    var map = new google.maps.Map(
                      document.getElementById('map'), { zoom: 4, center: uluru });
                    var marker = new google.maps.Marker({ position: uluru, map: map });
                  }
                </script>
                <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD634e8vHGhmv9HxtQb94zFcBCs8C1TTd8&callback=initMap">
                </script>
              </div>
            </div>
          </div>
          <div class="col-md-3">
          </div>



      </footer>

      <div class="footer-copyright ">
        <i class="footer-copyright-texto">
          Code Empresa Junior
        </i>
      </div>
      


</body>

<!-- Importando Javascript do Bootstrap -->
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/jQuery-3.2.1.slim.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>

</html>