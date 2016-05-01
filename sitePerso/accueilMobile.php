<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <title>accueil</title>
            <link rel="stylesheet" href="css/titre.css" />
            <link rel="stylesheet" href="css/bodyMobile.css" />


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
                <h1>ACCUEIL</h1>
                <h2>Bienvenue sur le site de REUGLEWICZ Jean-Edouard</h2>
            </div>
            <?php  include("includes/connect.php"); ?>
            <?php  include("includes/menuMobile.php"); ?>
        </header>
        <section id="corps">
            <ul>
                <li><h3 id="moi"><img src="images/experience.png" alt="moi" id="moi" width=20px/>  Qui suis-je ?</h3></li>
                <p>Je suis actuellement étudiant à l'institut mines-telecom, en double diplôme entre télécom école de management et télécom sud paris. Via mes études, j'ai eu l'occasion de découvrir les mondes du réseau, du développement sous diverses formes, du hacking et des réalisations de gadgets DIY et est décidé d'à mon tour explorer le web, cet univers en mouvement permanent où partage et apprentissage se lient en permanence.</p>
                <li><h3 id="site"><img src="images/map.png" alt="map" id="map" width=20px/>  Le site :</h3></li>
            <div id="tabs">
            <ul>
            <li><a href="#leSite">Le site</a></li>
            <li><a href="#techno">Technologies utilisées</a></li>
            <li><a href="#lastNews">Dernières nouvelles</a></li>
            </ul>
            <div id="leSite">
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
            <div id="lastNews">
            <p>Le site est en ligne, n'hésitez pas à le visiter ou à aller voir ceux des copains dans la rubrique liens</p>
            </div>
    </div>
        <li><h3 id="news"><img src="images/news.png" alt="news" id="news" width=20px/>  News :</h3></Li>
</ul>
    </section>
    <footer>
    </footer>
    </body>
    </html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>











