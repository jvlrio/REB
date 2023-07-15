<?php
    require_once('connection.php');
    if(isset($_POST['submit'])){
        $tmp_image = $_FILES['image']['name'];
        $playerid = $_POST['playerid'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $pswd = $_POST['pswd'];
        $image = $playerid . "." . pathinfo($tmp_image, PATHINFO_EXTENSION);

        $query = "UPDATE players SET img='$image', playerid='$playerid', firstname='$firstname', lastname='$lastname', email='$email', pswd='$pswd' WHERE playerid='$playerid'";
        /*echo "<pre>";
        var_dump($query);
        echo "</pre>";
        die();*/
        
        move_uploaded_file($_FILES['image']['tmp_name'], "images/" . $image);

        if ($conn->query($query) === TRUE) {
            $_SESSION['updated'] = "Successfully Changed!";
            header("Location: 4-UserProfile.php?playerid=".$playerid);
        }else{
            die("Query failed: " . $conn->error);
        }
    }
?>