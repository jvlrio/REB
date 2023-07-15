<?php
    session_start();
    $_SESSION['islogged'] == true;
    require('Records.php');
    require_once('connection.php');
    $playerid = $_GET['playerid'];
    $query = "SELECT * FROM players WHERE playerid = '$playerid'";
    $result = $conn->query($query);

    if(!$result){
        die("Query failed: " . $conn->error);
    }else{
        $row = $result->fetch_assoc();
        $image = $row['img'];
        $playerid = $row['playerid'];
        if(empty($row['firstname'])){
            $firstname = '';
        }else{
            $firstname = $row['firstname'];
        }if(empty($row['lastname'])){
            $lastname = '';
        }else{
            $lastname = $row['lastname'];
        }
        $email = $row['email'];
        $pswd = $row['pswd'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caprasimo&display=swap" rel="stylesheet">
    <title>Account</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
            background: rgb(15,255,252);
            background: linear-gradient(321deg, rgba(15,255,252,1) 10%, rgba(0,0,0,1) 53%, rgba(255,27,177,1) 100%);
        }
        .box{
            height: 90vh;
            width: 70vw;
            background: rgba( 255, 255, 255, 0.9 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 0px );
            -webkit-backdrop-filter: blur( 0px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );  
            display: grid;
            align-items: center;   
        }

        .content{
            margin-bottom: 45px;
            display: flex;
            justify-content: space-evenly;
            align-items: flex-start;
        } 
        .profile{
          width: 250px;
          height: 250px;
          overflow: hidden;
          border-radius: 50%;
        }

        .profile img{
            width: 100%;
        }

        .content input{
            border: none;
            height: 40px;
            width: 300px;
            background: #ffffff00;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-bottom: 2px solid black;
            padding-left: 20px;
        }

        .box h1{
            margin: 0;
            text-align: center;
            font-family: 'Caprasimo', cursive;
        }

        .box h3{
            margin: 5px;
            font-size: 1.3em;
        }

        .box p{
            font-size: 1em;
            text-align: center;
        }

        .btns{
          position: absolute;
          bottom: 22%;
          left: 22%;
        }
        .back a {    
          width: 83px;
          height: 83px;
          position: absolute;
          margin-left: 10px;
          background-color: #ffffff;
          border-radius: 50px;
          opacity: 1;
          transition: all 0.4s cubic-bezier(0.215, 0.61, 0.355, 1);
          -webkit-box-shadow: 0px 0px 30px 0px rgba(247, 149, 29, 0.5);
          -moz-box-shadow: 0px 0px 30px 0px rgba(247, 149, 29, 0.5);
          box-shadow: 0px 0px 30px 0px rgba(247, 149, 29, 0.5);
        }
        .back a > span {
          background-color: #f5a700;
          display: block;
          height: 10px;
          border-radius: 6px;
          position: relative;
          transition: all 0.4s cubic-bezier(0.215, 0.61, 0.355, 1);
          position: absolute;
          top: 50%;
          margin-top: -6px;
          left: 18px;
          width: 44px;
          display: -webkit-box;
          display: -moz-box;
          display: -ms-flexbox;
          display: -webkit-flex;
          display: flex;
          -webkit-justify-content: space-between;
          justify-content: space-between;
          -moz-justify-content: space-between;
          -ms-justify-content: space-between;
        }
        .back a > span span {
          display: block;
          background-color: #ed7f00;
          width: 12px;
          height: 12px;
          border-radius: 6px;
          transition: all 0.4s cubic-bezier(0.215, 0.61, 0.355, 1);
          position: absolute;
          left: 0;
          top: 0;
        }
        .back a > span.left {
          transform: rotate(45deg);
          transform-origin: center;
        }
        .back a > span.left .circle-left {
          transition: all 0.4s cubic-bezier(0.215, 0.61, 0.355, 1);
          margin-top: -1px;
          margin-left: -3px;
        }
        .back a > span.left .circle-right {
          transition: all 0.4s cubic-bezier(0.215, 0.61, 0.355, 1);
          margin-left: 36px;
          margin-top: -1px;
        }
        .back a > span.right {
          transform: rotate(-45deg);
          transform-origin: center;
        }
        .back a > span.right .circle-left {
          transition: all 0.4s cubic-bezier(0.215, 0.61, 0.355, 1);
          margin-left: -3px;
          margin-top: -1px;
        }
        .back a > span.right .circle-right {
          transition: all 0.4s cubic-bezier(0.215, 0.61, 0.355, 1);
          margin-left: 36px;
          margin-top: -1px;
        }
        .back a:hover > span {
          background-color: #2faee0;
          transition: all 0.4s cubic-bezier(0.215, 0.61, 0.355, 1);
        }
        .back a:hover > span span {
          transition: all 0.4s cubic-bezier(0.215, 0.61, 0.355, 1);
          background-color: #008ac9;
        }
        .back a:hover > span.left .circle-left {
          transition: all 0.4s cubic-bezier(0.215, 0.61, 0.355, 1);
          margin-left: 34px;
        }
        .back a:hover > span.left .circle-right {
          transition: all 0.4s cubic-bezier(0.215, 0.61, 0.355, 1);
          margin-left: -2px;
        }
        .back a:hover > span.right .circle-left {
          transition: all 0.4s cubic-bezier(0.215, 0.61, 0.355, 1);
          margin-left: 34px;
        }
        .back a:hover > span.right .circle-right {
          transition: all 0.4s cubic-bezier(0.215, 0.61, 0.355, 1);
          margin-left: -2px;
        }
    </style>
</head>
<body>
    <div class="box">
    <div class="back">
      <a href="exit.php?playerid=<?php echo $playerid;?>">
        <span class="left">
          <span class="circle-left"></span>
          <span class="circle-right"></span>
        </span>
        <span class="right">
          <span class="circle-left"></span>
          <span class="circle-right"></span>
        </span>
      </a>
    </div>
    <h1>Account Setting</h1>
    <p>To Edit the account is by clicking the infomation you entered that able<br> to modify. Account Setting is for update and delete feature.</p>
        <div class="content">
        <?php 
                    if (isset($_SESSION['updated'])) :?>
                    <div class="errawr">
                        <?php
                            if (isset($_SESSION['updated'])) :
                                echo $_SESSION['updated'];
                                unset($_SESSION['updated']);
                            endif;
                        ?>
                    </div>
                <?php endif;?>
            <div class="profile">
                <?php   if($row['img'] == null): ?>
                        <img class="profilepicture" src="<?php echo 'images/noprofilepicture.png'; ?>">
                <?php   else: ?>
                        <img class="profilepicture" src="<?php echo 'images/'.$row['img']; ?>">    
                <?php   endif; ?>
            </div>
            <form action="update.php" method="post" enctype="multipart/form-data">
                <h3>Change Profile Picture</h3>
                <input type="file" name="image" id="image" value="<?php echo $image;?>" >
                
                <h3>Player ID: <?php echo $playerid;?></h3>
                <input type="hidden" name="playerid" value="<?php echo $playerid;?>">

                <h3> First name </h3>
                <input type="text" name="firstname" value="<?php echo $firstname;?>" required>
                <?php 
                    if (isset($_SESSION['efname'])) :?>
                    <div class="errawr">
                        <?php
                            if (isset($_SESSION['efname'])) :
                                echo $_SESSION['efname'];
                                unset($_SESSION['efname']);
                            endif;
                        ?>
                    </div>
                <?php endif;?>

                <h3> Last name </h3>
                <input type="text" name="lastname" value="<?php echo $lastname;?>" required>
                <?php 
                    if (isset($_SESSION['elname'])) :?>
                    <div class="errawr">
                        <?php
                            if (isset($_SESSION['elname'])) :
                                echo $_SESSION['elname'];
                                unset($_SESSION['elname']);
                            endif;
                        ?>
                    </div>
                <?php endif;?>

                <h3> Email </h3>
                <input type="email" name="email" value="<?php echo $email;?>" required>
                
                <h3> Password </h3>
                <input type="text" name="pswd" value="<?php echo $pswd;?>" required>
                <div class="btns">
                <?php 
                    if (isset($_SESSION['updated'])) :?>
                    <div class="errawr">
                        <?php
                            if (isset($_SESSION['updated'])) :
                                echo $_SESSION['updated'];
                                unset($_SESSION['updated']);
                            endif;
                        ?>
                    </div>
                <?php endif;?>
                  <button type="submit" name="submit" class="btn btn-success">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
<?php } ?>