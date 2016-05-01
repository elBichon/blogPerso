<?php
    $reponse = $bdd->query('SELECT * FROM commentaires c, articles a WHERE c.titreCommentaires=a.id ORDER BY date_envoi DESC LIMIT 0, 20');
    while ($donnees = $reponse->fetch())
    {
        echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong>'. htmlspecialchars($donnees['date_envoi']) .' :</br>' . htmlspecialchars($donnees['message']) . '</p>';
    }
    $reponse->closeCursor();
    ?>