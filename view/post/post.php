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
<hr/>

<section class="addcomment">
    <h3 class="intro">Ajoutez un commentaire :</h3>

<form method="post" action="post/addComment/<?= $post['id'] ?>">

        <label>Nom / Pseudo : </label>
        <input type="text" name="name" size="53" max="256" required >
    <br/>
        <label>Commentaire : </label>
        <textarea name="comment" cols="51" rows="5" required ></textarea>
    <br/>
        <input type="submit" value="Envoyez votre message" />

</form>

</section>