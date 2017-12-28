<?php $this->title = "Billet pour l'Alaska"; ?>

<?php foreach ($posts as $post): ?>


    <a href="index.php?action=Post&amp;id=<?= $post['id'] ?>"><br /><?= $this->sanitize($post['title']) ?></a><br />
    Publié le <?= $this->sanitize($post['date_fr']) ?><br />
    <p><?= $this->sanitize(substr($post['content']), 0, 1500) ?></p>

    <p><a href="index.php?action=Post&amp;id=<?= $this->sanitize($post['id']) ?>">La suite de ce chapitre est ici !...</a></p>

    <hr />

<?php endforeach; ?>

