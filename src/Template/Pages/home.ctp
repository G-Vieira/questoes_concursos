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
    </ul>
</nav>

<header class="row">
    <div class="header-image"><?= $this->Html->image('cake.logo.svg') ?></div>
    <div class="header-title">
        <h1>Questões para concursos, o melhor site de Ibirubá para concursos.</h1>
    </div>
</header>

<div class="row">
    <div class="columns large-12">
        <div class="ctp-warning alert text-center">
            <p>Site sobre construção.</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="columns large-6">
      <h4>Status Banco</h4>
      <?php
      try {
          $connection = ConnectionManager::get('default');
          $connected = $connection->connect();
      } catch (Exception $connectionError) {
          $connected = false;
          $errorMsg = $connectionError->getMessage();
          if (method_exists($connectionError, 'getAttributes')):
              $attributes = $connectionError->getAttributes();
              if (isset($errorMsg['message'])):
                  $errorMsg .= '<br />' . $attributes['message'];
              endif;
          endif;
      }
      ?>
      <ul>
      <?php if ($connected): ?>
          <li class="bullet success">Conectado ao banco.</li>
      <?php else: ?>
          <li class="bullet problem">Sem conexão com o banco. Edite o arquivo config/app.php.<br /><?= $errorMsg ?></li>
      <?php endif; ?>
      </ul>
    </div>
    <div class="columns large-6">
        <h4>Permissões</h4>
        <ul>
        <?php if (is_writable(TMP)): ?>
            <li class="bullet success">Seu diretório tmp esta com permissão de escrita.</li>
        <?php else: ?>
            <li class="bullet problem">Seu diretório tmp esta sem permissão de escrita.</li>
        <?php endif; ?>

        <?php if (is_writable(LOGS)): ?>
            <li class="bullet success">Seu diretório de logs esta com permissão de escrita.</li>
        <?php else: ?>
            <li class="bullet problem">Seu diretório de logs esta sem permissão de escrita.</li>
        <?php endif; ?>

        <?php $settings = Cache::config('_cake_core_'); ?>
        <?php if (!empty($settings)): ?>
            <li class="bullet success">The <em><?= $settings['className'] ?>Engine</em> is being used for core caching.</li>
        <?php else: ?>
            <li class="bullet problem">Seu cachenão esta funcionando. Checar em config/app.php</li>
        <?php endif; ?>
        </ul>
    </div>
    <hr />
</div>

<div class="row">
    <div class="columns large-6">
    </div>
    <div class="columns large-6">
        <h4>Vazio</h4>
    </div>
    <hr />
</div>

<div class="row">
</div>

<div class="row">
    <div class="columns large-12 text-center">
        <h3 class="more">Vazio</h3>
    </div>
    <hr/>
</div>

</body>
</html>
