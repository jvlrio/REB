<?php
    require_once('connect.php');
    if(isset($_GET['playerid'])){
        $playerid = $_GET['playerid'];
        $query = "DELETE FROM players WHERE playerid=$playerid";
        $result = $conn->query($query);
        if(!$result){
            die("Query failed: " . $conn->error);
        }else{
            
            header("Location: 2-Login.php");
        }
    }
?>