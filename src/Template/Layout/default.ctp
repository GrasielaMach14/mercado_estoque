<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Mercado XX';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('menubar.css') ?>
    <?= $this->Html->css('janela.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#"><?= $this->Html->Link('Home', ['controller' => '#']);?></a>
            <a href="#"><?= $this->Html->Link('Clientes', ['controller' => 'clientes', 'action' => 'index']);?></a>
            <a href="#"><?= $this->Html->Link('Produtos', ['controller' => 'produtos', 'action' => 'index']);?></a>
            <a href="#"><?= $this->Html->Link('Estoque', ['controller' => 'estoques', 'action' => 'index']);?></a>
            <a href="#"><?= $this->Html->Link('Login', ['controller' => 'users', 'action' => 'login']);?></a>
            <a href="#"><?= $this->Html->Link('Logout', ['controller' => 'users', 'action' => 'logout']);?></a>
            <a href="#"><?= $this->Html->Link('Inscreva-se', ['controller' => 'users', 'action' => 'add']);?></a>
        </div>
        <div id="main">
            <button class="openbtn" style="font-size:25px;height:36px;" onclick="openNav()">&#9776;</button>
        </div>    
        <!--<ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>-->
        <div class="top-bar-section">
            <!--<ul class="right">
                <li><a target="_blank" href="https://book.cakephp.org/3.0/">Documentation</a></li>
                <li><a target="_blank" href="https://api.cakephp.org/3.0/">API</a></li>-->
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
        <p style="color: bisque;font-size: 11px;padding: 5px;">Desenvolvido por Grasiela usando CakePhp 3.x</p>
    </footer>
    <script src="webroot/js/menubar.js"></script>
    <script src="webroot/js/janela.js"></script>    
</body>
</html>
