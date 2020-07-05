<?php $v->layout("_theme"); ?>

<div class="error">
    <h2>Oooooops erro <?=$error?> </h2>
    <p>Used from the main menu, text is generated in the previously selected genre. </p>
</div>

<?php $v->start("sidebar");?>
<a href="<?= url(); ?>" title="Voltar ao início">Voltar</a>
<?php $v->end();?>


