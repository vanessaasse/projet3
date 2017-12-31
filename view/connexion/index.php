<?php $this->title = "Billet pour l'Alaska - Connexion" ?>

<p>Pour accéder à l'espace administrateur, vous devez vous connecter ci-dessous.</p>

<form action="connexion/connect" method="post">

    <fieldset>
        <legend>Saisissez votre login et mot de passe : </legend>
        <table>
            <tr><td><label>Login : </label></td><td>
                    <input type="text" name="login" size="53" max="256" required autofocus></td></tr>
            <tr><td><label>Mot de passe : </label></td><td>
                    <input type="text" name="password" size="53" max="256" required></td></tr>
            <tr><td><input type="submit" value="Connexion" /></td></tr>
        </table>
    </fieldset>

</form>


<?php if (isset($msgErreur)): ?>
<p><?= $msgErreur ?></p>
<?php endif; ?>



