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
        </header>
            <?php  include("includes/menu.php"); ?>
            <section id="corps">
                <ul>
                    <div id="moi">
                    <h3><img src="images/experience.png" alt="moi" id="moi" width=20px/>  Qui suis-je ?</h3>
                        <p>Je suis actuellement étudiant à l'institut mines-telecom, en double diplôme entre télécom école de management et télécom sud paris. Via mes études, j'ai eu l'occasion de découvrir les mondes du réseau, du développement sous diverses formes, du hacking et des réalisations de gadgets DIY et ai décidé d'à mon tour explorer le web, cet univers en mouvement permanent où partage et apprentissage se lient en permanence.</p>
                    </div>
                    <div id="leSite">
                    <h3 id="site"><img src="images/map.png" alt="map" id="map" width=20px/>  Le site :</h3>
                            <p>Grâce au site je voudrais</p>
                                <ul>
                                    <p>Rassembler et partager mes différentes réalisations pour que d'autres puissent les reproduire, améliorer, s'inspirer ou encore critiquer</p>
                                    <p>Avoir un espace d'expression via des billets sur un blog</p>
                                    <p>Tester différentes technologies via le site</p>
                                </ul>
                    </div>
                    <div id="techno">
                            <p>Les technologies utilisées sont: </p>
                                <ul>
                                    <p>CSS3 et HTML5</p>
                                    <p>PHP5 et sa POO</p>
                                    <p>jquery et jquery mobile</p>
                                </ul>
                    </div>
                    <p><h3 id="news"><img src="images/news.png" alt="news" id="news" width=20px/>  News :</h3></p>
                        <?php  include("includes/articles.php"); ?>
                </ul>
            </section>
        <footer>
            
        </footer>
    </body>
</html>











