<?php
require('../db.php');

header('Content-Type: application/json');


if(!isset($_GET['user'])){
    http_response_code(400);
    echo json_encode((object) ["msg"=>"User id is required"]);
    return;
}

$sql = "SELECT *, cart.id FROM cart, product WHERE user=$_GET[user] AND product.id=cart.product";
$result = mysqli_query($conn, $sql);
$emparray = array();
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    //create an array
    while($row = mysqli_fetch_assoc($result)){
        $emparray[] = $row;
    }
}
echo json_encode($emparray);
?>