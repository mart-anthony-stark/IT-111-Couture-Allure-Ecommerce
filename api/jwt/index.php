<?php
$SECRET_STR = "asydvbiaasdghd";
function hash_token($str){
    $secret = $GLOBALS ['SECRET_STR'];
    $encoded_secret = base64_encode($str."____".$secret);
    return $encoded_secret;
}
function verify($str){
    $s = $GLOBALS ['SECRET_STR'];
    $decoded = base64_decode($str);
    $arr = (explode("____", $decoded));

    if(count($arr) != 2) return false;

    if(!$arr[1] == $s) return false;

    return $arr[0];
}
?>