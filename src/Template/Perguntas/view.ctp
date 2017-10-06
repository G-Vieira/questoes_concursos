<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Pergunta $pergunta
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Editar Pergunta'), ['action' => 'edit', $pergunta->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Pergunta'), ['action' => 'delete', $pergunta->id], ['confirm' => __('Deseja deletar # {0}?', $pergunta->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Perguntas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nova Pergunta'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Associações'), ['controller' => 'PerguntasProvas','action' => 'index']) ?></li>
    </ul>
</nav>
<div class="perguntas view large-9 medium-8 columns content">
    <h3><?= h($pergunta->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($pergunta->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Explicacao') ?></th>
            <td><?= h($pergunta->explicacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resp1') ?></th>
            <td><?= h($pergunta->resp1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resp2') ?></th>
            <td><?= h($pergunta->resp2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resp3') ?></th>
            <td><?= h($pergunta->resp3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resp4') ?></th>
            <td><?= h($pergunta->resp4) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resp5') ?></th>
            <td><?= h($pergunta->resp5) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pergunta->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resposta') ?></th>
            <td><?= $this->Number->format($pergunta->resposta) ?></td>
        </tr>
    </table>
</div>
