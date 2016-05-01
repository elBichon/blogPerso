<?php
    $req1 = $bdd1->prepare('INSERT INTO note (likes, unlikes, article_id) VALUES(?,?,?)');
    $req1->execute(array($_POST['likes'], $_POST['unlikes'],$_POST['article_id']));
?>
