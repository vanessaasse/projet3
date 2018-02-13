<?php $this->title = "Billet pour l'Alaska - Administration"; ?>

<div class="breadcrumb">
    <li><a href="admin"> >> Tableau de bord</a></li>
</div>


<div class="row">

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Bienvenue <?= $this->sanitize(ucfirst($login)) ?> !</h3>
            </div>

            <div class="panel-body">
                <div class="alert alert-success">
                    Ce blog comporte <?= $this->sanitize($nbPosts) ?> chapitres et <?= $this->sanitize($nbComments) ?> commentaires.<br/><br/>
                    <div class="link_home"><a href="admin/chapters"><i class="fa fa-arrow-right"></i> Accéder aux chapitres</div></a>
                </div>
                <div class="alert alert-info">
                    LE DERNIER POST :<br/><br/>

                    <?php foreach ($posts as $post): ?>

                        <a href="admin/post/<?= $this->sanitize($post['id']) ?>"><?= $this->sanitize($post['title']) ?></a>
                    <?php endforeach; ?>

                    <div class="link_home"><a href="admin/create"><i class="fa fa-arrow-right"></i> Ajouter un chapitre</div></a>


                </div>
                <div class="alert alert-warning">
                    LE DERNIER COMMENTAIRE : <br/><br/>

                    <?php foreach ($comments as $comment): ?>

                        De <?= $this->sanitize($comment['author']) ?>, publié le <?= $this->sanitize($comment['date_fr']) ?><br/>
                        "<?= $this->sanitize($comment['com_content']) ?>"<br/>
                    <?php endforeach; ?>

                    <div class="link_home"><a href="admin/comments"><i class="fa fa-arrow-right"></i> Voir tous les commentaires</div></a>

                </div>
                <div class="alert alert-danger">
                    <a href="admin/profil">Modifier mon profil</a><br/>
                    <a href="connexion/disconnect">Me déconnecter</a>
                </div>
            </div>
        </div>
    </div>
</div>



