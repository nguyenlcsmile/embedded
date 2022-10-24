<?php
// send a JSON message to website 
header('Content-Type: application/json');
// ket noi database
include("config.php");
// doc du lieu tu database
$sql = "select id,temperature,humidity, creat_at from temp_humid where id between (select max(id) from temp_humid) - 6 and (select max(id) from temp_humid)";

$result = mysqli_query($conn,$sql);
// gui du lieu len website
$data = array();
foreach ($result as $row){
    $data[]=$row;
}

mysqli_close($conn);

echo json_encode($data);
?>