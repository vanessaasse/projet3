<?php $this->title = "Billet simple pour l'Alaska"; ?>

<div class="breadcrumb">
    <li><a href="admin/comment/<?= $comment['id'] ?>"> >> Modération de commentaire</a></li>
</div>

    <div class="panel panel-default">
    <div class="panel-body">

        <div class="comment">Posté par <?= $this->sanitize($comment['author'])?> le <?= $comment['date_fr']?><br/>
            <?= $comment['post_title']?></div><br/>
        <?= $this->sanitize($comment['com_content']) ?>
        <br/><br/>
        <div class="signal"><i class="fa fa-arrow-right"></i> Signalé <?= $comment['nb_report'] ?> fois</div>
        <br/>
        <a href="admin/confirmComment/<?= $comment['id'] ?>">Approuver le commentaire</a><br/>
        <a href="admin/deleteComment/<?= $comment['id'] ?>">Supprimer le commentaire</a>


    </div>
    </div>