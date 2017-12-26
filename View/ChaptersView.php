<?php $this->title = 'Billet pour l\'Alaska'; ?>

<?php foreach ($posts as $post): ?>


    <a href="index.php?action=Post&amp;id=<?= $post['id'] ?>"><br /><?= htmlspecialchars($post['title']) ?></a><br />
    Publié le <?= $post['date_fr'] ?><br />
    <p><?= substr(nl2br(htmlspecialchars($post['content'])), 0, 1500) ?></p>

    <p><a href="index.php?action=Post&amp;id=<?= $post['id'] ?>">La suite de ce chapitre est ici !...</a></p>

    <hr />

<?php endforeach; ?>

