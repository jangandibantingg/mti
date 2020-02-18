<?php
include 'connect.php';


$sql = "SELECT * FROM menu
		WHERE name LIKE '%".$_GET['q']."%'
		LIMIT 10";
$result = $con->query($sql);


$json = [];
while($row = $result->fetch_assoc()){
     $json[] = ['id'=>$row['id_menu'], 'text'=>$row['name']];
}


echo json_encode($json);


 ?>
