<?php $this->title = "Billet pour l'Alaska - Administration"; ?>


<div class="breadcrumb">
    <li><a href="admin/edit"> >> Ajouter un chapitre </a></li>
</div>

<form method="post" action="admin/edit/<?= $post['id'] ?>">


    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="sub-title">Titre :</div>
                    <input type="text" name="title" class="form-control" size="53" max="600"
                           required value="<?= $post['title'] ?>">
                    <br/>
                    <div class="sub-title">Contenu : </div>
                    <textarea name="content" ><?= $post['content'] ?></textarea>
                    <br/>
                    <button type="submit" class="btn btn-default">Mettre à jour</button>

                </div>
            </div>
        </div>
    </div>

</form>

