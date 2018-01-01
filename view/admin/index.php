<?php $this->title = "Billet pour l'Alaska - Administration"; ?>

<h2>Administration</h2>

<p></p>Bienvenue, <?= $this->sanitize($login) ?> !</p>
<p>Ce blog comporte <?= $this->sanitize($nbPosts) ?> chapitres et <?= $this->sanitize($nbComments) ?> commentaires.</p><br />


<a href="connexion/disconnect">Se déconnecter</>