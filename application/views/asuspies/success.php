<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Jóvenes A Sus Pies</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
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
  <body ng-controller="AsuspiesController">
      <div class="col-xs-12" id="thanks">
        <div class="text-center" id="head-title"><img src="<?= base_url(); ?>dist/img/logo_h.png" alt="Jovenes a sus pies" class="img-responsive"/></div>
        <h1 class="text-center tx-wh oswald">Gracias</h1>
        <h2 class="text-center tx-wh" id="slogan"><i><?= $nombre; ?> recuerda que <strong>#ASUSPIES</strong> eres <?= $mensaje; ?>.</i></h2>
        <a href="<?= site_url(); ?>"  class="btn btn-primary center-btn"  title="Si si, peguele al click"><i class="fa fa-child"></i>  Registrar Otro  <i class="fa fa-repeat"></i></a><br>
        <a href="https://twitter.com/share?url=https://www.facebook.com/GrupoDeJovenesASusPies&hashtags=ASusPies&text=Ya soy un joven A Sus Pies y tu?"  class="btn btn-info center-btn pop-share"  title="Si si, twitealo"><i class="fa fa-twitter"></i>  #ASusPies Twiteo  <i class="fa fa-twitter"></i></a><br>
        <a href="http://www.facebook.com/sharer/sharer.php?u=https://www.facebook.com/GrupoDeJovenesASusPies&title=Ya soy un joven ASusPies y tu? https://www.facebook.com/GrupoDeJovenesASusPies" class="btn btn-success center-btn pop-share"  title="Si si, pal' face"><i class="fa fa-facebook"></i>  #ASusPies Va Pal' Face  <i class="fa fa-facebook"></i></a>
      </div>
      <div class="clearfix"></div>
    </section>
    
    <script src="<?= base_url(); ?>bower_components/requirejs/require.js" data-main="<?= base_url(); ?>js/main.js">    </script>
  </body>
</html>