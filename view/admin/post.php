<?php $this->title = "Billet simple pour l'Alaska"; ?>


        <?= $this->sanitize($post['title']) ?><br/>
        Publié le <?= $this->sanitize($post['date_fr']) ?><br/>

        <?= $this->sanitize($post['content']) ?>
