<?php $this->title = "Billet pour l'Alaska"; ?>

<p>Lisez, commentez, appréciez le dernier chapitre :</p>

<?php foreach ($posts as $post): ?>

    <?= $this->sanitize($post['title']) ?><br />
    Publié le <?= $this->sanitize($post['date_fr']) ?>

    <p>
        <?= $this->sanitize($post['content']) ?>
        <br />
    </p>

    <a href="post/index">Découvrez les précédents chapitres !</a>

    <hr />

<?php endforeach; ?>


