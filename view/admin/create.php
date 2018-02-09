<?php $this->title = "Billet pour l'Alaska - Administration"; ?>


<div class="breadcrumb">
    <li><a href="admin/create"> >> Ajouter un chapitre </a></li>
</div>



<form method="post" action="admin/create">

    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <!-- affiche l'erreur en fonction de la condition dans laquelle tu arrives.
                    Boucle foreach car on appelle une erreur insérée dans un tableau.-->
                    <?php foreach ($errors as $error): ?>
                    Erreur : <?= $error ?><br/>
                    <?php endforeach; ?>


                <div class="sub-title">Titre :</div>
                <input value="<?= $title ?>" type="text" name="title" class="form-control" size="53" max="600" placeholder="Saisissez votre titre">
                <br/>
                <div class="sub-title">Contenu : </div>
                <textarea name="content"><?= $content ?></textarea>
                <br/>
                <button type="submit" class="btn btn-default">Enregistrer</button>


                </div>
        </div>
    </div>
</div>

</form>

