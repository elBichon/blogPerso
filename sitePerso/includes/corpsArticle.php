<?php
    $reponseArticles = $bdd->query('SELECT * FROM articles WHERE titreArticles="'.$titreArticles.'"');
    while ($donneesArticles = $reponseArticles->fetch())
    {
        echo '<p><strong>' . $donneesArticles['titreArticles'] . '</strong></br></br></br>  ' . $donneesArticles['date'] .'</br></br>'. $donneesArticles['premierParagraphe'] .'</br>' . $donneesArticles['deuxiemeParagraphe'] . '</br>' . $donneesArticles['troisiemeParagraphe'] . '</br></br></br></p>';
    }
    $reponseArticles->closeCursor();
    ?>
