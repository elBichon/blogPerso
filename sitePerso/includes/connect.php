<?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=sitePerso', 'root', 'root');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    
    ?>

