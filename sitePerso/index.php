<?php
    $page = "accueilMobile.php";
    include("includes/redirection.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>accueil</title>
        <link rel="stylesheet" href="css/burger.css" />
        <link rel="stylesheet" href="css/titre.css" />
        <link rel="stylesheet" href="css/body.css" />
        <link rel="stylesheet" href="css/pied.css" />
        <link rel="stylesheet" href="css/aside.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script src="JS/menu.js"></script>



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
                <h1>ACCUEIL</h1>
                <h2>Bienvenue sur le site de REUGLEWICZ Jean-Edouard</h2>
            </div>
            <?php  include("includes/connect.php"); ?>
            <?php  include("includes/menu.php"); ?>
        </header>
            <section id="corps">
            <?php  include("includes/aside.php"); ?>
                <ul>
                    <div id="moi">
                    <li><h3><img src="images/experience.png" alt="moi" id="moi" width=20px/>  Qui suis-je ?</h3></li>
                        <p>Je suis actuellement étudiant à l'institut mines-telecom, en double diplôme entre télécom école de management et télécom sud paris. Via mes études, j'ai eu l'occasion de découvrir les mondes du réseau, du développement sous diverses formes, du hacking et des réalisations de gadgets DIY et ai décidé d'à mon tour explorer le web, cet univers en mouvement permanent où partage et apprentissage se lient en permanence.</p>
                    </div>
                    <div id="leSite">
                    <li><h3 id="site"><img src="images/map.png" alt="map" id="map" width=20px/>  Le site :</h3></li>
                            <p>Grâce au site je voudrais</p>
                                <ul><li>Rassembler et partager mes différentes réalisations pour que d'autres puissent les reproduire, améliorer, s'inspirer ou encore critiquer</li>
                                    <li>Avoir un espace d'expression via des billets sur un blog</li>
                                    <li>Tester différentes technologies via le site</li>
                                </ul>
                    </div>
                    <div id="techno">
                            <p>Les technologies utilisées sont: </p>
                                <ul>
                                    <li>CSS3 et HTML5</li>
                                    <li>PHP5 et sa POO</li>
                                    <li>jquery et jquery mobile</li>
                                </ul>
                    </div>
                    <li><h3 id="news"><img src="images/news.png" alt="news" id="news" width=20px/>  News :</h3></Li>
                        <?php  include("includes/articles.php"); ?>
                </ul>
            </section>
        <footer>
            
        </footer>
    </body>
</html>











