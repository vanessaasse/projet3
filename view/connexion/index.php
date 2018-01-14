<?php $this->title = "Billet pour l'Alaska - Connexion" ?>

<section class="spotlight style1 orient-right content-align-left">
    <div class="content">

        <h3 class="intro">Pour accéder à l'espace administrateur, veuillez saisir votre login et votre mot de passe.</h3>

        <form action="connexion/connect" method="post">

            <label>Login / Pseudo : </label>
            <input type="text" name="login" size="53" max="256" required autofocus>
            <br/>
            <label>Mot de passe : </label>
            <input type="password" name="password" size="53" max="256" required></td></tr>
            <br/>
            <input type="submit" value="Connexion" />

        </form>

<?php if (isset($errorMsg)): ?>
<div class="error">Erreur : <?= $errorMsg ?></div>
<?php endif; ?>

    </div>
</section>





