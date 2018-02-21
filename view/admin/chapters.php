<?php $this->title = "Billet pour l'Alaska - Administration"; ?>

<div class="breadcrumb">
    <li><a href="admin/chapters"> >> Les chapitres</a></li>
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
                    <td><a href="admin/post/<?= $this->sanitize($post['id']) ?>"><?= $this->sanitize($post['title']) ?></a></td>
                    <td>Le <?= $this->sanitize($post['date_fr']) ?></td>
                    <td><?= $this->sanitize($post['nbcomment']) ?></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


