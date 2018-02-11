<?php $this->title = "Billet pour l'Alaska - Administration"; ?>


<div class="breadcrumb">
    <li><a href="admin/comments"> >> Tous les commentaires </a></li>
</div>


<?php foreach ($comments as $comment): ?>

    <div class="panel panel-default">
    <div class="panel-body">

    <div class="comment">Posté par <?= $comment['author']?> le <?= $comment['date_fr']?></div><br/>
        <?= substr($comment['com_content'], 0, 250) ?>
        ...<a href="admin/comment/<?= $comment['id'] ?>"> Lire le commentaire</a>

        <br/><br />


            <?php if($comment['nb_report'] > 0): ?>
                <div id="signal">
                    <i class="fa fa-arrow-right"></i> Signalé <?= $comment['nb_report'] ?> fois
                </div>
            <?php endif; ?>


    </div>
    </div>

<?php endforeach; ?>