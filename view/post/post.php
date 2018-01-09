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

    <div class="table-wrapper">
<?php foreach ($comments as $comment): ?>

    <table>
        <tr>
            <div class="box">
    <strong>Par <?= $this->sanitize($comment['author']) ?><br />
        Le <?= $this->sanitize($comment['date_fr']) ?><br/></strong>
        <p><?= $this->sanitize($comment['com_content']) ?></p>
            </div>
        </tr>


    </table>

<?php endforeach; ?>
    </div>
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
