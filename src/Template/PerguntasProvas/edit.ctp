<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $perguntasProva->pergunta_id],
                ['confirm' => __('Deseja deletar # {0}?', $perguntasProva->pergunta_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Associações'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Perguntas'), ['controller' => 'Perguntas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nova Pergunta'), ['controller' => 'Perguntas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Provas'), ['controller' => 'Provas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nova Prova'), ['controller' => 'Provas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="perguntasProvas form large-9 medium-8 columns content">
    <?= $this->Form->create($perguntasProva) ?>
    <fieldset>
        <legend><?= __('Editar Associações') ?></legend>
        <?php
        
            $select_provas = "<select required name='prova_id'>";
            $select_perguntas = "<select required name='pergunta_id'>";
          
            foreach($provas as $prova){
              $select_provas .= "<option value = '" . $prova->id . "' />" . $prova->id . $prova->nome . "</option>";
            }            
            
            foreach($perguntas as $pergunta){
              $select_perguntas .= "<option value = '" . $pergunta->id . "' />" . $pergunta->id . $pergunta->nome . "</option>";
            }
        
            $select_provas .= "</select>";
            $select_perguntas .= "</select>";
            
            echo "<label>Prova</label>" . $select_provas . "<br><label>Pergunta</label>" . $select_perguntas . "<br>";
        
        ?>
    </fieldset>
    <?= $this->Form->button(__('Atualizar')) ?>
    <?= $this->Form->end() ?>
</div>
