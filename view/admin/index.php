<?php $this->title = "Billet pour l'Alaska - Administration"; ?>

<div class="breadcrumb">
    <li><a href="http://localhost:8888/projet3fw/admin"> >> Tableau de bord</a></li>
</div>


<div class="row">

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Bienvenue, <?= $this->sanitize($login) ?> !</h3>
            </div>

            <div class="panel-body">
                <div class="alert alert-success">
                    Ce blog comporte <?= $this->sanitize($nbPosts) ?> chapitres et <?= $this->sanitize($nbComments) ?> commentaires.
                </div>
                <div class="alert alert-info">
                    LE DERNIER POST :<br/><br/>

                    <?php foreach ($posts as $post): ?>

                        <a href="post/post/<?= $this->sanitize($post['id']) ?>"><?= $this->sanitize($post['title']) ?></a>
                    <?php endforeach; ?>


                </div>
                <div class="alert alert-warning">
                    LE DERNIER COMMENTAIRE : <br/><br/>

                    <?php foreach ($comments as $comment): ?>

                        De <?= $this->sanitize($comment['author']) ?>, publié le <?= $this->sanitize($comment['date_fr']) ?><br/>
                        "<?= $this->sanitize($comment['com_content']) ?>"<br/>
                    <?php endforeach; ?>

                </div>
                <div class="alert alert-danger">
                    <a href="connexion/disconnect">Se déconnecter</a>
                </div>
            </div>
        </div>
    </div>
</div>



