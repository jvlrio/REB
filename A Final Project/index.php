<?php
if ($_SESSION['islogged'] == NULL) :
    header("Location: 2-Login.php");
endif;
?>
<!DOCTYPE html>
<html lang="en">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caprasimo&family=Prompt:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="CSS_Designs/index-d.css">
<script src="https://kit.fontawesome.com/2288793923.js" crossorigin="anonymous"></script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
</head>

<body>
    <?php include('header.php'); ?>
    <div class="coverpage">
        <div class="box">
            <div class="headlines">
                <h1>GOTTA CATCH <br>'EM ALL?</h1>
                <p><b><br>Join the Pokemon community and get<br> access to exclusive content, events, and products.<br> Don't miss out, sign up today!</b></p>
            </div>
            <div class="snorlax">
                <img src="https://drive.google.com/uc?id=1n8XvMqDTgHWQrYqbOVByA_-aq6LGra7c" alt="snorlax">
            </div>
        </div>
    </div>

    <?php include('GlobalEvents.php'); ?>
    <?php include('LimitedTime.php'); ?>
    <?php include('Items.php'); ?>
    <?php include('StorageUpgrades.php'); ?>
    <?php include('Pokecoins.php'); ?>

    <?php include('Footer.php'); ?>
</body>

</html>