<?php $this->title = "Billet pour l'Alaska"; ?>

<?php foreach ($posts as $post): ?>

    <section class="wrapper style1 align-center">
    <div class="inner">

        <div class="items style1 big">
            <section>
            <span class="icon style2 major fa-bookmark"></span>

            <h2><a href="post/post/<?= $this->sanitize($post['id']) ?>"><br /><?= $this->sanitize($post['title']) ?></a><h2>
            <h4 class="dateintro">Publié le <?= $this->sanitize($post['date_fr']) ?></h4>
            <p><?= $this->sanitize(substr($post['content'], 0, 1500)) ?></p>

            </section>
        </div>
    </div>


<?php endforeach; ?>

