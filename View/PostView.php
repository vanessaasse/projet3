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

<hr />
