<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\PerguntasProva[]|\Cake\Collection\CollectionInterface $perguntasProvas
  */
  $this->layout = true;
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Nova Associação'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Perguntas'), ['controller' => 'Perguntas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nova Pergunta'), ['controller' => 'Perguntas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Provas'), ['controller' => 'Provas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nova Prova'), ['controller' => 'Provas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="perguntasProvas index large-9 medium-8 columns content">
    <h3><?= __('Perguntas Provas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('pergunta_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prova_id') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($perguntasProvas as $perguntasProva): ?>
            <tr>
                <td><?= $perguntasProva->has('pergunta') ? $this->Html->link($perguntasProva->pergunta->id, ['controller' => 'Perguntas', 'action' => 'view', $perguntasProva->pergunta->id]) : '' ?></td>
                <td><?= $perguntasProva->has('prova') ? $this->Html->link($perguntasProva->prova->id, ['controller' => 'Provas', 'action' => 'view', $perguntasProva->prova->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $perguntasProva->pergunta_id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $perguntasProva->pergunta_id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $perguntasProva->pergunta_id], ['confirm' => __('Deseja deletar # {0}?', $perguntasProva->pergunta_id)]) ?>
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
