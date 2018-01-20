<?php $this->title = "Billet pour l'Alaska - Administration"; ?>

<div class="breadcrumb">
    <li><a href="http://localhost:8888/projet3fw/admin/edit"> >> Ajouter un chapitre </a></li>
</div>


<form method="post" action="admin/edit/<?= $_POST['id'] ?>">

    <input type="hidden" name="id" value="$_POST['id']">

    <label>Date</label>
    <input type="date" name="date" value="$_POST['date']">
    <br />
    <label>Titre : </label>
    <input type="text" name="title" size="53" max="600" required value="$_POST['title']">
    <br/>
    <label>Contenu : </label>
    <textarea name="content" cols="51" rows="5" required value="$_POST['content']"></textarea>
    <br/>
    <input type="submit" value="Enregistrer" />

</form>