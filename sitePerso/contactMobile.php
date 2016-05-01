<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no">
            <title>contact</title>
            <link rel="stylesheet" href="css/burger.css" />
            <link rel="stylesheet" href="css/titre.css" />
            <link rel="stylesheet" href="css/body.css" />
            <link rel="stylesheet" href="css/pied.css" />
            <link rel="stylesheet" href="css/contact.css" />


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
            <a href="accueil.php"><img src="images/logo.png" alt="Logo" id="logo" /></a>
            <h1>CONTACT</h1>
            <h2>Si vous voulez me contacter</h2>
            </div>
            <?php  include("includes/menuMobile.php"); ?>
        </header>
        <section id="mail">
            <form action = "contact.php" method="post">
                <label for="nom" class="float">nom :</label> <input type="text" name="nom" id="login" size="30" /></em></br></br>
                <label for="prenom" class="float">prenom :</label> <input type="prenom" name="prenom" id="prenom" size="30" /></em></br></br>
                <label for="sujet" class="float">sujet :</label> <input type="text" name="sujet" id="sujet" size="30" /></em></br></br>
                votre adresse : <input type="email" /></em></br>
                <label for="mail">Votre mail :</label>
                <textarea name="mail" id="mail" cols="40" rows="4"></textarea>
                </em>
                </br></br></br></br></br></br></br>
                <input type="submit" value="envoyer" />
            </form>
    </section>
    <footer>
    </footer>
        </body>
    </html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="JS/menu.js"></script>
