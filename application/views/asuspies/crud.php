<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Jóvenes A Sus Pies</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <?php
    foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>
    <?php foreach($js_files as $file): ?>
    <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
    <link rel="icon" type="image/png" href="<?= base_url(); ?>dist/img/favicon.png"/>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?= base_url(); ?>dist/css/bootstrap.css" media="screen">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?= base_url(); ?>bower_components/html5shiv/dist/html5shiv.min.js"></script>
    <script src="<?= base_url(); ?>bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <?php $this->load->view('asuspies/nav');?>
    <div class="col-xs-12" style="margin-top: 150px;">
      <div class="container-fluid">
        <div class="row" >
          <div class="col-xs-12">
              <?php echo $output; ?>
          </div>   
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <script src="bower_components/requirejs/require.js" data-main="js/main.js">    </script>
  </body>
</html>