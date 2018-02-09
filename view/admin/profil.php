<?php $this->title = "Billet pour l'Alaska - Administration"; ?>

<div class="breadcrumb">
    <li><a href="admin/monProfil"> >> Votre profil</a></li>
</div>


<?= $user['login'] ?>
<?= $user['password'] ?>


<form method="post" action="admin/monProfil ?>">
    Modifiez votre mot de passe :
    <input type="password" name="newpassword" />
    <input type="submit" value="Enregistrer" />
</form>