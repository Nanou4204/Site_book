<?php

    if(isset($_POST["send"])){
        // extraction des variables
        extract($_POST)

        if(isset()){

        }

        else{
            $info = "veuillez remplis tout les champs"
        }
    }

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Nous contacter</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='../Css/styleForm.css'>
    </head>

    <body>
        <header>
            <a href="../../index.html" class="white">
                <img src="../image/LOGO_CAP.png" alt="logo_CAP">
                vous accompagnent dans tout vos projets de<br>
                construction / renovation <br>
                depuis 2009
            </a>
        </header>

        <h1>Nous contacter</h1>
        <FORM action="" method="post">
            <label>Nom/ prénom</label>
            <INPUT TYPE="text" NAME="nom/prénom" required>
            <label>Email</label>
            <INPUT TYPE="text" NAME ="Mail" required>
            <label>Objet</label>
            <INPUT TYPE="text" NAME ="objet" required>
            <label>Message</label>
            <TEXTAREA NAME="Message" ROWS ="10" COLS ="30" required></TEXTAREA>
            <br> <br>
            <button name="envoyer">envoyer</button>
        </FORM>

        <footer>
            <div class="footer">
                <div class="footer-item">
                    <p>
                        Suivez nous: <br>
                    </p>
                    <a href="https://www.instagram.com/cap_coordinations_projects/?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw%3D%3D" target="_blank" class="logo">
                        <img src="../image/insta.png" alt="Logo instagram" height="50">
                    </a>
                    <a href="https://www.facebook.com/p/CAP-Coordinations-Acquisitions-Projects-100063683823755/" target="_blank" class="logo">
                        <img src="../image/facebook.png" alt="Logo facebook" height="50">
                    </a>
                </div>
        
                <div class="footer-item">
                    <p>
                        Contactez-nous :
                    </p>
                    <p class="description">
                        73 avenue Marx Dormoy<br>
                        63000 Clermont-Ferrand<br>
                        04 73 19 04 73<br>
                        greg.launier@cap-coordinations.fr
                    </p>
                </div>
        
                <div class="footer-item">
                    <p>
                        NOTRE SITE: <br>
                    </p>
                    <p class="description">
                        <img src="../image/LOGO_CAP.png" alt="Logo CAP" style="width:280px;height:130;">
                        www.cap-coordinations.fr
                    </p>
                </div>
        
                <div class="footer-item">
                    <p>
                        À propos de nous: <br>
                    </p>
                    <p class="description">
                        <a href="equipe.html" class="white_under">
                            Qui sommes nous ?
                        </a>
                        <br>
                        <a href="FAQ.html" class="white_under">
                            FAQ
                        </a>
                         <br>
                        Nous contacter
                    </p>
                </div>
            </div>
            <p class="info-comp">
                <a href="Mention_legale.html" class="white">
                    © site produit par les élèves du BUT MMI 1 de l'IUT de Vichy a déstination de l'entreprise CAP-coordination
                </a>
            </p>
        </footer>
    </body>
</html>
