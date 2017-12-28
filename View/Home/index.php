<?php $this->title = "Billet pour l'Alaska"; ?>

<p>Lisez, commentez, appréciez le dernier chapitre :</p>

<?php foreach ($posts as $post): ?>

    <?= $this->sanitize($post['title']) ?><br>
    publié le <?= $this->sanitize($post['date_fr']) ?>

    <p>
        <?= $this->sanitize($post['content']) ?>
        <br />
    </p>

    <a href="index.php?action=index">Découvrez les précédents chapitres !</a>

    <hr />

<?php endforeach; ?>


