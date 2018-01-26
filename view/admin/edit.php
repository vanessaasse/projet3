<?php $this->title = "Billet pour l'Alaska - Administration"; ?>


<div class="breadcrumb">
    <li><a href="admin/edit"> >> Ajouter un chapitre </a></li>
</div>

<form method="post" action="admin/edit/<?= $id ?>">

    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="sub-title">Titre :</div>
                    <input type="text" name="title" class="form-control" size="53" max="600"
                           required value="<?php if(isset($post['title'])) echo $post['title'] ?>">
                    <br/>
                    <div class="sub-title">Contenu : </div>
                    <textarea name="content" ><?php if(isset($post['content'])) echo $post['content'] ?></textarea>
                    <br/>
                    <button type="submit" class="btn btn-default">Mettre à jour</button>
                       <?php var_dump($id); ?>


                </div>
            </div>
        </div>
    </div>

</form>

