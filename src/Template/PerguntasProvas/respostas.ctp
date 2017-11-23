<?php

  /**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Pergunta $pergunta
  */
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
  <h3><?= h($num . " - " .  $pergunta->nome) ?></h3>
      <?php 
	  if($pergunta->resposta == $respostas['P'.$pergunta->id]){
	    echo "<h4>Acertou!</h4>";
	    echo "Resposta: " . $pergunta->resp1 . "<br>";
	  }else{
	    echo "<h4>Errou!</h4>";
	    echo "Resposta Correta: " . $pergunta->get_resp_by_id($pergunta->resposta). "<br>";
	  }
	  echo "Explicação: " . $pergunta->explicacao . "<br><br>";
	  $num++;
        } 
      ?>
</div>
<script>loadingGif();</script>