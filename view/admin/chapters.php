<?php $this->title = "Billet pour l'Alaska - Administration"; ?>

<div class="breadcrumb">
    <li><a href="http://localhost:8888/projet3fw/admin/chapters"> >> Les différents chapitres</a></li>
</div>

<div class="row">
    <div class="col-md-12">

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr class="danger">
                    <th>Les chapitres</th>
                    <th>Date de publication</th>
                    <th>Nombre de commentaires</th>
                    </div>
                </tr>

                </thead>

                <tbody>
                <?php foreach ($posts as $post): ?>
                <tr>
<td><?= $this->sanitize($post['title']) ?></td>
                    <td>Le <?= $this->sanitize($post['date_fr']) ?></td>
    <td><?= $this->sanitize($nbCommentsChp) ?></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>


