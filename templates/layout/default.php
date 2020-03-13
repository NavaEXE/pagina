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
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>SigmAdmin</title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">

    <?= $this->Html->css('milligram.min.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    
    <link href="/webroot/css/bootstrap.min.css" rel="stylesheet">
    <link href="/webroot/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/webroot/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/webroot/css/plugins/summernote/summernote-bs4.css" rel="stylesheet">
    <link href="/webroot/css/animate.css" rel="stylesheet">
    <link href="/webroot/css/style.css" rel="stylesheet">
    <link href="/webroot/css/styles.css" rel="stylesheet">
     <link href="/webroot/css/jquery-ui.css" rel="stylesheet">
    <link href="/webroot/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

</head>
  
   <?php 
    if($_SERVER['REQUEST_URI']!=""){
    echo $this->element('menu');
    }?>
<body>
  
         
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
      
  
    <footer>
    </footer>
 
        <!-- Mainly scripts -->
    <script src="/webroot/js/jquery-3.1.1.min.js"></script>
    <script src="/webroot/js/popper.min.js"></script>
    <script src="/webroot/js/bootstrap.js"></script>
    <script src="/webroot/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/webroot/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/webroot/js/validaciones.js"></script>
    <!-- Custom and plugin javascript -->
    <script src="/webroot/js/inspinia.js"></script>
    <script src="/webroot/js/plugins/pace/pace.min.js"></script>
    <script src="/webroot/js/main.js"></script>

    <script src="/webroot/js/jquery-ui.js"></script>

  
    <script src="/webroot/js/validaciones.js"></script>
    <script src="/webroot/js/plugins/pace/pace.min.js"></script>
        <!-- iCheck -->
    <script src="/webroot/js/plugins/iCheck/icheck.min.js"></script>
    <!-- Custom and plugin javascript -->
     <script src="/webroot/js/plugins/summernote/summernote-bs4.js"></script>

    <script src="/webroot/js/demo/peity-demo.js"></script>
 
        <!-- Peity -->
    <script src="/webroot/js/plugins/peity/jquery.peity.min.js"></script>
     <script src="/webroot/js/plugins/validate/jquery.validate.min.js"></script>
      <script src="/webroot/js/plugins/steps/jquery.steps.min.js"></script>




</body>

</html>
