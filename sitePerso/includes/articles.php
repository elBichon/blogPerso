<div id="articles">
<?php
    $reponse = $bdd->query('SELECT * FROM articles ORDER BY date DESC LIMIT 0, 3');
    while ($donnees = $reponse->fetch())
    {
        echo '<p><strong><a href="'. $donnees['lien'] .'">'. $donnees['titreArticles'] .'</a></strong>' . $donnees['date'] .'</br>' . $donnees['resume'] .'</p>';
    }
    $reponse->closeCursor();
    ?>
</div>


