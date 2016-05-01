<div id="recherche">
    <form method="post" action="blogRecherche.php">
        <select name="categories" id="categories">
<?php
    
    $reponse = $bdd->query('SELECT * FROM articles');
    
    while ($donnees = $reponse->fetch())
    {
        ?>
<option value="<?php echo $donnees['categories']; ?>"> <?php echo $donnees['categories']; ?></option>
<?php
    }
    
    ?>
        </select>
<div class="bouton"><input type="submit" class="text" value="envoyer"/></div>
    </form>
</div>