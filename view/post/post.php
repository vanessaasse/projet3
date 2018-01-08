<?php $this->title = "Billet simple pour l'Alaska"; ?>

<section class="spotlight style1 orient-right content-align-center">
    <div class="content">


        <h2><?= $this->sanitize($post['title']) ?></h2>
        <h4 class="dateintro">Publié le <?= $this->sanitize($post['date_fr']) ?></h4>

        <p><?= $this->sanitize($post['content']) ?></p>
        <hr />
    </div>
</section>


<section class="commentaires">
    <h3 class="intro">Commentaires à propos du <?= $this->sanitize($post['title']) ?></h3>

<?php foreach ($comments as $comment): ?>
    <div class="row">
    <div class="box">Par <?= $this->sanitize($comment['author']) ?><br />
        Le <?= $this->sanitize($comment['date_fr']) ?><br/>
        <p><?= $this->sanitize($comment['com_content']) ?></p></div>
    </div>


<?php endforeach; ?>

</section>

<form method="post" action="post/addComment/<?= $post['id'] ?>">
    <fieldset>
        <legend>Ajoutez un commentaire :</legend>
        <table>
        <tr><td><label>Nom / Pseudo : </label></td><td>
        <input type="text" name="name" size="53" max="256" required ></td></tr>
        <tr><td><label>Commentaire : </label></td><td>
        <textarea name="comment" cols="51" rows="5" required ></textarea></td></tr>
        <tr><td><input type="submit" value="Envoyez votre message" /></td></tr>
        </table>
    </fieldset>
</form>
