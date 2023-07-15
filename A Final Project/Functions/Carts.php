<?php
require_once('connection.php');
    $playerid = $_POST['playerid'];
    $query = "SELECT * FROM cart WHERE playerid = '$playerid'";
    $result = $conn->query($query);

    if (!$result) {
        die("Query failed: " . $conn->error);
    } else {
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        /*$ProductID = $row['ProductID'];
    $ProductName = $row['ProductName'];
    $Price = $row['Price'];
    $Quantity = $row['Quantity'];
    $picture = $row['picture'];
    if ($rows['ProductID'] > 2):
        $rows['Quantity'] += $rows['Quantity'];
    endif;*/
}

?>