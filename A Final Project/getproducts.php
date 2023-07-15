<?php
    require_once('../A Final Project/connection.php');

    // Create query
    $query = "SELECT * FROM product WHERE Category ='limited'";
    $result = $conn->query($query);
    if(!$result) {
        die("Query failed: " . $conn->error);
    }else{
        // Convert query result to array
        $rows = $result->fetch_all(MYSQLI_ASSOC);
    }

    $records = $result->num_rows;
    // echo "<pre>";
    // var_dump($rows);
    // echo "</pre>";
    // die();
?>