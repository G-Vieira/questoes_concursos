<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Pergunta[]|\Cake\Collection\CollectionInterface $perguntas
  */
  $this->layout = true;
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Nova Pergunta'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Associações'), ['controller' => 'PerguntasProvas','action' => 'index']) ?></li>
    </ul>
</nav>
<div class="perguntas index large-9 medium-8 columns content">
    <h3><?= __('Perguntas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resposta') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($perguntas as $pergunta): ?>
            <tr>
                <td><?= $this->Number->format($pergunta->id) ?></td>
                <td><?= h($pergunta->nome) ?></td>
                <td><?= $this->Number->format($pergunta->resposta) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $pergunta->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $pergunta->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $pergunta->id], ['confirm' => __('Deseja deletar # {0}?', $pergunta->id)]) ?>
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
