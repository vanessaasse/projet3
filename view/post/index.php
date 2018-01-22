<?php $this->title = "Billet pour l'Alaska"; ?>

<section class="wrapper style1 align-center">
    <div class="inner">
        <h2>Les différents chapitres</h2>
        <div class="items style1 big onscroll-fade-in">


            <?php foreach ($posts as $post): ?>

            <section>
            <span class="icon style2 major fa-bookmark"></span>

            <h3><a href="post/post/<?= $post['id'] ?>"><br /><?= $post['title'] ?></a><h3>
            <h4 class="dateintro">Publié le <?= $post['date_fr'] ?></h4>
                    <p><?= substr($post['content'], 0, 500) ?></p>
                    (<a href="post/post/<?= $post['id'] ?>">Lire la suite</a>)

            </section>

            <?php endforeach; ?>

        </div>
    </div>
</section>

