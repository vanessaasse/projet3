<?php $this->title = "Billet pour l'Alaska"; ?>

<?php foreach ($posts as $post): ?>


    <a href="post/post/<?= $this->sanitize($post['id']) ?>"><br /><?= $this->sanitize($post['title']) ?></a><br />
    Publié le <?= $this->sanitize($post['date_fr']) ?><br />
    <p><?= $this->sanitize(substr($post['content'], 0, 1500)) ?></p>

    <hr />

<?php endforeach; ?>

