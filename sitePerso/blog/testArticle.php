<?php
    
    // on cherche un user-agent apparenté à une plateforme mobile dans la variable
    $iphone = strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone');
    $ipad = strpos($_SERVER['HTTP_USER_AGENT'], 'iPad');
    $android = strpos($_SERVER['HTTP_USER_AGENT'], 'Android');
    $blackberry = strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry');
    
    // puis on détermine si une chaîne de caractères a été trouvée
    if($iphone || $ipad || $android || $blackberry > -1){
        header('Location: http://localhost/sitePerso/blogMobile.php'); // si c'est le cas, on redirige
        die; // puis on arrête le chargement de la page actuelle
    }
    ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>blog</title>
        <link rel="stylesheet" href="../css/burger.css" />
        <link rel="stylesheet" href="../css/titre.css" />
        <link rel="stylesheet" href="../css/body.css" />
        <link rel="stylesheet" href="../css/pied.css" />
        <link rel="stylesheet" href="../css/aside.css" />
        <link rel="stylesheet" href="../css/article.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script src="../JS/menu.js"></script>

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
                <a href="../index.php"><img src="../images/logo.png" alt="Logo" id="logo" /></a>
                <h1>BLOG</h1>
                <h2>Histoires de BITS</h2>
            </div>
             <?php include("../includes/connect.php"); ?>
            <?php include("../includes/menuInclude.php"); ?>
        </header>
        <section id="corps">
                    <?php include("../includes/sections.php"); ?>
        <?php $titreArticles = "test";?>
        <?php $titreCommentaires = 1;?>
        <?php $article_id = 1;?>
        <?php $nomDeLaPage = "testArticle.php";?>
        <?php include("../includes/corpsArticle.php"); ?>
        <div id="listComments">
        <?php include("../includes/commentaires.php"); ?>
        </div>
        <div id="commentsForm">
            <?php include("../includes/form.php"); ?>
            <?php include("../includes/postCommentaires.php");?>
        </div>
        </section>
        <footer>
            <?php include("../includes/pied.php"); ?>
        </footer>
    </body>
</html>

