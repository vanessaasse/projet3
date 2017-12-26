<?php $this->title = 'Billet pour l\'Alaska'; ?>

<?php foreach ($posts as $post): ?>


    <a href="index.php?action=Post&amp;id=<?= $post['id'] ?>">
        <?= $post['title'] ?>
    </a>
    <?= $post['date_fr'] ?><br />
    <p><?= $post['content'] ?></p>

    <hr />

<?php endforeach; ?>



