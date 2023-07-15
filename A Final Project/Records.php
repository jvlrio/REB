<?php
    require_once('connection.php');    
    if(isset($_POST['submit'])){
        $playerid = $_POST['playerid'];
        $query = "SELECT * FROM players WHERE playerid = '$playerid'";
        $result = $conn->query($query);

        if(!$result) {
            die("Query failed: " . $conn->error);
        }else{
            $rows = $result->fetch_all(MYSQLI_ASSOC);
        }
    }
?>