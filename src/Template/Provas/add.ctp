<?php
/**
  * @var \App\View\AppView $this
  */
  $this->layout = true;
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Listar Provas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Associações'), ['controller' => 'PerguntasProvas','action' => 'index']) ?></li>
    </ul>
</nav>
<div class="provas form large-9 medium-8 columns content">
    <?= $this->Form->create($prova) ?>
    <fieldset>
        <legend><?= __('Adicionar Prova') ?></legend>
        <?php
            $opcoes = array();
            foreach($concursos as $concurso){
              $opcoes[$concurso->id] = $concurso->nome;
            }
        
            echo $this->Form->control('nome');
            echo $this->Form->control('ano');
            echo $this->Form->input('nivel',array(
              'options' => array(
                'SUPER' => 'Superior',
                'MEDIO' => 'Ensino Médio',
                'FUND' => 'Ensino Fundamental'
              )
            ));
            echo $this->Form->control('tipo');
            echo $this->Form->control('banca');
            echo $this->Form->input('concurso_id',array(
              'options' => $opcoes
            ));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Cadastrar')) ?>
    <?= $this->Form->end() ?>
</div>
