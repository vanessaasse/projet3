<?php $this->title = "Billet simple pour l'Alaska"; ?>

<section class="title-int">

    <h2 class="title-int2"><i class="fa fa-lightbulb-o"></i> "Billet simple pour l'Alaska"</h2>

</section>

<section class="view-one-com">

    <table>
        <tr>
            <strong>Posté par <?= $comment['author']?><br/>
                Le <?= $comment['date_fr']?></strong><br/><br/>
            <?= $comment['com_content']?><br/>
        </tr>
    </table>




<form method="post" action="post/moderation/<?= $comment['id'] ?>">

    <input type="hidden" name="nb_report" value="<?= $comment['nb_report'] ?>" />
    <input type="submit" value="Confirmez le signalement de ce commentaire" />
</form>


<?php if(isset($reportMsg)): ?>
    <?= $reportMsg ?><br/>
<?php endif; ?>

</section>