<?php
require('../jwt/index.php');
require('../db.php');

$inputJSON = file_get_contents('php://input');
$body = json_decode($inputJSON, TRUE); //convert JSON into array
header('Content-Type: application/json');


if(!isset($body['email']) || !isset($body['password'])){
    http_response_code(400);
    echo json_encode((object) ["msg"=>"Email and Password are required"]);
    return;
}

$userQuery = "SELECT * FROM user WHERE email='$body[email]'";
$result = mysqli_query($conn, $userQuery);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $user = array();
    while($row = mysqli_fetch_assoc($result)){
        $user[] = $row;
    }

    // Email is found in database
    /// Check if password matches to request input
    if(!password_verify($body['password'], $user[0]['password'])){
        // Passwords do not match -> return 401, unauthorized
        http_response_code(401);
        echo json_encode((object) ["msg"=>"Incorrect password"]);
        
        return;
    }

    // Login success -> return jwt access_token
    $token = hash_token($user[0]['id']);
    echo json_encode((object) ["x-access-token"=>$token]);
} else {
    // email is not registered to db -> return 404, not found
    http_response_code(400);
    echo json_encode((object) ["msg"=>"User not found"]);
}
?>