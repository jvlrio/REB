<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <script src="https://kit.fontawesome.com/de57b57454.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        
@import url('https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Agdasima";
}

.title {
    text-align: center;
    margin: 12rem 0;
    letter-spacing: 2px;
    font-family: "Agdasima";
    text-shadow: 0 5px 6px skyblue;
}

footer {
    background: url("https://i.pinimg.com/564x/74/a5/fb/74a5fb471bdd620c376b35ae357cef13.jpg");
    background-repeat: no-repeat;
    background-size: 1850px 100%;
    color: white;
    overflow-x: hidden;
} 
        .container-footer{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    width: 100%;    
    height: 100vh;
    background-color: 0,0,0, 0.8;
    background-color: rgba(0,0,0, 0.8);
        }
        .col{
    width: 500px;
    height: 60vh;    
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding: 70px 15px;
        }

        
.logo {
    margin: 12px 0;
    letter-spacing: 3px;
    font-family: "Agdasima";
    font-size: 25px;
    text-shadow: 0 0 4px white;
    color: white;
}

.col h5 {
    width: 50%;
    text-align: left;
    font-size: 30px;
    letter-spacing: 2px;
    position: relative;
    padding-bottom: 8px;
}

.col h5::after{
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 60%;
    background-color: skyblue;
}

.footer-link{
    margin: 12px 0;
    list-style: none;
}

.footer-link li {
    text-decoration: none;
    color: white;
    transition: 0.1s;
}


.footer-link li a:hover{
    color: skyblue;
    text-shadow: 0 0 12px;
}
.footer-link p{
    font-size: 1em;
}


.contact-details li {
    list-style: none;
    margin: 10px 0;
    display: flex;
    align-items: center;
    font-family: "Agdasima";

}

.contact-details li i {
    height: 36px;
    width: 36px;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: 0.3s;
    margin-right: 20px;

}

.contact-details li i:hover {
    color: white;
}

.social-link-icons {
    display: flex;
    list-style: none;
}

.social-link-icons li {
    margin-right: 15px;
}

.social-link-icons li a {
    align-items: auto;
    height: 35px;
    width: 35px;
    border: 3px solid none;
    background-color: none;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: 0.3s;
}

.social-link-icons li a:hover {
    background: transparent;
    color: skyblue;
}

.desc {
    margin: 8px 0;
    letter-spacing: 2px;
    font-family: "Agdasima";
    font-size: 18px;
}

.footer-link {
    margin: 12px 0;
    letter-spacing: 3px;
    font-family: "Agdasima";
    font-size: 25px;
}

.contact-details {
    margin: 8px 0;
    letter-spacing: 2px;
    font-family: "Agdasima";
    font-size: 18px;
}

.social-link-icons {
    margin: 10px 0;
    letter-spacing: 2px;
    font-size: 17px;
}

.contact, .nian{
    position: relative;
    bottom: 180px;
    left: 255px;

}

.nian img{
    width:150px;
    height:160px;
}

@media screen and (min-width: 1220px) {
    .container-footer{
        align-items: flex-start;
    }

    /* FIRST ROW FOOTER */
    .col{
        padding: 32px 15px;
        width: 50%;
        height: 0vh;
    }
    .col h5 {
        font-size: 30px;
        width: 170px;
    }
    .description{
        position: relative;
        right: 110px;
        width: 30%;
    }
    
    /* SECOND ROW FOOTER */
    .footer-link p{
        font-size: 0.9em;
    } 
    
    .quicklink{
        position: relative;
        top: 2%;
        left: -30px;
    }

    .services{
        position: relative;
        top: -31.2%;
        left: 60%;
    }

    /* THIRD ROW FOOTER */
    .contact{
        position: relative;
        top: 0%;
        left: -12%;
    }
    .contact span{
        font-size: 0.7em;
    }
    .contact-details i {
        font-size: 1.6em;
    }
    .social-link-icons{
        position: relative;
        top: -32px;
    }
    .social-link-icons i{
        font-size: 1.5em;
    }
    .nian{
        top: -20%;
        left: 20%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .nian img{
        width: 140px;
        height: 150px;
    }
}

@media screen and (min-width: 993px) {
    .container-footer{
        align-items: flex-start;
    }

    /* FIRST ROW FOOTER */
    .col{
        padding: 32px 15px;
        width: 50%;
        height: 0vh;
    }
    .col h5 {
        font-size: 22px;
        width: 146px;
    }
    .description{
        width: 45%;
    }
    .logo {
        font-size: 22px; /*h3*/
    }
    .desc {
        font-size: 18px; /*p*/
    }
    
    /* SECOND ROW FOOTER */
    .footer-link p{
        font-size: 0.7em;
    } 
    
    .quicklink{
        position: relative;
        top: 2%;
        left: 50px;
    }

    .services{
        position: relative;
        top: -10%;
        left: 54%;
    }

    /* THIRD ROW FOOTER */
    .contact{
        position: relative;
        top: 10%;
        left: 4%;
    }
    .contact span{
        font-size: 0.7em;
    }
    .contact-details i {
        font-size: 1.6em;
    }
    .social-link-icons{
        position: relative;
        top: -32px;
    }
    .social-link-icons i{
        font-size: 1.5em;
    }
    .nian{
        top: 15%;
        left: 0%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .nian img{
        width: 100px;
        height: 110px;
    }
}

@media screen and (max-width: 992px) {
    .container-footer{
        align-items: flex-start;
    }

    /* FIRST ROW FOOTER */
    .col{
        padding: 32px 15px;
        width: 50%;
        height: 0vh;
    }
    .col h5 {
        font-size: 22px;
        width: 146px;
    }
    .description{
        width: 45%;
    }
    .logo {
        font-size: 22px; /*h3*/
    }
    .desc {
        font-size: 18px; /*p*/
    }
    
    /* SECOND ROW FOOTER */
    .footer-link p{
        font-size: 0.7em;
    } 
    
    .quicklink{
        position: relative;
        top: 2%;
        left: 50px;
    }

    .services{
        position: relative;
        top: -10%;
        left: 54%;
    }

    /* THIRD ROW FOOTER */
    .contact{
        position: relative;
        top: 10%;
        left: 4%;
    }
    .contact span{
        font-size: 0.7em;
    }
    .contact-details i {
        font-size: 1.6em;
    }
    .social-link-icons{
        position: relative;
        top: -32px;
    }
    .social-link-icons i{
        font-size: 1.5em;
    }
    .nian{
        top: 15%;
        left: 0%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .nian img{
        width: 100px;
        height: 110px;
    }
}

@media screen and (max-width: 768px) {
    .container-footer{
        align-items: flex-start;
    }

    /* FIRST ROW FOOTER */
    .col{
        padding: 32px 15px;
        width: 50%;
        height: 0vh;
    }
    .col h5 {
        font-size: 22px;
        width: 146px;
    }
    .description{
        width: 90%;
    }
    .logo {
    font-size: 22px; /*h3*/
    }
    .desc {
        font-size: 15px; /*p*/
    }
    
    /* SECOND ROW FOOTER */
    .footer-link p{
        font-size: 0.7em;
    } 
    
    .quicklink{
        position: relative;
        top: 16%;
        left: 50px;
    }

    .services{
        position: relative;
        top: 16%;
        left: 0%;
    }

    /* THIRD ROW FOOTER */
    .contact{
        position: relative;
        top: 5%;
        left: 8%;
    }
    .contact span{
        font-size: 0.7em;
    }
    .contact-details i {
        font-size: 1.6em;
    }
    .social-link-icons{
        position: relative;
        top: -32px;
    }
    .social-link-icons i{
        font-size: 1.5em;
    }
    .nian{
        position: relative;
        top: 5%;
        left: 16%;
    }
    .nian img{
        width: 100px;
        height: 110px;
    }
}

/* MOBILE RESPONSIVE */
@media screen and (max-width: 576px) {
    .container-footer{
        align-items: flex-start;
    }
    .col{
        padding: 32px 15px;
        width: 50%;
        height: 0vh;
    }
    .col h5 {
        font-size: 20px;
        width: 135px;
    }
    .description{
        width: 90%;
    }
    .logo {
    font-size: 20px; /*h3*/
    }
    .desc {
        font-size: 13px; /*p*/
    }
    .footer-link p{
        font-size: 0.5em;
    } 
    .quicklink{
        position: relative;
        top: 20%;
        left: 20px;
    }

    .services{
        position: relative;
        top: 20%;
    }
    .contact{
        position: relative;
        top: 5%;
        left: 5%;
    }
    .contact span{
        font-size: 0.7em;
    }
    .contact-details i {
        font-size: 1.6em;
    }
    .social-link-icons{
        position: relative;
        top: -32px;
    }
    .social-link-icons i{
        font-size: 1.5em;
    }
    .nian{
        position: relative;
        top: 10%;
        left: 16%;
    }
    .nian img{
        width: 80px;
        height: 90px;
    }
}

 
    </style>
</head>
<body>
    
</body>
<footer>
    <div class="container-footer">
        <div class="col description">
            <h3 class="logo">Pokemon Go</h3>
                <p class="desc"><?php echo
                "Pokémon GO is playable in English, French, German, Italian, Russian, Japanese, Spanish, Traditional Chinese, Korean, Thai, Brazillian Portuguese, Turkish, and Indonesian. <br><br><br>
                ©2023 Niantic, Inc. ©2023 Pokémon. ©1995–2023 Nintendo / Creatures Inc. / GAME FREAK inc. Pokémon and Pokémon character names are trademarks of Nintendo. Apple and the Apple logo are trademarks of Apple Inc., registered in the U.S. and other countries. App Store is a service mark of Apple Inc. Android, Google Play and the Google Play logo are trademarks of Google LLC. During gameplay, please be aware of your surroundings and play safely. <br><br><br>
                This is for educational purposes only." ?>
                </p>
        </div>
        <div class="col quicklink">
        <h5>Quick Link</h5>
                <ul class="footer-link">
                    <li>
                        <a href="https://pokemongolive.com" style="color:white; text-decoration:none;"><p><?php echo "Pokémon GO Live" ?></p></a>
                    </li>
                    <li>
                        <a href="https://pokemongolive.com/leaderboard" style="color:white; text-decoration:none;"><p><?php echo "Leaderboard" ?></p></a>
                    </li>
                    <li>
                        <a href="https://pokemongolive.com/events" style="color:white; text-decoration:none;"><p><?php echo "Events" ?></p></a>
                    </li>
                    <li>
                        <a href="https://pokemongolive.com/news" style="color:white; text-decoration:none;"><p><?php echo "News" ?></p></a>
                    </li>
                </ul>
        </div>
        <div class="col services">
        <h5>Services</h5>
                <ul class="footer-link">
                    <li>
                        <a href="https://store.pokemongolive.com/support" style="color:white; text-decoration:none;"><p><?php echo "Support" ?></p></a>
                    </li>
                    <li>
                        <a href="https://rewards.nianticlabs.com/app/pokemongo/signin" style="color:white; text-decoration:none;"><p><?php echo "Offer Redemption" ?></p></a>
                    </li>
                    <li>
                        <a href="https://pokemongolive.com/community-day/map" style="color:white; text-decoration:none;"><p><?php echo "Community Day Map" ?></p></a>
                    </li>
                </ul>
        </div>
        <div class="col contact">
        <h5>Get in Touch</h5>
                <ul class="contact-details">
                    <li>
                        <i class="fa-solid fa-envelope fa-bounce fa-2xl"></i>
                        <span><?php echo "rebadmin@gmail.com" ?></span>
                    </li>
                    <li>
                        <i class="fa-solid fa-phone fa-shake fa-2xl"></i>
                        <span><?php echo "09127365421" ?></span>
                    </li>         
                </ul>

                <ul class="social-link-icons">
                    <li>
                        <a href="https://www.youtube.com/channel/UCA698bls2pjQyiqP9N-iaeg">
                            <i class="fa-brands fa-youtube fa-2xl"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UCA698bls2pjQyiqP9N-iaeg">
                            <i class="fa-brands fa-square-facebook fa-2xl"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/PokemonGoApp">
                            <i class="fa-brands fa-twitter fa-2xl"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/PokemonGoApp">
                            <i class="fa-brands fa-instagram fa-2xl"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.tiktok.com/@pokemongo">
                            <i class="fa-brands fa-tiktok fa-2xl"></i>
                        </a>
                    </li>
                </ul>
        </div>
        <div class="col nian">
        <ul class="niantic">
                        <a href="https://nianticlabs.com"><img src="https://lh3.googleusercontent.com/dkp1ilmJPbf9KSb4rRdLuxo0GtbkN58wGue7StPwA5idYkcHvJLZ64s7DTRlaCgMi-H8ezSZwZFFAUwuT2Ay4V4LxxNCZ0JcR-7HFhnkz-NJktqq=e365-pa-nu-w440-rw" alt="https://lh3.googleusercontent.com/dkp1ilmJPbf9KSb4rRdLuxo0GtbkN58wGue7StPwA5idYkcHvJLZ64s7DTRlaCgMi-H8ezSZwZFFAUwuT2Ay4V4LxxNCZ0JcR-7HFhnkz-NJktqq=e365-pa-nu-w440-rw">
                        </a>

                </ul>
        </div>
        
    </div>
</footer>
</html>