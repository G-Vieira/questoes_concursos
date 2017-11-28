<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Concurso $concurso
  */
  $this->layout = true;
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Editar Concurso'), ['action' => 'edit', $concurso->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Concurso'), ['action' => 'delete', $concurso->id], ['confirm' => __('Deseja deletar o usuario # {0}?', $concurso->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Concursos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Concurso'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="concursos view large-9 medium-8 columns content">
    <h3><?= h($concurso->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($concurso->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($concurso->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Banca') ?></th>
            <td><?= h($concurso->banca) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($concurso->estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($concurso->id) ?></td>
        </tr>
    </table>
</div>
