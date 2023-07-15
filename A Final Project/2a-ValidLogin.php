<?php
        session_start();
        $playerid = $_POST['playerid'];
        $pswd = $_POST['pswd'];
        
        if(!preg_match("/[0-9][0-9][0-9][0-9]\s[0-9][0-9][0-9][0-9]\s[0-9][0-9][0-9][0-9]$/", $playerid)) {
            $_SESSION['iderror'] = "*Player ID is invalid.*";
        }else{
            require_once('connection.php');
            if(isset($_POST['submit'])){
                $query = "SELECT playerid,pswd FROM players WHERE playerid = '$playerid' && pswd = '$pswd'";
                $result = $conn->query($query);
                $rows = $result->fetch_all(MYSQLI_ASSOC);

                foreach($rows as $row):
                    $verifyid = $row['playerid'];
                    $verifypswd = $row['pswd'];
                endforeach;
                if ($playerid != $verifyid && $pswd != $verifypswd) {
                    $_SESSION['notmatch'] = "Player ID or Password is incorrect.";
                }else{
                    $_SESSION['islogged'] = true;
                }
            }
        }
        
        if(isset($_SESSION['iderror']) || isset($_SESSION['notmatch'])){
            header("Location: 2-Login.php");   
        } else {
            require_once('index.php');
        }
?>  