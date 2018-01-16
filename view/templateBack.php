<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <base href="<?= $racineWeb ?>"> <!-- pas de a devant href car le a définit le lien hypertexte. -->

    <link href="content/Bootstrap/node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link href="content/styleBack.css" rel="stylesheet">

    <!-- Bootstrap theme Styles-->
    <link href="content/brilliant-free-bootstrap-admin-template/assets/css/custom-styles.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="content/brilliant-free-bootstrap-admin-template/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="content/brilliant-free-bootstrap-admin-template/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="content/brilliant-free-bootstrap-admin-template/assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css">

    <title><?= $title ?></title>
</head>

<body>
<div id="wrapper">

    <!--Toogle-->
    <nav class="navbar navbar-default top-navbar" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div id="sideNav" href="">
                <i class="fa fa-bars icon"></i>
            </div>
        </div>
    </nav>

    <!--navigation sidebar -->

    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li>
                    <a href="http://localhost:8888/projet3fw"><i class="fa fa-arrow-right"></i>Aller sur le site</a>
                </li>
                <li>
                    <a href="http://localhost:8888/projet3fw/admin"><i class="fa fa-dashboard"></i>Tableau de bord</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bookmark"></i>Tous les chapitres</a>
                </li>

                <li>
                    <a href="#"><i class="fa fa-edit"></i>Ajouter un chapitre</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-comments"></i>Commentaires</a>
                </li>

                <li>
                    <a href="#"><i class="fa fa-user"></i><span class="li_mq">Profil</span></a>
                </li>
                <li>
                    <a href="connexion/disconnect"><i class="fa fa-sign-out"></i><span class="li_mq">Se déconnecter</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <!--corps de texte -->

    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">Billet simple pour l'Alaska</h1>

                <p><?= $content ?></p>
        </div>
    </div>

    <!--fin du corps de texte -->

    </div>


<footer>
    <hr />
    © 2017 - Vanessa Asse - <a href="https://openclassrooms.com/paths/chef-de-projet-multimedia-developpement" target="blank">
        Projet 3 dans la cadre de la formation<br />"Chef de projet multimédia - spécialité Développement" avec Openclassrooms</a>
</footer>


<!-- /. WRAPPER  -->
<!-- JS Scripts-->
<!-- jQuery Js -->
<script src="content/brilliant-free-bootstrap-admin-template/assets/js/jquery-1.10.2.js"></script>
<!-- Bootstrap Js -->
<script src="content/brilliant-free-bootstrap-admin-template/assets/js/bootstrap.min.js"></script>

<!-- Metis Menu Js -->
<script src="content/brilliant-free-bootstrap-admin-template/assets/js/jquery.metisMenu.js"></script>
<!-- Morris Chart Js -->
<script src="content/brilliant-free-bootstrap-admin-template/assets/js/morris/raphael-2.1.0.min.js"></script>
<script src="content/brilliant-free-bootstrap-admin-template/assets/js/morris/morris.js"></script>


<script src="content/brilliant-free-bootstrap-admin-template/assets/js/easypiechart.js"></script>
<script src="content/brilliant-free-bootstrap-admin-template/assets/js/easypiechart-data.js"></script>

<script src="content/brilliant-free-bootstrap-admin-template/assets/js/Lightweight-Chart/jquery.chart.js"></script>

<!-- Custom Js -->
<script src="content/brilliant-free-bootstrap-admin-template/assets/js/custom-scripts.js"></script>


<!-- Chart Js -->
<script type="text/javascript" src="content/brilliant-free-bootstrap-admin-template/assets/js/Chart.min.js"></script>
<script type="text/javascript" src="content/brilliant-free-bootstrap-admin-template/assets/js/chartjs.js"></script>

</body>
</html>