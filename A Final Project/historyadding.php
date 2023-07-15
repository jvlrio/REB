<?php
    require_once('connection.php');
    if(isset($_POST['submit'])){        
        $playerid = $_POST['playerid'];
        $total = $_POST['total'];
        $cnumber = $_POST['cnumber'];
        $purdate = $_POST['purdate'];

        $query = "INSERT INTO history (playerid, total, contactnumber, purchasedate) VALUES ('$playerid', '$total', '$cnumber', '$purdate')";
        $result = $conn->query($query);

        $querydel = "DELETE FROM cart WHERE playerid = '$playerid'";
        $resultdel = $conn->query($querydel);

        if(!$result || !$resultdel){
            die("Query failed: " . $conn->error);
        }else{
            $_SESSION['playerid'] = $playerid;
            require("historypurchased.php");
        }
    }
?>