<?php
require('../jwt/index.php');
require('../db.php');

header('Content-Type: application/json');
// const $head = $_SERVER['HTTP_x-access-token'];

function unauth(){
    http_response_code(401);
    echo json_encode((object) ["msg"=>"Unauthorized"]);
}

$headers = apache_request_headers();
// echo $headers['authorization'];
if(!array_key_exists('authorization', $headers)){
    unauth();
    return;
}

$bearer_arr = explode(" ",$headers["authorization"]);

if(count($bearer_arr) != 2) {
    unauth();
    return;
}
$token_bearer = $bearer_arr[1];
$payload = verify($token_bearer);
if(!$payload){
    unauth();
    return;
}

// Verified token
// Search the user in database
$userQuery = "SELECT * FROM user WHERE id='$payload'";
$result = mysqli_query($conn, $userQuery);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $user = array();
    while($row = mysqli_fetch_assoc($result)){
        $user[] = $row;
    }
    // Verification success -> return jwt access_token
    echo json_encode($user);
} else {
    // user id is not registered to db -> return 404, not found
    http_response_code(400);
    echo json_encode((object) ["msg"=>"User not found"]);
}
?>