<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <?php 
  $this->load->helper('html');
    $this->load->helper('url');
     ?>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Area de Administracion- Aposento Alto 140</title>
  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
-->

<!-- Included CSS Files (Compressed) -->

<link rel="stylesheet" href="<?=base_url()?>stylesheets/foundation.css">
<link rel="stylesheet" href="<?=base_url()?>stylesheets/back.css">

<script src="<?=base_url()?>javascripts/modernizr.foundation.js"></script>

</head>
<body>
<div class="contain-to-grid">
<div class="row">
  <div class="twelve columns">
    <nav class="top-bar">
      <ul>
        <!-- Title Area -->
        <li class="name">
          <h1 style="font-size:18px;color:#fff;">
            
              Bienvenido <?php if(logged_in()){ echo username();  }?>
          
          </h1>
        </li>
        <li class="toggle-topbar"><a href="#"></a></li>
      </ul>

      <section>
       

        <!-- Right Nav Section -->
        <ul class="right">
          <li class="divider"></li>
          <li>
            <a href="<?php echo site_url('home');?>" target="_blank">Ver Sitio</a>
            
          </li>
          <li class="divider"></li>
          <li>
            
            <?php if(logged_in()){ ?>
            <a href="">Cerrar Sesi&oacute;n</a>
            <?php } else{ ?>
            <a href="<?php echo site_url('register')?>">Registrarse</a>
            <?php } ?>
          </li>
        </ul>
      </section>
    </nav>
  </div>
</div>
</div>
<div style="height:32px;clear:both;width:100%;"></div>
<?php if(logged_in()){ ?>
<div class="row">

<div class="three columns">
 <img src="<?=base_url()?>images/oldfashion.png" alt="logo" style="margin:0 auto;"/>
 <hr/>
<h5>Contenidos</h5>

<ul class="nav-bar vertical">
  
  <li><a href="<?php echo site_url('nosotros/gestion/edit/1')?>">Sobre Nosotros</a></li>
  <li class="active has-flyout"><a href="#">Predicas</a>
    <a href="#" class="flyout-toggle"><span> </span></a>
    <ul class="flyout">
      <li><a href="<?php echo site_url('predicas/gestioncat')?>">Listado Categorias</a></li>
      <li><a href="<?php echo site_url('predicas/gestioncat/add')?>">Añadir Categoria</a></li>  
      <li><a href="<?php echo site_url('predicas/gestion')?>">Listado Predicas</a></li>
      <li><a href="<?php echo site_url('predicas/gestion/add')?>">Añadir Predica</a></li>      
    </ul>
  </li>
  <li class="has-flyout"><a href="#">Reflexiones</a>
<a href="#" class="flyout-toggle"><span> </span></a>
    <ul class="flyout">
      <li><a href="<?php echo site_url('reflexiones/gestioncat')?>">Listado Categorias</a></li>
      <li><a href="<?php echo site_url('reflexiones/gestioncat/add')?>">Añadir Categoria</a></li>  
      <li><a href="<?php echo site_url('reflexiones/gestion')?>">Listado Reflexiones</a></li>
      <li><a href="<?php echo site_url('reflexiones/gestion/add')?>">Añadir Reflexiones</a></li>      
    </ul>
  </li>
  <li class="active has-flyout"><a href="#">Eventos</a>
<a href="#" class="flyout-toggle"><span> </span></a>
    <ul class="flyout">
      <li><a href="<?php echo site_url('eventos/gestion')?>">Listado Eventos</a></li>
      <li><a href="<?php echo site_url('eventos/gestion/add')?>">Añadir Eventos</a></li>
      <li><a href="<?php echo site_url('eventos/gestiongal')?>">Listado Galeria Eventos</a></li>
       <li><a href="<?php echo site_url('eventos/gestiongal/add')?>">Añadir Imagen a Galeria</a></li>     
    </ul>
  </li>
</ul>
<h5>Sitio</h5>
<ul class="nav-bar vertical">
  <li class="active has-flyout"><a href="#">Usuarios</a>
     <a href="#" class="flyout-toggle"><span> </span></a>
    <ul class="flyout">
      <li><a href="<?php echo site_url('destacados/gestion')?>">Listado</a></li>
      <li><a href="<?php echo site_url('destacados/gestion/add')?>">Crear Nuevo</a></li>      
    </ul>
  </li>
  <li><a href="#">WebMail</a></li>
  <li class="active"><a href="#">Correo Masivo</a></li>
</ul>
</div>
<?php } ?>

    <!-- End Navigation -->