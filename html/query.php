
<?php
$servername = "localhost";
$username = "yan";
$password = "root";
$dbname = "ludoStore";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die ("Connection failed: " . $conn->connect_error);
}

$cat_nome=$_GET['cat_nome'];
$texto=$_GET['texto'];
$sql = "select * from produto"
 .(($cat_nome!=0 || $texto!="")?(" where"
 . (!$cat_nome==0?" id_categoria = ".$cat_nome:"") 
 . (!$cat_nome=="" && !$texto==""?" and":"") 
 . ($texto!=""?" nome_produto like ('%".$texto."%')":"")):"");

$result = $conn->query($sql);
$response=array();
while ($row = $result->fetch_assoc()) {
    $info= array('nome'=>$row['nome_produto'],
    'id'=>$row['id_produto'],
    'url'=>$row['url_image'],
    'preco'=>$row['preco']);
	array_push($response,$info);
	}
 
echo json_encode($response);
    
?>