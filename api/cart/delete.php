<?php
require('../db.php');

header('Content-Type: application/json');


if(!isset($_GET['id'])){
    http_response_code(400);
    echo json_encode((object) ["msg"=>"Item id is required"]);
    return;
}


$sql="DELETE FROM cart WHERE id=$_GET[id]";
if ($conn->query($sql) === TRUE) {
    echo json_encode((object) ["msg"=>"Success"]);
  } else {
    http_response_code(500);
    echo json_encode((object) ["msg"=>$conn->error]);
  }
?>