<?php
    require_once('connection.php');    
        $playerid = $_SESSION['playerid'];
        $query = "SELECT * FROM history WHERE playerid = '$playerid'";
        $result = $conn->query($query);

        if(!$result) {
            die("Query failed: " . $conn->error);
        }else{
            $rows = $result->fetch_all(MYSQLI_ASSOC);
        }
?>