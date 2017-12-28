<?php $this->title = "Billet simple pour l'Alaska"; ?>


<?= $this->sanitize($post['title']) ?><br />
Publié le <?= $this->sanitize($post['date_fr']) ?><br />

<p><?= $this->sanitize($post['content']) ?></p>

<hr />

Commentaires à <?= $this->sanitize($post['title']) ?><br />

<?php foreach ($comments as $comment): ?>

    <?= $this->sanitize($comment['author']) ?> :<br />
    Le <?= $this->sanitize($comment['date_fr']) ?>
    <p><?= $this->sanitize($comment['com_content']) ?></p>



<?php endforeach; ?>


<form method="post" action="index.php?action=Addcomment&amp;id=<?= $_GET['id']?>">
    <fieldset>
        <legend>Ajoutez un commentaire :</legend>
        <table>
        <tr><td><label>Nom / Pseudo : </label></td><td>
        <input type="text" name="name" size="53" max="256" required ></td></tr>
        <tr><td><label>Commentaire : </label></td><td>
        <textarea name="newcomment" cols="51" rows="5" required ></textarea></td></tr>
        <tr><td><input type="hidden" name="id" value="<?= $_GET['id'] ?>"</td></tr>
        <tr><td><input type="submit" value="Envoyez votre message" /></td></tr>
        </table>
    </fieldset>
</form>
