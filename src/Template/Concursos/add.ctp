<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Listar Concursos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="concursos form large-9 medium-8 columns content">
    <?= $this->Form->create($concurso) ?>
    <fieldset>
        <legend><?= __('Adicionar Concurso') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->input('tipo',array(
              'options' => array(
                'SUPER' => 'Superior',
                'MEDIO' => 'Ensino Médio',
                'FUND' => 'Ensino Fundamental'
              )
            ));
            echo $this->Form->control('banca');
            echo $this->Form->input('estado', array(
              'options' => array(
                  'AC' => 'Acre',
                  'AL' => 'Alagoas',
                  'AP' => 'Amapá',
                  'AM' => 'Amazonas',
                  'BA' => 'Bahia',
                  'CE' => 'Ceará',
                  'DF' => 'Distrito Federal',
                  'ES' => 'Espírito Santo',
                  'GO' => 'Goiás',
                  'MA' => 'Maranhão',
                  'MT' => 'Mato Grosso',
                  'MS' => 'Mato Grosso do Sul',
                  'MG' => 'Minas Gerais',
                  'PA' => 'Pará',
                  'PB' => 'Paraíba',
                  'PR' => 'Paraná',
                  'PE' => 'Pernambuco',
                  'PI' => 'Piauí',
                  'RJ' => 'Rio de Janeiro',
                  'RN' => 'Rio Grande do Norte',
                  'RS' => 'Rio Grande do Sul',
                  'RO' => 'Rondônia',
                  'RR' => 'Roraima',
                  'SC' => 'Santa Catarina',
                  'SP' => 'São Paulo',
                  'SE' => 'Sergipe',
                  'TO' => 'Tocantins'
				      )
            ));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Adicionar')) ?>
    <?= $this->Form->end() ?>
</div>
