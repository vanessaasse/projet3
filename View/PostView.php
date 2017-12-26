<?php $this->title = "Billet simple pour l\'Alaska' - " . $post['titre']; ?>


<?= htmlspecialchars($post['titre']) ?><br />
<?= $post['date_fr'] ?><br />

<p><?= htmlspecialchars($post['content']) ?></p>

<hr />

Commentaires à <?= $post['titre'] ?><br />

<?php foreach ($comments as $comment): ?>

    <p><?= htmlspecialchars($comment['auteur']) ?> dit :</p>
    <p><?= htmlspecialchars($comment['contenu']) ?></p>
<?php endforeach; ?>

<hr />
