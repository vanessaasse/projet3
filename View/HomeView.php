<?php $this->title = 'Billet pour l\'Alaska'; ?>

<p>Lisez, commentez, appréciez le dernier chapitre :</p>

<?php foreach ($posts as $post): ?>

    <?= htmlspecialchars($post['title']) ?><br>
    publié le <?= $post['date_fr'] ?>

    <p>
        <?= nl2br(htmlspecialchars($post['content'])) ?>
        <br />
    </p>

    <a href="index.php?action=Chapters">Découvrez les précédents chapitres !</a>

    <hr />

<?php endforeach; ?>


