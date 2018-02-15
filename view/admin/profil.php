<?php $this->title = "Billet pour l'Alaska - Administration"; ?>

<div class="breadcrumb">
    <li><a href="admin/profil"> >> Changer mon mot de passe</a></li>
</div>






<form method="post" action="admin/profil">



    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <h3>Bienvenue <?= ucfirst($login) ?></h3> <br/>


                    <tr>
                        <td><label>Mon ancien mot de passe :</label></td>
                        <td><input type="password" name="password" size="53" max="256" autofocus></td><br/><br/>
                        <td><label>Mon nouveau mot de passe : </label></td>
                        <td><input type="password" name="newpassword" size="53" max="256"></td><br/><br/>
                        <td><label>Confirmation de mon nouveau mot de passe : </label></td>
                        <td><input type="password" name="newpasswordverif" size="53" max="256"></td><br/><br/>
                        <td><button type="submit" class="btn btn-default">Mettre à jour</button></td>
                    </tr>

                    <!-- affiche le message en fonction de la condition dans laquelle tu arrives.
                   Boucle foreach car on appelle un message inséré dans un tableau.-->
                    <?php foreach ($msgs as $msg): ?>
                        <?= $msg ?><br/>
                    <?php endforeach; ?>

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