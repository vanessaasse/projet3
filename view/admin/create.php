<?php $this->title = "Billet pour l'Alaska - Administration"; ?>

<div class="breadcrumb">
    <li><a href="http://localhost:8888/projet3fw/admin/edit"> >> Ajouter un chapitre </a></li>
</div>


<form method="post" action="">
    <br />
    <label>Titre : </label>
    <input type="text" name="title" required>
    <br/>
    <label>Contenu : </label>
    <textarea name="content" cols="51" rows="5" required></textarea>
    <br/>
    <input type="submit" value="Enregistrer" />

</form>

