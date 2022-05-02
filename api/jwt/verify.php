<?php
    require('./index.php');
    header('Content-Type: application/json');
    
    // Create token payload as a JSON string
    $user = verify("eyJpZCI6IjEifV9fX19hc3lkdmJpYWFzZGdoZA==");
    if(!!$user){
        echo $user;
    }
    // $encoded = hash_token(json_encode((object) ["id"=>"1"]));
    // $decoded = base64_decode($encoded);
    // echo json_encode((object) ["token"=>$encoded, "user"=>$decoded]);
    
?>