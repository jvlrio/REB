<?php 
    session_start(); 
    if(isset($_SESSION['islogged'])):
        header("Location: index.php");
    else:
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<style>
        body{
            margin: 0;
            padding: 0;
            font-family: 'Jost', sans-serif;
			min-height: 100vh;
			background-repeat: no-repeat;
			overflow: hidden;
			display: flex;
  			justify-content: center;
			align-items: center;
            background: rgb(88,193,216);
            background: linear-gradient(207deg, rgba(88,193,216,1) 10%, rgba(171,94,215,1) 59%, rgba(230,101,202,1) 100%);
		}
		.login{
            text-align: center;
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 3.5px );
            -webkit-backdrop-filter: blur( 3.5px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
            width: 350px;
            height: 100%;
            overflow: hidden;
            background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
			
		}
		.main{
			position: fixed;
			display: flex;
  			justify-content: center;
			align-items: center;
		}
        label{
            color: #fff;
            font-size: 2em;
            justify-content: center;
            display: flex;
            margin: 50px;
            font-weight: bold;
            cursor: pointer;
            transition: .5s ease-in-out;
        }
        input{
            width: 75%;
            height: 20px;
            justify-content: center;
            display: flex;
            margin: 15px auto;
            padding: 10px;            
            background: #ffffffc4;
            box-shadow: inset #abacaf 0 0 0 2px;
            border: 0;
            appearance: none;
            position: relative;
            border-radius: 10px;
            line-height: 1.4;
            color: rgb(0, 0, 0);
            font-size: 16px;
            font-weight: 400;
            transition: all .2s ease;
        }
        input:hover{
            box-shadow: 0 0 0 0 #fff inset, #1de9b6 0 0 0 2px;
        }
        input:focus{
            background: #fff;
            outline: 0;
            box-shadow: 0 0 0 0 #fff inset, #1de9b6 0 0 0 3px;
        }
        button{
            width: 60%;
            height: 40px;
            margin: 10px auto;
            justify-content: center;
            display: block;
            color: #fff;
            background: #49baec;
            font-size: 1em;
            font-weight: bold;
            margin-top: 20px;
            outline: none;
            border: none;
            border-radius: 5px;
            transition: .2s ease-in;
            cursor: pointer;
        }
        button:hover{
            background: #03e9f4;
            color: #050801;
            box-shadow: 0 0 5px #03e9f4,
                        0 0 25px #03e9f4,
                        0 0 50px #03e9f4,
                        0 0 200px #03e9f4
        }
        

		.slowpoke{
			position: fixed;
            left: 60%;
            top: 37%;
		}
		.slowpoke img{
			width: 290px;
		}
        .ponyta{
            position: fixed;
            bottom: 15%;
            left: 20%;
        }
        .ponyta img{
			width: 340px;
		}
        .clefairy{    
            position: fixed;
            top: 7%;
            left: 30%;
        }
        .clefairy img{
			width: 190px;
		}

        .circle{
            background-color: #ffffff45;
            border-radius: 50%;
            position: fixed;
        }
        .c0{
            height: 500px;
            width: 500px;
            left: 75%;
            top: -15%;
        }
        .c1{
            height: 150px;
            width: 150px;
            left: 70%;
            top: 32%;
        }
        .c2{
            height: 120px;
            width: 120px;
            left: 8%;
            top: 8%;
        }
        .c3{
            height: 500px;
            width: 500px;
            left: 0%;
            top: 82%;
        }
        .c4{
            height: 160px;
            width: 160px;
            left: 22%;
            top: 80%;
        }

        @media screen and (max-width: 1200px) {
            .login{    
                height: 425px;
                width: 350px;
            }
            .clefairy{
                top: 45px;
                left: 28%;
            }
            .ponyta{
                top: 49%;
                left: 8%;
            }
            .ponyta img{
                width: 330px;
            }
            .slowpoke{
                left: 60%;
                top: 46%;
            }
        }
        @media screen and (max-width: 980px) {
            .box{
                width: 300px;
                height: 420px;
            }
            label{
                margin: 50px 60px;
            }
            .login{    
                height: 425px;
                width: 350px;
            }
            .clefairy{
                top: 63px;
                left: 23%;
            }
            .clefairy img{
				width: 150px;
			}
            .ponyta{
                top: 59%;
                left: 7%;
            }
            .ponyta img{
                width: 255px;
            }
            .slowpoke{
                left: 67%;
                top: 40%;
            }
			.slowpoke img{
				width: 230px;
			} 
		}

        @media screen and (max-width: 768px) {
            .box{
                width: 300px;
                height: 420px;
            }
            label{
                margin: 50px 60px;
            }
            .login{    
                height: 425px;
                width: 350px;
            }
            .clefairy{
                top: 70px;
                left: 16%;
            }
            .clefairy img{
				width: 150px;
			}
            .ponyta{
                top: 57%;
                left: -8%;
            }
            .ponyta img{
                width: 255px;
            }
            .slowpoke{
                left: 67%;
                top: 44%;
            }
			.slowpoke img{
				width: 230px;
			}
		}

        @media screen and (max-width: 576px) {
            body{
                background: rgb(88,193,216);
                background: linear-gradient(146deg, rgba(88,193,216,1) 10%, rgba(171,94,215,1) 59%, rgba(230,101,202,1) 100%);
            }
            .box{
                width: 300px;
                height: 420px;
            }
            label{
                margin: 50px 60px;
            }
            
            .ponyta{
                top: 150%;
                left: -4%;
            }
            .ponyta img{
                width: 210px;
            }
            .login{    
                height: 390px;
                width: 350px;
            }
            .slowpoke{
                left: 70%;
                top: 90%;
            }
			.slowpoke img{
				width: 230px;
			}
            .clefairy{
                top: 6%;
                left: 8%;
            }
            .clefairy img{
				width: 125px;
			}
            .main{
                position: relative;
                bottom: 50px;
            }
		}
        .errawr{
            text-align: right;
            margin-right: 25px;
            color: red; 
            font-size: 15px;
        }
	</style>
    
</head>
<body>
    <div class="circle c0"></div>
    <div class="circle c1"></div>
    <div class="circle c2"></div>
    <div class="circle c3"></div>
    <div class="circle c4"></div>
	<div class="main">
        <div class="login">
            <form action="2a-ValidLogin.php" method="post">
                <label for="playerid">LOG IN</label>
                <input type="text" name="playerid" placeholder="Player ID" value="<?php
                                                                            if (isset($_SESSION['playerid'])) {
                                                                                echo $_SESSION['playerid'];
                                                                            } ?>" required>

                <input type="password" name="pswd" placeholder="Password" value="<?php
                                                                            if (isset($_SESSION['pswd'])) {
                                                                                echo $_SESSION['pswd'];
                                                                            } ?>" required>
                <?php 
                    if (isset($_SESSION['iderror'])) :?>
                    <div class="errawr">
                        <?php
                            if (isset($_SESSION['iderror'])) :
                                echo $_SESSION['iderror'];
                                unset($_SESSION['iderror']);
                            endif;
                        ?>
                    </div>
                <?php endif;?>
                <?php 
                    if (isset($_SESSION['notmatch'])) :?>
                    <div class="errawr">
                        <?php
                            if (isset($_SESSION['notmatch'])) :
                                echo $_SESSION['notmatch'];
                                unset($_SESSION['notmatch']);
                            endif;
                        ?>
                    </div>
                <?php endif;?>
                <button type="submit" name="submit">Log in</button><br>
                <h5 style="color: white;">Don't have an account? <a href="1-Registration.php">Sign up</a></h5> 
            </form>
        </div>
    </div>
        <div class="clefairy">
            <img src="https://drive.google.com/uc?id=1zN_AQkrQJuUAl4d05fBIVKwIYc8zlcrB" alt="clefairy">
        </div>
        <div class="ponyta">
            <img src="https://drive.google.com/uc?id=10Ftn6PmcypXGb-uXQLzmRxFMZwFST976" alt="ponyta">
        </div>
	    <div class="slowpoke">
		    <img src="https://drive.google.com/uc?id=1gBtjoyJZ0dC9JRAH8ticL2XRZYjshc_8" alt="slowpoke">
  	    </div>
</body>
</html>
<?php
    endif;
?>