<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\PerguntasProva $perguntasProva
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Perguntas Prova'), ['action' => 'edit', $perguntasProva->pergunta_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Perguntas Prova'), ['action' => 'delete', $perguntasProva->pergunta_id], ['confirm' => __('Are you sure you want to delete # {0}?', $perguntasProva->pergunta_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Perguntas Provas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Perguntas Prova'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Perguntas'), ['controller' => 'Perguntas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pergunta'), ['controller' => 'Perguntas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Provas'), ['controller' => 'Provas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prova'), ['controller' => 'Provas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="perguntasProvas view large-9 medium-8 columns content">
    <h3><?= h($perguntasProva->pergunta_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Pergunta') ?></th>
            <td><?= $perguntasProva->has('pergunta') ? $this->Html->link($perguntasProva->pergunta->id, ['controller' => 'Perguntas', 'action' => 'view', $perguntasProva->pergunta->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prova') ?></th>
            <td><?= $perguntasProva->has('prova') ? $this->Html->link($perguntasProva->prova->id, ['controller' => 'Provas', 'action' => 'view', $perguntasProva->prova->id]) : '' ?></td>
        </tr>
    </table>
</div>
