<?php $this->title = 'Billet pour l\'Alaska'; ?>

<?php foreach ($posts as $post) ?>

<a href="<?= "Routeur.php?action=post&id=" . $post['id'] ?>">
    <?= $post['title'] ?>
</a>
<?= $post['date'] ?><br />
<p><?= $post['content'] ?></p>

<hr />

<?php endforeach; ?>
