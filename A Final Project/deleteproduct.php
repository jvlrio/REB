<?php
session_start();
    require_once('connection.php');
    if(isset($_GET['ProductID']) || isset($_GET['playerid'])){
        $playerid = $_GET['playerid'];
        $ProductID = $_GET['ProductID'];
        $query = "DELETE FROM cart WHERE ProductID='$ProductID' AND playerid='$playerid'";
        
        //echo "<pre>";
        //var_dump($query);
        //echo "</pre>";
        //die();
        $result = $conn->query($query);

        if(!$result){
            die("Query failed: " . $conn->error);
        }else{
            header("Location: 5-myCart.php");
        }
    }
?>