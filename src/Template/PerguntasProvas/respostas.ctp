<?php

  /**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Pergunta $pergunta
  */
  $this->layout = true;
?>

<div id="mascara" style="display:none;">
  <img id="mascaraImg" src="" />
</div>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
  <ul class="side-nav">
    <li class="heading"><?= __('Painel') ?></li>
    <li><?= $this->Html->link(__('Lista de provas'), ['controller' => 'Provas','action' => 'listar']) ?></li>
  </ul>
</nav>
<div class="perguntas view large-9 medium-8 columns content">
      <?php 
        $num = 1;  
        foreach($perguntas as $pergunta){
      ?>
      <?php 
	  if($pergunta->resposta == $respostas['P'.$pergunta->id]){
	    echo   "<h3>" . $this->Html->image('green_check.png') . "&nbsp;" . h($num . " - " .  $pergunta->nome) . "</h3>";
	    echo "Resposta: " . $pergunta->get_resp_by_id($pergunta->resposta) . "<br>";
	  }else{
	    echo   "<h3>" . $this->Html->image('red_check.png') . "&nbsp;" .  h($num . " - " .  $pergunta->nome) . "</h3>";
	    echo "Resposta Correta: " . $pergunta->get_resp_by_id($pergunta->resposta). "<br>";
	  }
	  echo "Explicação: " . $pergunta->explicacao . "<br><br>";
	  $num++;
        } 
      ?>
</div>
<script>loadingGif();</script>