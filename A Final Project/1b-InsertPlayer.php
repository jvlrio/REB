<?php
    require_once('connection.php');
    if(isset($_POST['submit'])){
        $tmp_image = $_FILES['image']['name'];
        $playerid = $_POST['playerid'];
        $email = $_POST['email'];
        $pswd = $_POST['pswd'];
        $image = $playerid . "." . pathinfo($tmp_image, PATHINFO_EXTENSION);

        $query = "INSERT INTO players (img, playerid, email, pswd) VALUES ('$image', '$playerid', '$email', '$pswd')";
        move_uploaded_file($_FILES['image']['tmp_name'], "images/" . $image);
        $result = $conn->query($query);

        if(!$result){
            die("Query failed: " . $conn->error);
        }else{
            header("Location: 2-Login.php");
        }
    }
?>