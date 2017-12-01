<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = true;

if (!Configure::read('debug')):
    throw new NotFoundException('Please replace src/Template/Pages/home.ctp with your own version.');
endif;

$cakeDescription = 'Questões para Concurso';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('home.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body class="home">

<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Painel') ?></li>
        <li><?= $this->Html->link(__('Lista de provas'), ['controller' => 'Provas','action' => 'listar']) ?></li>
	<li><?= $this->Html->link(__('Sugestões'),['controller' => 'Feedbacks','action' => 'add'])?></li>
    </ul>
</nav>

<header class="row">
    <div class="header-image" ><?= $this->Html->image('new-logo.PNG') ?></div>
    <div class="header-title">
        <h1>Questões para concursos, o melhor site de Ibirubá para concursos.</h1>
    </div>
</header>
<!--
<div class="row">
    <div class="columns large-12">
        <div class="ctp-warning alert text-center">
            <p>Site sobre construção.</p>
        </div>
    </div>
</div>
-->

<div class="row">
    <div class="columns large-12">
      <h4>Bem-Vindo</h4>
      <p>
	Este site é dedicado para o exercicio de Provas de concursos. Para começar
	clique em 'Listar Provas' na aba à esquerda, e escolha uma prova para fazer.
      </p>
    </div>
    <hr />
</div>

<div class="row">
    <div class="columns large-6">
      <h5>Para os nerds</h5>
      Site construido em Php7.0<br> sobre o framework CakePhp 3.x,<br> utilizando banco de dados Mysql.
    </div>
    <div class="columns large-6">
        <h5>Sobre</h5>
	Site construido por:<br>
	@gian.vieira<br>
	@lisiane.reips<br>
	@carlos.bonacina<br>
    </div>
    <hr />
</div>
<!--
<div class="row">
    <div class="columns large-12 text-center">
        <h3 class="more">Vazio</h3>
    </div>
    <hr/>
</div>
-->
<div id="intro" style="display:none;">
  <img id="introImg" src="" />
</div>
<script>showIntro();</script>
</body>
</html>