<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Concurso[]|\Cake\Collection\CollectionInterface $concursos
  */
  $this->layout = true;
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Novo Concurso'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="concursos index large-9 medium-8 columns content">
    <h3><?= __('Concursos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('banca') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($concursos as $concurso): ?>
            <tr>
                <td><?= $this->Number->format($concurso->id) ?></td>
                <td><?= h($concurso->nome) ?></td>
                <td><?= h($concurso->tipo) ?></td>
                <td><?= h($concurso->banca) ?></td>
                <td><?= h($concurso->estado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $concurso->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $concurso->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $concurso->id], ['confirm' => __('Deseja deletar o usuario # {0}?', $concurso->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}}')])  ?></p>
    </div>
</div>
