<?php
    require('Records.php');
    if($_SESSION['islogged'] == NULL):
        header("Location: 2-Login.php");
    endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2288793923.js" crossorigin="anonymous"></script>
    <title>HEADER</title>

    <style>
        body {
            font-family: Helvetica;
            margin: 0;
        }
        a {
            text-decoration: none;
            color: #000;
        }
        .site-header { 
            border-bottom: 1px solid #ccc;
            padding: .5em 1em;
            position: sticky;
            top: 0;
            background-color: #fff;
            z-index: 100;
        }

        .site-header::after {
            content: "";
            display: table;
            clear: both;
        }

        .site-identity {
            float: left;
        }

        .site-identity h1 {
            font-size: 1.5em;
            margin: .7em 0 .3em 0;
            color: #095d55;
            display: inline-block;
        }

        .site-identity img {
            max-width: 80px;
            float: left;
            margin: 0 10px 0 0;
        }

        
        .profile {
            float: right;
          overflow: hidden;
        }

        .profilepicture{
            width: 100%; 
        }

        ul{
            list-style: none;
            display: flex;
            align-items: center;
        }

        .display-picture{
            margin-left: auto;
            overflow: hidden;
        }

        .display-picture img{
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border:2px solid #fff;
        }

        .display-picture img:hover{
            border:2px solid #25ffe8;
        }

        .card{
            transition: 0.5s ease;
        }

        .card ul{
            display: flex;
            align-items: flex-start;
            flex-direction: column;
            background: #056469;
            position: absolute;
            top: 4rem;
            right: 1rem;
            border-radius: 10px;
            padding: 10px 50px 10px 20px;
        }

        .card ul li{
            padding: 5px 0;
            color: #FFF;
            font-size: 14px;
        }
        .hidden{
            display: none;
        }
        a{
            text-decoration: none;
            color:#fff;
        }

        li:hover{
            background-color: #023c3f;
        }

        @media (max-width: 768px) {
            .site-identity h1 {
                font-size: 1.2em;
                margin: .5em 0 .2em 0;
            }

            .site-identity img {
                max-width: 60px;
            }

            .site-navigation li {
                margin: 0.8em 0.5em 0.5em 0.5em;
            }
        }
    </style>
</head>
<body>
    <header class="site-header">
        <div class="site-identity">
            <a href="https://store.pokemongolive.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fpgo-logo.ee62bad9.png&w=1080&q=75">
                <img src="https://store.pokemongolive.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fpgo-logo.ee62bad9.png&w=1080&q=75" alt="Pokemon-Go" />
            </a>
            <h1>Web Store</h1>
        </div>
        <div class="profile">
            <?php foreach($rows as $row):
            //echo $row['firstname'];
                    if($row['img'] == NULL): ?>
                        <ul>
                            <a href="#" class="display-picture"><img class="profilepicture" src="https://cdn-icons-png.flaticon.com/512/666/666201.png"></a>
                        </ul>
                        <div class="card hidden">
                        <ul>
                            <li><a href="4-UserProfile.php?playerid=<?php echo $row['playerid'];?>"><i class="fa-solid fa-user" style="color: #ffffff;"></i>  User Profile</li></a>
                            <li><a href="5-myCart.php?playerid=<?php echo $row['playerid'];?>"><i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>  My Cart</li></a>
                            <li><a href="3-Logout.php"><i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i>  Log Out</li></a>
                        </ul>
            <?php   else: ?>
                        <ul>
                            <a href="#" class="display-picture"><img class="profilepicture" src="<?php echo 'images/'.$row['img']; ?>"></a>
                        </ul>
                        <div class="card hidden">
                        <ul>
                            <li><a href="4-UserProfile.php?playerid=<?php echo $row['playerid'];?>"><i class="fa-solid fa-user" style="color: #ffffff;"></i>  User Profile</li></a>
                            <li><a href="5-myCart.php?playerid=<?php echo $row['playerid'];?>"><i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>  My Cart</li></a>
                            <li><a href="3-Logout.php"><i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i>  Log Out</li></a>
                        </ul>
            <?php   endif;
                endforeach; ?>

      </div>
        </div>
        <script>
            let card = document.querySelector(".card"); //declearing profile card element
            let displayPicture = document.querySelector(".display-picture"); //declearing profile picture

            displayPicture.addEventListener("click", function() { //on click on profile picture toggle hidden class from css
            card.classList.toggle("hidden")})
        </script>
    </header>

</body>
</html> 