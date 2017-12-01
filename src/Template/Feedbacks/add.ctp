<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feedback $feedback
 */
?>
<nav class="large-1 columns" id="actions-sidebar">
    <ul class="side-nav">
    </ul>
</nav>
<div class="feedbacks form large-11 medium-8 columns content">
    <?= $this->Form->create($feedback) ?>
    <fieldset>
        <p>
	  Observou algum bug ou tem uma sugestão para a melhoria deste site?<br>
	  Faça um comentário abaixo.<br>
	</p>
        <legend><?= __('Adicionar Feedback') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('email');
            echo $this->Form->input('feed', array('type' => 'textarea'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
