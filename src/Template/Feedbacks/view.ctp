<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feedback $feedback
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Form->postLink(__('Deletar Feedback'), ['action' => 'delete', $feedback->id], ['confirm' => __('Deseja deletar # {0}?', $feedback->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Feedbacks'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="feedbacks view large-9 medium-8 columns content">
    <h3><?= h($feedback->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($feedback->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($feedback->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Feed') ?></th>
            <td><?= h($feedback->feed) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($feedback->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gravado Em') ?></th>
            <td><?= h($feedback->gravado_em) ?></td>
        </tr>
    </table>
</div>
