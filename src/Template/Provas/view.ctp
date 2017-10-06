<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Prova $prova
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Deletar Prova'), ['action' => 'edit', $prova->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Prova'), ['action' => 'delete', $prova->id], ['confirm' => __('Deseja deletar # {0}?', $prova->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Provas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nova Prova'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Associações'), ['controller' => 'PerguntasProvas','action' => 'index']) ?></li>
    </ul>
</nav>
<div class="provas view large-9 medium-8 columns content">
    <h3><?= h($prova->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($prova->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nivel') ?></th>
            <td><?= h($prova->nivel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($prova->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Banca') ?></th>
            <td><?= h($prova->banca) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($prova->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ano') ?></th>
            <td><?= $this->Number->format($prova->ano) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Concurso') ?></th>
            <td><?= $this->Number->format($prova->concurso_id) ?></td>
        </tr>
    </table>
</div>
