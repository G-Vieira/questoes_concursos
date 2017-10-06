<?php
/**
  * @var \App\View\AppView $this
  */
    $this->layout = true;
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Quer realmente deletar o usuario # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar usuarios'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Editar usuario') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('email');
            echo $this->Form->control('role');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Atualizar')) ?>
    <?= $this->Form->end() ?>
</div>
