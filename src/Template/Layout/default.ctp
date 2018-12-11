<?php
   $cakeDescription = 'Dash - Clientes';
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
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
      <?= $this->Html->css('dash.css') ?>
      <?= $this->fetch('meta') ?>
      <?= $this->fetch('css') ?>
      <?= $this->fetch('script') ?>
   </head>
   <body>
      <nav class="navcolor"></nav>
      <div class="container clearfix main">
         <?= $this->fetch('content') ?>
      </div>
      <footer class="footer text-center">
         <div class="container">
            <span class="text-muted"><i class="far fa-copyright"></i> Vinícius Diehl de Franceschi 2018</span>
         </div>
      </footer>
      </div>
   </body>
</html>
