<?php $this->title = "Billet simple pour l'Alaska"; ?>

<div class="breadcrumb">
    <li><a href="admin/post/<?= $post['id'] ?>">Editer "<?= $post['title'] ?>"</a><br/>Publié le <?= $post['date_fr'] ?></li>
</div>


<div class="row">

    <div class="col-lg-10">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="admin-post">
                <?= $post['content'] ?>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-2">
        <div class="alert alert-warning"><i class=" fa fa-refresh "></i>Mettre à jour</div>

        <div class="alert alert-success"><i class="fa fa-edit "></i> Publier</div>

        <div class="alert alert-danger"><i class="fa fa-pencil"></i> Supprimer</div>
    </div>
</div>



