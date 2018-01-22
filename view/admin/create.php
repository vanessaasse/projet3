<?php $this->title = "Billet pour l'Alaska - Administration"; ?>


<div class="breadcrumb">
    <li><a href="admin/create"> >> Ajouter un chapitre </a></li>
</div>


<form method="post" action="admin/create">

    <label>Titre : </label>
    <input type="text" name="title" size="53" max="600" placeholder="Saisir votre titre" required value="<?php if(isset($title)) echo $title ?>">
    <br/>
    <label>Contenu : </label>
    <textarea name="content" cols="51" rows="20" ><?php if(isset($content)) echo $content  ?></textarea>
    <br/>
    <input type="submit" value="Enregistrer" />

</form>
