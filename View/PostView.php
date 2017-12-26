<?php $this->title = "Billet simple pour l'Alaska"; ?>


<?= htmlspecialchars($post['title']) ?><br />
<?= $post['date_fr'] ?><br />

<p><?= htmlspecialchars($post['content']) ?></p>

<hr />

Commentaires à <?= $post['title'] ?><br />

<?php foreach ($comments as $comment): ?>

    <p><?= htmlspecialchars($comment['author']) ?> dit :</p>
    <p><?= htmlspecialchars($comment['com_content']) ?></p>
<?php endforeach; ?>


<form method="post" action="index.php?action=Addcomment&amp;id=<?= $_GET['id']?>">
    <fieldset>
        <legend>Ajoutez un commentaire :</legend>
        <table>
        <tr><td><label>Nom / Pseudo : </label></td><td>
        <input type="text" name="name" size="53" max="256" required ></td></tr>
        <tr><td><label>Commentaire : </label></td><td>
        <textarea name="newcomment" cols="51" rows="5" required ></textarea></td></tr>
        <tr><td><input type="submit" value="Envoyez votre message" /></td></tr>
        </table>
    </fieldset>
</form>

