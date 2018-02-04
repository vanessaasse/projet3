<?php $this->title = "Billet pour l'Alaska"; ?>


    <section class="banner style2">

        <div class="content">
        <a href="index.php"><h1>Billet simple pour l'Alaska</h1></a>
        <h2>par Jean Forteroche, acteur et écrivain</h2>
            <br/>

            <p class="major">Bienvenue sur mon nouveau blog ! Pour mon <b>3e ouvrage</b>, j'ai décidé d'innover
                et de rendre ce livre <b>interactif</b>.<br/>« Bienvenue en Alaska » ne sera pas écrit à 2 mains mais
                à plusieurs, avec vous, chers lecteurs. <b>Je vous propose de découvrir, chaque vendredi
                    soir, pendant 10 semaines, un chapitre de ce nouveau roman.</b> N’hésitez pas à <b>commenter chacun d'entre eux.</b> Je vous ferai des retours au fur et à mesure.
                Bonne lecture !</p>
        </div>

        <div class="image">
            <img src="content/html5up-story/images/garrett-parker-unsplashcom-cc247225.jpg" alt="" />
        </div>

    </section>


    <section class="spotlight style1 orient-right content-align-center">

        <div class="content">
        <h3 class="intro">Lisez, appréciez, commentez le dernier chapitre :</h3>

            <?php foreach ($posts as $post): ?>

            <h2><?= $post['title'] ?></h2>
            <h4 class="dateintro">Publié le <?= $post['date_fr'] ?></h4>

            <p><?= $post['content'] ?><br /></p>

            <div class="button"><a href="post/index">Découvrez les précédents chapitres !</a></div>

            <?php endforeach; ?>


        </div>

    </section>


