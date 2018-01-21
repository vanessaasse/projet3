<?php $this->title = "Billet pour l'Alaska - Administration"; ?>

<div class="breadcrumb">
    <li><a href="admin/create"> >> Ajouter un chapitre </a></li>
</div>


<form method="post" action="">

    <label>Titre : </label>
    <input type="text" name="title" size="53" max="600" required value="<?php echo $title ?>">
    <br/>
    <label>Contenu : </label>
    <textarea name="content" cols="51" rows="5" required ><?php echo $content ?></textarea>
    <br/>
    <input type="submit" value="Enregistrer" />

</form>

