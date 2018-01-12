<?php $this->title = "Billet pour l'Alaska"; ?>


<section class="spotlight style1 orient-right content-align-center">

    <div class="content">
    <h3 class="intro">Lisez, appréciez, commentez le dernier chapitre :</h3>

        <?php foreach ($posts as $post): ?>

        <h2><?= $this->sanitize($post['title']) ?></h2>
        <h4 class="dateintro">Publié le <?= $this->sanitize($post['date_fr']) ?></h4>

        <p><?= $this->sanitize($post['content']) ?><br /></p>

        <div class="button"><a href="post/index">Découvrez les précédents chapitres !</a></div>

        <?php endforeach; ?>


    </div>

</section>


