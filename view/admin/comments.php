<?php $this->title = "Billet pour l'Alaska - Administration"; ?>


<div class="breadcrumb">
    <li><a href="admin/comments"> >> Tous les commentaires </a></li>
</div>


<?php foreach ($comments as $comment): ?>

    <div class="panel panel-default">
    <div class="panel-body">

    <div class="comment">Par <?= $comment['author']?><br/>
        Posté le <?= $comment['date_fr']?></div><br/>
    <?= $comment['com_content']?><br/>


    </div>
    </div>

<?php endforeach; ?>