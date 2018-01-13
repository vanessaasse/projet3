<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <base href="<?= $racineWeb ?>"> <!-- pas de a devant href car le a définit le lien hypertexte. -->

    <link href="content/Bootstrap/node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link href="content/html5up-story/assets/css/main.css" rel="stylesheet">
    <link href="content/style.css" rel="stylesheet">
    <title><?= $title ?></title>
</head>

<body>


<a href="index.php"><h1>Billet simple pour l'Alaska</h1></a>

<p><?= $content ?></p>

</body>

<footer>
    <hr />
    © 2017 - Vanessa Asse - <a href="https://openclassrooms.com/paths/chef-de-projet-multimedia-developpement" target="blank">
        Projet 3 dans la cadre de la formation<br />"Chef de projet multimédia - spécialité Développement" avec Openclassrooms</a>
</footer>

</html>