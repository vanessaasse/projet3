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
                    Le dernier post...
                </div>
                <div class="alert alert-warning">
                    Le dernier commentaire...
                </div>
                <div class="alert alert-danger">
                    <a href="connexion/disconnect">Se déconnecter</a>
                </div>
            </div>
        </div>
    </div>
</div>



