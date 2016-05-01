<?php
    $page = "liensMobile.php";
    include("includes/redirection.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>liens</title>
        <link rel="stylesheet" href="css/burger.css" />
        <link rel="stylesheet" href="css/titre.css" />
        <link rel="stylesheet" href="css/body.css" />
        <link rel="stylesheet" href="css/pied.css" />
        <link rel="stylesheet" href="css/liens.css" />
    
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
                <h1>LIENS</h1>
                <h2>Lieux de bon aloi</h2>
            </div>
            <?php  include("includes/connect.php"); ?>
            <?php  include("includes/menu.php"); ?>
        </header>
        <section id="links">
        <ul>
            <li><h3>Les copains</h3></li>
                <ul>
                    <h5><?php
                        $reponse = $bdd->query('SELECT * FROM liens WHERE categories="copains" ORDER BY id');
                            while ($donnees = $reponse->fetch())
                                {
                                        echo '<p><a href="'. $donnees['url'] .'">'. $donnees['nomLien'] .'</a></p>';
                                }
                            $reponse->closeCursor();
                        ?></h5>
                </ul>
            <li><h3>Ailleurs sur le web</h3></li>
                <ul>
                    <h5><?php
                        $reponse = $bdd->query('SELECT * FROM liens WHERE categories="ailleurs" ORDER BY id');
                            while ($donnees = $reponse->fetch())
                                {
                                        echo '<p><a href="'. $donnees['url'] .'">'. $donnees['nomLien'] .'</a></p>';
                                }
                            $reponse->closeCursor();
                        ?></h5>
                </ul>

            <li><h3>Me suivre</h3></li>
                <ul>
                    <h5><h5><?php
                        $reponse = $bdd->query('SELECT * FROM liens WHERE categories="moi" ORDER BY id');
                            while ($donnees = $reponse->fetch())
                                {
                                        echo '<p><a href="'. $donnees['url'] .'">'. $donnees['nomLien'] .'</a></p>';
                                }
                            $reponse->closeCursor();
                        ?></h5>
                </ul>
</h5>
                </ul>
        </ul>
        </section>
        <footer>

</footer>
    </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="JS/menu.js"></script>
