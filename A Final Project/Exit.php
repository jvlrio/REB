<?php
        session_start();
        $playerid = $_GET['playerid'];
        
            require_once('connection.php');
                $query = "SELECT * FROM players WHERE playerid = '$playerid'";
                $result = $conn->query($query);
                $rows = $result->fetch_all(MYSQLI_ASSOC);

                if(!$result) {
                    die("Query failed: " . $conn->error);
                }else{
                    // Convert query result to array
                    require_once('index.php');
                }
        