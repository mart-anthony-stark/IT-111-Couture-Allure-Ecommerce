<?php
$HOST = 'localhost';
$USER = 'root';
$PASSWORD = '';
$DATABASE = 'couture_allure';

$conn = mysqli_connect($HOST, $USER, $PASSWORD, $DATABASE);
if (mysqli_connect_error()) {
    echo "Error: Unable to connect to MySQL <br>";
    echo "Message: ".mysqli_connect_error()."<br>";
}
?>