<?php

/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Pergunta $pergunta
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
    </ul>
</nav>
<div class="perguntas view large-9 medium-8 columns content">
<?php 
  $num = 1;
  foreach($listPerguntas as $pergunta){
?>

    <h3><?= h($num) ?></h3>
    <label><?= h($pergunta->nome) ?></label>

<?php $num++; } ?>
    <br>
    <button type="submit">Salvar</button>
</div>