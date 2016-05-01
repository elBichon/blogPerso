<?php
    $req = $bdd->prepare('INSERT INTO commentaires (pseudo, message, titreCommentaires, date_envoi) VALUES(?,?,?, NOW())');
    $req->execute(array($_POST['pseudo'], $_POST['message'],$_POST['titreCommentaires'] ));
?>


