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
            background: rgb(5,43,122);
            background: linear-gradient(336deg, rgba(5,43,122,1) 10%, rgba(49,175,227,1) 49%, rgba(0,246,231,1) 80%);
		}
		.register{
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
            margin: 55px;
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
        
		.bulbasaur{
			position: fixed;
			right: 8%;
    		top: 40%;
		}
		.bulbasaur img{
			width: 475px;
		}
        .snorlax{
            position: fixed;
            top: 20%;
            left: 10%;
        }
        .snorlax img{
			width: 440px;
		}
        .spheal{    
            position: fixed;
            top: 6%;
            right: 24%;
        }
        .spheal img{
			width: 200px;
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
            .spheal{
                top: 8%;
                right: 26%;
            }
            .spheal img{
				width: 169px;
			}            
            .bulbasaur{
                right: 8%;
                top: 47%;
            }
			.bulbasaur img{
				width: 390px;
			}
            .snorlax{
                top: 31%;
                left: 9%;
            }
        }
        
        @media screen and (max-width: 980px) {
            label{
                margin: 38px 60px;
            }
            .register{
                height: 100%;
                width: 322px;
            }
            .spheal{
                top: 10%;
                right: 22%;
            }
            .spheal img{
				width: 145px;
			}            
            .bulbasaur{
                right: 3%;
                top: 44%;
            }
			.bulbasaur img{
				width: 360px;
			}
            .snorlax{
                top: 31%;
                left: 4%;
            }
            .snorlax img{
                width: 400px;
            }
        }

        @media screen and (max-width: 768px) {
            label{
                margin: 38px 60px;
            }
            .register{
                height: 100%;
                width: 322px;
            }
            .spheal{
                top: 10%;
                right: 15%;
            }
            .spheal img{
				width: 145px;
			}            
            .bulbasaur{
                right: -10%;
                top: 48%;
            }
			.bulbasaur img{
				width: 330px;
			}
            .snorlax{
                top: 34%;
                left: -11%;
            }
            .snorlax img{
                width: 400px;
            }
        }

        @media screen and (max-width: 576px) {
            body{
                background: rgb(5,43,122);
                background: linear-gradient(45deg, rgba(5,43,122,1) 10%, rgba(49,175,227,1) 49%, rgba(0,246,231,1) 80%);
            }
            .box{
                height: 463px;
            }
            label{
                margin: 38px 60px;
            }
            .main{
                position: relative;
                bottom: 50px;
            }
            .register{
                height: 100%;
                width: 322px;
            }
            .spheal{
                top: 0%;
                left: 0%;
            }
            .spheal img{
				width: 130px;
			}            
            .bulbasaur{
                left: -13%;
                top: 63%;
            }
			.bulbasaur img{
				width: 300px;
			}
            .snorlax{
                top: 44%;
                left: 40%;
            }
            .snorlax img{
                width: 400px;
            }
		}
        
        .errawr{
            text-align: right;
            margin-right: 25px;
            color: red; 
            font-size: 12px;
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
        <div class="snorlax">
            <img src="https://drive.google.com/uc?id=1aKRPam8Lh2EUswc1KKLZMOuRlFiXG_LD" alt="snorlax">
        </div>
        <div class="register">
            <form action="1a-ValidSignUp.php" method="post" enctype="multipart/form-data">
                <label for="playerid">SIGN UP</label>
                <input type="text" name="playerid" placeholder="Player ID" value="<?php
                                                                            if (isset($_SESSION['playerid'])) {
                                                                                echo $_SESSION['playerid'];
                                                                            } ?>" required>
                <?php
                    if (isset($_SESSION['iderror'])) :
                ?>
                    <div class="errawr">
                        <?php
                            if (isset($_SESSION['iderror'])) :
                                echo $_SESSION['iderror'];
                                unset($_SESSION['iderror']);
                            endif;
                        ?>
                    </div>
                <?php endif;?>
                <input type="email" name="email" placeholder="Email" value="<?php
                                                                            if (isset($_SESSION['email'])) {
                                                                                echo $_SESSION['email'];
                                                                            } ?>" required>
                <input type="password" name="pswd" placeholder="Password" value="<?php
                                                                            if (isset($_SESSION['pswd'])) {
                                                                                echo $_SESSION['pswd'];
                                                                            } ?>" required>
                <input type="password" name="cpswd" placeholder="Confirm Password" value="<?php
                                                                            if (isset($_SESSION['cpswd'])) {
                                                                                echo $_SESSION['cpswd'];
                                                                            } ?>" required>
                <?php 
                    if (isset($_SESSION['passerror'])) :?>
                    <div class="errawr">
                        <?php
                            if (isset($_SESSION['passerror'])) :
                                echo $_SESSION['passerror'];
                                unset($_SESSION['passerror']);
                            endif;
                        ?>
                    </div>
                <?php endif;?>
                <input type="file" name="image" id="image">
                <button type="submit" name="submit">Sign up</button>
                <h5 style="color: white;">Already have an account? <a href="2-Login.php">Log in</a></h5> 
            </form>
        </div>
        <div class="spheal">
        <img src="https://drive.google.com/uc?id=14UJf5uImu3ZiztTUFhVfE_C4uLlji2fm" alt="spheal">
        </div>
	    <div class="bulbasaur">
		<img src="https://drive.google.com/uc?id=1fb62hR6sjLdb_frEt21rGV424nzhuGC_" alt="bulbasaur">
  	</div>
</body>
</html>
<?php
    endif;
?>