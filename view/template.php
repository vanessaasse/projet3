<!DOCTYPE html><html lang="fr"><head>    <meta charset="UTF-8" />    <meta http-equiv="X-UA-Compatible" content="IE=edge">    <meta name="viewport" content="width=device-width, initial-scale=1" />    <base href="<?= $racineWeb ?>"> <!-- pas de a devant href car le a définit le lien hypertexte. -->    <link href="content/Bootstrap/node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">    <link href="content/html5up-story/assets/css/main.css" rel="stylesheet">    <link href="content/style.css" rel="stylesheet">    <title><?= $title ?></title></head><body>    <!-- Wrapper -->    <div id="wrapper">        <header>            <nav>                <div class="navbar navbar-default navbar-fixed-top"> <!--navigateur en noir -->                <div class="container-fluid">                <ul class="nav navbar-nav">                    <li><a href="#">Accueil</a></li>                    <li><a href="#">Les différents chapitres</a></li>                    <li><a href="#">A propos</a></li>                    <li><a href="#">Contact</a></li>                </ul>                </div>                </div>            </nav>            <section class="banner style2">                <div class="content">                <a href="index.php"><h1>Billet simple pour l'Alaska</h1></a>                <h2>par Jean Forteroche, acteur et écrivain</h2>                    <br/>                    <p class="major">Bienvenue sur mon nouveau blog !<br/> Pour mon <b>3e ouvrage</b>, je souhaite innover et rendre ce livre <b>interactif</b>.<br/>                        « Bienvenue en Alaska » ne sera pas écrit à 2 mains mais à plusieurs, avec vous, chers lecteurs. Pour cela, <b>je vous propose de                            découvrir, chaque vendredi soir, pendant 10 semaines, un chapitre de ce nouveau roman.</b></p>                    <p class="major">Que le personnage principal vous agace ou vous fasse rire, que vous trouviez l’intrigue un peu trop légère ou bien                        compliquée, qu’un détail supplémentaire ait été intéressant ci et là, <b>n’hésitez pas à commenter chacun des chapitres.</b>                        Je vous ferai des retours au fur et à mesure de l'écriture. Bonne lecture !</p>                </div>                <div class="image">                    <img src="content/html5up-story/images/garrett-parker-unsplashcom-cc247225.jpg" alt="" />                </div>            </section>        </header><p><?= $content ?></p></body><footer><hr />    © 2017 - Vanessa Asse - <a href="https://openclassrooms.com/paths/chef-de-projet-multimedia-developpement" target="blank">        Projet 3 dans la cadre de la formation<br />"Chef de projet multimédia - spécialité Développement" avec Openclassrooms</a></footer></div></html>