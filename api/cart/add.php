<?php
require('../db.php');

$inputJSON = file_get_contents('php://input');
$body = json_decode($inputJSON, TRUE); //convert JSON into array
header('Content-Type: application/json');

if(!isset($body['user']) || !isset($body['product']) || !isset($body['quantity'])){
    http_response_code(400);
    echo json_encode((object) ["msg"=>"User id, item id, and quantity are required"]);
    return;
}

$sql = "SELECT * FROM cart WHERE product=$body[product] AND user=$body[user]";
$existingProduct = mysqli_query($conn, $sql);

$product = array();

if (mysqli_num_rows($existingProduct) > 0) {
    while($row = mysqli_fetch_assoc($existingProduct)){
        $product[] = $row;
    }
}

    $addedQuantity = intval($product[0]['quantity']) + intval($body['quantity']);

    $product_id = $product[0]['product'];
    $user_id = $product[0]['user'];

    $sql = count($product) > 0 ? 
        "UPDATE cart SET quantity=$addedQuantity WHERE product=$product_id AND user=$user_id"
        :
        "INSERT INTO cart VALUES(null, $body[user], $body[product], $body[quantity])"
        ;
    if ($conn->query($sql) === TRUE) {
        echo json_encode((object) ["msg"=>"Record updated successfully"]);
        return;
    } else {
        http_response_code(500);
        echo json_encode((object) ["msg"=>"Error updating record: " . $conn->error]);
        return;
    }
?>