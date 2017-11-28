<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Prova[]|\Cake\Collection\CollectionInterface $provas
  */
  $this->layout = true;
?>
<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Nova Prova'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Associações'), ['controller' => 'PerguntasProvas','action' => 'index']) ?></li>
    </ul>
</nav>
<div class="provas index large-10 medium-8 columns content">
    <h3><?= __('Provas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ano') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nivel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('banca') ?></th>
                <th scope="col"><?= $this->Paginator->sort('concurso_id') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($provas as $prova): ?>
            <tr>
                <td><?= $this->Number->format($prova->id) ?></td>
                <td><?= h($prova->nome) ?></td>
                <td><?= $this->Number->format($prova->ano) ?></td>
                <td><?= h($prova->nivel) ?></td>
                <td><?= h($prova->tipo) ?></td>
                <td><?= h($prova->banca) ?></td>
                <td><?= $this->Number->format($prova->concurso_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $prova->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $prova->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $prova->id], ['confirm' => __('Deseja deletar # {0}?', $prova->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
            <?= $this->Paginator->last(__('ultimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}}')]) ?></p>
    </div>
</div>
