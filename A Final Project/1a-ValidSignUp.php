<?php
        session_start();
        $_SESSION['playerid'] = $_POST['playerid'];        
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['pswd'] = $_POST['pswd'];
        $_SESSION['cpswd'] = $_POST['cpswd'];
        
        if(!preg_match("/[0-9][0-9][0-9][0-9]\s[0-9][0-9][0-9][0-9]\s[0-9][0-9][0-9][0-9]$/", $_POST['playerid'])) {
            $_SESSION['iderror'] = "*Player ID is invalid.*";
        }
        
        if($_POST['pswd'] != $_POST['cpswd']) {
            $_SESSION['passerror'] = "Passwords do not match.";
        }

        if(isset($_SESSION['iderror']) || isset($_SESSION['passerror'])){
            header("Location: 1-Registration.php");   
        } else {
            require_once('1b-InsertPlayer.php');
        }
?>  