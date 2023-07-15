<?php
    require_once('connection.php');
    if(isset($_POST['submit'])){        
        $playerid = $_POST['playerid'];
        $ProductID = $_POST['ProductID'];
        $ProductName = $_POST['ProductName'];
        $Price = $_POST['Price'];        
        $picture = $_POST['picture'];

        $query = "INSERT INTO cart (playerid, ProductID, ProductName, Price, Quantity, picture) VALUES ('$playerid', '$ProductID', '$ProductName', '$Price', '1', '$picture')";
        $result = $conn->query($query);

        if(!$result){
            die("Query failed: " . $conn->error);
        }else{
            require_once('index.php');
        }
    }
?>