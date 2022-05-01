<?php
    require('../db.php');

    // if() echo $_GET['category'];
    $sql = isset($_GET['category']) ? "SELECT * FROM product WHERE category='{$_GET['category']}'" :"SELECT * FROM product";
    if(isset($_GET['id'])) $sql = "SELECT * FROM product WHERE id='{$_GET['id']}'";
    
    $result = mysqli_query($conn, $sql);

    header('Content-Type: application/json');
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        //create an array
        $emparray = array();
        while($row = mysqli_fetch_assoc($result)){
            $emparray[] = $row;
        }
        echo json_encode($emparray);
    } else {
        http_response_code(400);
        echo json_encode((object) ["results"=>0]);
    }
?>