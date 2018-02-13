<?php $this->title = "Billet pour l'Alaska - Administration"; ?>

<div class="breadcrumb">
    <li><a href="admin/profil"> >> Mon profil</a></li>
</div>


Bienvenue <?= ucfirst($login) ?><br/><br/>





<form method="post" action="admin/profil">


    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="sub-title">Mot de passe :</div>
                    <input type="password" name="password" class="form-control" size="53" max="600"
                           required value="<?= $users['password'] ?>">
                    <button type="submit" class="btn btn-default">Mettre à jour</button>

                </div>
            </div>
        </div>
    </div>

</form>






<!--
<form method="post" action="admin/monProfil ?>">
    Modifiez votre mot de passe :
    <input type="password" name="newpassword" />
    <input type="submit" value="Enregistrer" />
</form>

-->