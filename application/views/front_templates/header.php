  <?php $this->load->helper('html');
  $this->load->helper('url');?>
  <!DOCTYPE html>

  <!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
  <!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>

    <meta charset="utf-8" />


    <meta name="viewport" content="width=device-width" />

    <title><?php echo $title;?>- Aposento Alto 140</title>

    <script src="<?=base_url()?>javascripts/jquery.js"></script>
    <script src="<?=base_url()?>javascripts/mediaelement-and-player.min.js"></script>

    <link rel="stylesheet" href="<?=base_url()?>stylesheets/foundation.min.css">
    <link rel="stylesheet" href="<?=base_url()?>stylesheets/app.css">
    <link rel="stylesheet" href="<?=base_url()?>javascripts/mediaelementplayer.min.css">
    <script src="<?=base_url()?>javascripts/modernizr.foundation.js"></script>
    <style type="text/css">
    .cont-logo-sm{
      width: 50%;
      margin: 0 auto 10px;
      text-align: center;
    }
      h1#logo-sm a{
          position:relative;
          top:-10px;
          font-family: 'Oswald', sans-serif;
          font-size:22px;
          width:110px;
          height:70px;
          color:#111;
          text-decoration:none;
          background:url('../images/oldfashion.png') no-repeat left center;
          float:left;
          text-indent: -9999px;
          display:inline-block;
        transition: background 2.5s ease-in-out;
        -moz-transition: background 2.5s ease-in-out;
        -ms-transition: background 2.5s ease-in-out;
        -webkit-transition: background 2.5s ease-in-out;
        -o-transition: background 2.5s ease-in-out; 
      }
      h1#logo-sm span{
        font-family: 'Quintessential', cursive;
        font-size:24px;
        position:relative;
        top:18px;
        left:10px;
      }
      .nav-mobile{
        text-align: center;
        margin: 0 auto;
      }
    </style>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></head>
    <body>
      <div class="contain-to-grid fixed hide-for-small" >
        <nav class="top-bar">


          <ul>
            <li class="name"><h1 id="logo"> <a href="<?=base_url()?>index.php">Aposento Alto 140</a> <span> Sede 140</span></h1></li>
            <li class="toggle-topbar"><a href="#"></a></li>
          </ul>

          <section>
            <ul class="right">
              <li><a href="<?php echo site_url("plan");?>">Plan de Salvación</a></li>
              <li><a href="<?php echo site_url("nosotros");?>">Sobre Nosotros</a></li>
              <li><a href="<?php echo site_url("eventos");?>">Eventos</a></li>
              <li><a href="<?php echo site_url("predicas");?>">Predicas</a></li>
              <li><a href="<?php echo site_url("reflexiones");?>">Reflexiones</a></li>

            </ul>



          </section>
        </nav>
      </div>
    <div class="contain-to-grid fixed show-for-small" >
      <div class="cont-logo-sm">
        <h1 id="logo-sm"> <a href="<?=base_url()?>index.php">Aposento Alto 140</a> <span> Sede 140</span></h1>
      </div>
      <div class="clearfix"></div>
      <div class="nav-mobile">
        <ul class="link-list ">
            <li><a href="<?=base_url()?>index.php/plan">¿Que Creemos?</a></li>
            <li><a href="<?=base_url()?>index.php/nosotros">Sobre Nosotros</a></li>
            <li><a href="<?=base_url()?>index.php/eventos">Eventos</a></li>
            <li><a href="<?=base_url()?>index.php/predicas">Predicas</a></li>
            <li><a href="<?=base_url()?>index.php/reflexiones">Reflexiones</a></li>
        </ul>
      </div>
    </div>

    <!-- End Navigation -->