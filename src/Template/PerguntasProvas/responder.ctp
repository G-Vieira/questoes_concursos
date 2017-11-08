<?php

  /**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Pergunta $pergunta
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
  <ul class="side-nav">
  </ul>
</nav>
<div class="perguntas view large-9 medium-8 columns content">
  <form method="post">
    <?php 
      $valores = "";
      foreach($keys as $key){
	$valores .= $key . ",";
      }
      echo "<input type='hidden' name='keys' value='" . $valores . "'>";
      
      if(count($listPerguntas) != 0){
        $num = 1;
        foreach($listPerguntas as $pergunta){
    ?>
    <h3><?= h($num . " - " .  $pergunta->nome) ?></h3>
    <input type="radio" required name="P<?= h($pergunta->id) ?>" value="1"><?= h($pergunta->resp1) ?><br>
    <input type="radio" required name="P<?= h($pergunta->id) ?>" value="2"><?= h($pergunta->resp2) ?><br>

    <?php
          if($pergunta->resp3 != null){ echo "<input type='radio' required name='P" . $pergunta->id . "' value=3>" . $pergunta->resp3 . "<br>";}
          if($pergunta->resp4 != null){ echo "<input type='radio' required name='P" . $pergunta->id . "' value=4>" . $pergunta->resp4 . "<br>";}
          if($pergunta->resp5 != null){ echo "<input type='radio' required name='P" . $pergunta->id . "' value=5>" . $pergunta->resp5 . "<br>";}
        
	  $num++; 
        }
        echo "<br><button type='submit'>Salvar</button>";
      }else{
	$num = 1;
	foreach($tblRespostas as $respostas){
	  ?>
	  
          <!--respostas-->
	  <h3><?= h($num . " - " .  $pergunta->nome) ?></h3>
	  <!--
           $num - Nome questao
            Resposta do usuario
            se incorreta(
               resposta certa)
            explicacao
          -->
    
          <?php
	  $num++;
	}
	echo "<br><br>" . $this->Html->link(__('Voltar para a pagina de provas'), ['controller' => 'Provas' ,'action' => 'listar']);
      }
    ?>
  </form>
</div>