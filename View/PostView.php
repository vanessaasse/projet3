<?php $this->title = "Billet simple pour l\'Alaska' - " . $post['titre']; ?>


<?= $post['titre'] ?><br />
<?= $post['date_fr'] ?><br />

<p><?= $post['content'] ?></p>

<hr />

Commentaires à <?= $post['titre'] ?><br />

<?php foreach ($comments as $comment): ?>

    <p><?= $comment['auteur'] ?> dit :</p>
    <p><?= $comment['contenu'] ?></p>
<?php endforeach; ?>

<hr />
