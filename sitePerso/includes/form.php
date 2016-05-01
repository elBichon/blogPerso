<form action="<?php $nomDeLaPage; ?>" method="post">
    <label for="note">que pensez-vous de cet article ?</label><br />
                        <select name="note" id="note">
                            <option value=1 name="likes">like</option>
                            <option value=1 name="unlikes">dislike</option>
                        </select>
                    <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" /><br />
                    <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />
                    <input type="hidden" name="titreCommentaires" value="<?php echo $titreCommentaires; ?>" >
                    <input type="hidden" name="titreArticles" value="<?php echo $titreArticles; ?>" >
                    <input type="hidden" name="article_id" value="<?php echo $article_id; ?>" >
                    <input type="submit" value="Envoyer" />
                </p>
</form>
