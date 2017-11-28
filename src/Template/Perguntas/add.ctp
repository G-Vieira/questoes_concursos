<?php
/**
  * @var \App\View\AppView $this
  */
  $this->layout = true;
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Listar Associações'), ['controller' => 'PerguntasProvas','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Perguntas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="perguntas form large-9 medium-8 columns content">
    <?= $this->Form->create($pergunta) ?>
    <fieldset>
        <legend><?= __('Adicionar Pergunta') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('explicacao');
            echo $this->Form->control('resposta');
            echo $this->Form->control('resp1');
            echo $this->Form->control('resp2');
            echo $this->Form->control('resp3');
            echo $this->Form->control('resp4');
            echo $this->Form->control('resp5');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Cadastrar')) ?>
    <?= $this->Form->end() ?>
</div>
