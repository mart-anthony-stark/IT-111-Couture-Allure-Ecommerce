<?php
require('../jwt/index.php');
require('../db.php');

$inputJSON = file_get_contents('php://input');
$body = json_decode($inputJSON, TRUE); //convert JSON into array
header('Content-Type: application/json');

if(!isset($body["name"]) || !isset($body["email"]) || !isset($body["contact"])  || !isset($body["password"]) ){
    http_response_code(400);
    echo json_encode((object) ["msg"=>"All fields are required"]);
    return;
}

// Check if email already taken
$userExistsQuery = "SELECT * FROM user WHERE email='$body[email]'";
$exist = mysqli_query($conn, $userExistsQuery);

if (mysqli_num_rows($exist) > 0){
    http_response_code(403);
    echo json_encode((object) ["msg"=>"Email already taken by another account"]);
    return;
}

// Hash password before saving to db
$hashed_pass = password_hash($body['password'], PASSWORD_BCRYPT);
$sql = "INSERT INTO user VALUES(
    null,
    '$body[name]',
    '$body[email]',
    '$hashed_pass',
    '$body[contact]'
)";
if ($conn->query($sql) === TRUE) {
    // Signup success -> return jwt access_token
    $last_id = $conn->insert_id;
    $token = hash_token($last_id);
    echo json_encode((object) ["x-access-token"=>$token]);
} else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
    http_response_code(500);
    echo json_encode((object) ["msg"=>$conn->error]);
}
?>