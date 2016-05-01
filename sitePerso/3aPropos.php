<?php
    
    // on cherche un user-agent apparenté à une plateforme mobile dans la variable
    $iphone = strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone');
    $ipad = strpos($_SERVER['HTTP_USER_AGENT'], 'iPad');
    $android = strpos($_SERVER['HTTP_USER_AGENT'], 'Android');
    $blackberry = strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry');
    
    // puis on détermine si une chaîne de caractères a été trouvée
    if($iphone || $ipad || $android || $blackberry > -1){
        header('Location: http://localhost/sitePerso/aProposMobile.php'); // si c'est le cas, on redirige
        die; // puis on arrête le chargement de la page actuelle
    }
    
    ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>a propos</title>
        <link rel="stylesheet" href="css/burger.css" />
        <link rel="stylesheet" href="css/titre.css" />
        <link rel="stylesheet" href="css/body.css" />
        <link rel="stylesheet" href="css/asideCv.css" />
        <link rel="stylesheet" href="css/cv.css" />


        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!--[if IE 6 ]><body class="ie6 old_ie"><![endif]-->
        <!--[if IE 7 ]><body class="ie7 old_ie"><![endif]-->
        <!--[if IE 8 ]><body class="ie8"><![endif]-->
        <!--[if IE 9 ]><body class="ie9"><![endif]-->
        <!--[if !IE]><!--><body><!--<![endif]-->
     </head>
    <body>
        <header>
            <div id="titre_principal">
                <a href="index.php"><img src="images/logo.png" alt="Logo" id="logo" /></a>
                <h1>A PROPOS</h1>
                <h2>Mon curriculum vitae</h2>
            </div>
            <?php  include("includes/menu.php"); ?>
        </header>
        <section id="corps">
        <?php  include("includes/asideCv.php"); ?>
            <section id="currivitae">
            <h3 id="formation">FORMATION</h3>
                <ul>
                    <li><h5>2013-2017(espéré):</h5>Diplôme d’études Supérieures de gestion de <strong>TELECOM ECOLE DE MANAGEMENT- Institut Mines Telecom</strong> et diplôme d'ingénieur de <strong>TELECOM SUD PARIS Institut Mines Telecom</strong></li>
                    <li><h5>08/2015 :</h5>Entrée en deuxième année à <strong>TELECOM SUD PARIS</strong> pour un cursus double diplôme d'ingénieur manager</li>
                    <li><h5>01/2015—06/2015 :</h5>Semestre à <strong>TELECOM SUD PARIS</strong> école d’ingénieurs- Institut Mines Telecom</li>
                    <li><h5>01/2015-06/2015: </h5><strong>English Track, Institut Mines Telecom</strong>, semestre en anglais avec les étudiants internationaux
business marketing, financial accounting, relationnal databses, information system analysis</li>
                    <li><h5>09/2014-12/2015: </h5></li>
                    <li><h5>2011-2013: </h5><strong>Classes préparatoires aux grandes écoles d’ingénieurs</strong>, lycée Victor Hugo 25 000 Besançon</li>
                    <li><h5>2011: </h5><strong>Baccalauréat Scientifique mention Bien</strong> lycée Bartholdi 68 000 Colmar</li>
                </ul>
            <h3 id="experience">EXPÉRIENCES PROFESSIONNELLE ET ASSOCIATIVE</h3>
                <ul>
                    <li><h5>09/2014—05/2015 :</h5><strong>Responsable web</strong> chez <strong>BPM club sons et lumières</strong> du campus des écoles Télécom d’Evry.
Maintenance du site et développement d’une partie du nouveau site.</li>
                    <li><h5>09/2014—05/2015 :</h5><strong>Chargé de la communication à Minet association de réseaux</strong> des écoles TEM et TSP.
Réalisation d’affiches, community management, organisation d’une conférence autour du logiciel libre.</li>
                    <li><h5>06/2014—09/2014 :</h5><strong>Stage court</strong> à Bruxelles chez <strong>Axiloo Be On Web</strong>, en tant qu’<strong>assistant sales manager</strong> puis en tant que <strong>community manager</strong>. Mes tâches consistaient à prendre contact avec les grands comptes partenaires (Nestlé, bledina..), puis à gérer la communauté des sites et l’animer via des jeux concours.</li>
                </ul>
            <h3 id="competences">COMPÉTENCES</h3>
                <h5>Langues:</h5>
                    <ul>
                        <li>Anglais niveau C1 : obtention des examens cambridge (KET, PET)</li>
                        <li>Allemand : bonne maîtrise</li>
                        <li>Espagnol : scolaire</li>
                    </ul>
                <h5>Informatique:</h5>
                    <ul>
                            <li>Langages de programmation web : bonne maîtrise de php5 et sa POO, connaissance en javascript</li>
                            <li>Librairies : bonne maîtrise de Jquery, bases en JqueryMobile</li>
                            <li>Framework : bonne maîtrise de bootstrap Applications mobiles : bases avec Apache Cordova</li>
                            <li>Technologies : connaissances basiques de GIT</li>
                            <li>Langages natifs : bases en JAVA, C et python</li>
                            <li>Système d’exploitation : Linux (distribution Xubuntu)</li>
                            <li>Logiciels : maîtrise du pack office</li>
                    </ul>
            <h3 id="interets">CENTRES D INTÉRÊTS</h3>
                <ul>
                    <li><strong>Nouvelles technologies :</strong> chroniqueur pour le tech&More, émission sur les médias et les nouvelles technologies chez Evry One, seconde radio étudiante de France</li>
                    <li><strong>Sports :</strong> Escalade et Hockey en salle avec les clubs des écoles TEM et TSP</li>
                </ul>
            </section>
        </section>
        <footer>
            
        </footer>
    </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="JS/menu.js"></script>



