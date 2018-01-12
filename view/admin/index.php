<?php $this->title = "Billet pour l'Alaska - Administration"; ?>

<section class="spotlight style1 orient-right content-align-left">
    <div class="content">

        <h3 class="intro">Administration</h3>

        <p>Bienvenue, <?= $this->sanitize($login) ?> !</p>
        <p>Ce blog comporte <?= $this->sanitize($nbPosts) ?> chapitres et <?= $this->sanitize($nbComments) ?> commentaires.</p><br />


<a href="connexion/disconnect">Se déconnecter</>

    </div>
</section>