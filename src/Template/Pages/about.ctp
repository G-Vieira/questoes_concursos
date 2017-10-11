<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = true;
$cakeDescription = 'Sobre';

?>
<!-- this is the markup. you can change the details (your own name, your own avatar etc.) but don’t change the basic structure! -->

<?php echo $this->Html->css('card.css') ?>
<br>
<div class="conteudo_acima">
  <p class="paragrafo"><b>Este site é o trabalho final da matéria de Linguagem de Programação 4, do Curso de Ciencia da Computação<br />
   do IFRS, campus Ibirubá.</b></p>
</div>

<div class="conteudo">
  <div class="large-3 columns">
    <div class="profile-card" style="background: url(<?php echo $this->Url->build('/', true) ?>/webroot/img/lisi_back_logo.jpeg)">
      <div class="header">
        <a href="https://www.facebook.com/lisiane.reips">
          <?= $this->Html->image('lisi_logo.jpg'); ?>
        </a>
        <h1>Lisiane Reips</h1>
        <h2> - Database Designer - </h2>
      </div>
      <div class="profile-bio">
        <p>Hello there!</p>
        <p>vazio</p>
      </div>
    </div>
  </div>
  <div class="large-4 columns">
    <div class="profile-card" style="background: url(<?php echo $this->Url->build('/', true)?>/webroot/img/gian_back_logo.jpg)">
      <div class="header">
        <a href="https://www.facebook.com/gian.paulo.94">
          <?= $this->Html->image('gian_logo.jpg'); ?>
        </a>
        <h1>Gian Paulo Vieira</h1>
        <h2> - Backend Programmer - </h2>
      </div>
      <div class="profile-bio">
        <p>Hello there!</p>
        <p>vazio</p>
      </div>
    </div>
  </div>
</div>