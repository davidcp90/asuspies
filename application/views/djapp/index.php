<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DJ 140</title>

  <!-- Bootstrap -->
  <link href="<?=base_url()?>css/theme.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,800' rel='stylesheet' type='text/css'>
  <link href="<?=base_url()?>css/djapp.css" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>

      <div class="navbar navbar-fixed-top navbar-default" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="offcanvas">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="<?=base_url()?>imgs/logo.png" alt="logo" class="img-responsive" id="logo"/> DJ 140</a>
            <ul class="nav navbar-nav hidden-xs" id="menu-nor">
              <li><a href="<?php echo site_url("djapp");?>" ><span class="glyphicon glyphicon-th-list"> </span> Ver Lista</a></li>
                  <!--<a href="#" class="list-group-item"><span class="glyphicon glyphicon-eye-open"> </span> Buscar Contacto</a>-->
                  <li><a href="<?php echo site_url("djapp/edicion/add");?>"><span class="glyphicon glyphicon-plus-sign"> </span> Crear Contacto</a></li>
                  <li><a href="<?php echo site_url("djapp/edicion");?>"><span class="glyphicon glyphicon-pencil"> </span> Modificar Contactos</a></li>
            </ul>
          </div>
          <div class="collapse navbar-collapse hidden-xs">
            <ul class="nav navbar-nav">

            </ul>
          </div><!-- /.nav-collapse -->
        </div><!-- /.container -->
      </div><!-- /.navbar -->
      <div class="container" id="main-container">

        <div class="row row-offcanvas row-offcanvas-right">

          <div class="col-xs-12 col-sm-12" id="main-content">
            <section style="margin-top: 40px;">
              <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#women-tab" role="tab" data-toggle="tab"><span class="text-danger glyphicon glyphicon-heart"> </span> Niñas</a></li>
                <li><a href="#men-tab" role="tab" data-toggle="tab"><span class="text-primary glyphicon glyphicon-tower"></span> Niños</a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="women-tab">

                  <?php 
                  if($girls)
                    foreach($girls as $data){ ?>
                  <article role="contact" class="col-md-4 col-sm-6 col-xs-12 contact-card">
                    <div class="row">
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <br/>
                        <?php if($data->foto){ ?>
                        <img src="<?=base_url()?>assets/uploads/imagen/<?php echo $data->foto; ?>" alt="mujer" class="img-circle img-responsive">


                        <?php
                        
                      }
                      else{
                        ?>
                        <img src="<?=base_url()?>imgs/girl.png" alt="mujer" class="img-circle img-responsive">
                        <?php  
                      }
                      ?>
                      <?php if($data->nuevo){?>
                      <h4 class="text-center text-warning"><span class="glyphicon glyphicon-star"></span><strong>Nuevo</strong></h4>
                      <?php } ?>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-8">
                      <h3><?php echo $data->nombres;?> <?php echo $data->apellidos;?> </h3>
                      <?php if($data->email){ ?>
                      <h5>
                        <span class="glyphicon glyphicon-envelope"></span> <?php echo $data->email;?></h5>
                      
                      <?php } ?>
                      <h5>
                            <span class="glyphicon glyphicon-phone"> </span> <?php if($data->fijo){ ?><em>Fijo:</em> <?php echo $data->fijo;?> -<?php } ?> <em>Cel:</em> <?php echo $data->celular;?>
                        </h5>
                        <?php if($data->invitado_por){
                          ?>
                          <h5>
                            <span class="glyphicon glyphicon-user"></span> Invitada por: <?php echo $data->invitado_por;?>
                            </h5>
                            <?php } ?>
                          </div>
                        </div>
                      </article>
                      <?php
                    }

                    ?>

                  </div>
                  <div class="tab-pane fade" id="men-tab">

                    <?php 
                    if($boys)
                      foreach($boys as $data){ ?>
                    <article role="contact" class="col-md-4 col-sm-6 col-xs-12 contact-card">
                      <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-4">
                          <br/>
                          <?php if($data->foto){ ?>
                          <img src="<?=base_url()?>assets/uploads/imagen/<?php echo $data->foto; ?>" alt="hombre" class="img-circle img-responsive">

                          <?php

                        }
                        else{
                          ?>
                          <img src="<?=base_url()?>imgs/boy.png" alt="hombre" class="img-circle img-responsive">
                          <?php  
                        }
                        ?>
                        <?php if($data->nuevo){?>
                        <h4 class="text-center text-warning"><span class="glyphicon glyphicon-star"></span><strong>Nuevo</strong></h4>
                        <?php } ?>
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <h3><?php echo $data->nombres;?> <?php echo $data->apellidos;?> </h3>
                        <?php if($data->email){ ?>
                      <h5>
                        <span class="glyphicon glyphicon-envelope"></span> <?php echo $data->email;?></h5>
                      
                      <?php } ?>
                      <h5>
                            <span class="glyphicon glyphicon-phone"> </span> <?php if($data->fijo){ ?><em>Fijo:</em> <?php echo $data->fijo;?> -<?php } ?> <em>Cel:</em> <?php echo $data->celular;?>
                          </h5>
                          <?php if($data->invitado_por){
                            ?>
                            <h5>
                              <span class="glyphicon glyphicon-user"></span>Invitado por: <?php echo $data->invitado_por;?>
                              </h5>
                              <?php } ?>
                            </div>
                          </div>
                        </article>
                        <?php
                      }

                      ?>

                    </div>
                    <div class="clearfix"></div>
                  </div>
                </section>


              </div>

              <div class="col-xs-6 visible-xs sidebar-offcanvas" id="sidebar" role="navigation">

                <div class="list-group">
                  <a href="<?php echo site_url("djapp");?>" class="list-group-item active"><span class="glyphicon glyphicon-th-list"> </span> Ver Lista</a>
                  <!--<a href="#" class="list-group-item"><span class="glyphicon glyphicon-eye-open"> </span> Buscar Contacto</a>-->
                  <a href="<?php echo site_url("djapp/edicion/add");?>" class="list-group-item"><span class="glyphicon glyphicon-plus-sign"> </span> Crear Contacto</a>
                  <a href="<?php echo site_url("djapp/edicion");?>" class="list-group-item"><span class="glyphicon glyphicon-pencil"> </span> Modificar Contactos</a>

                </div>
              </div><!--/span-->
            </div><!--/row-->


            <footer>
              <p>&copy; DJ 140 by <a href="http://davidcamargo.com">David Camargo</a></p>
            </footer>

          </div><!--/.container-->


          <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
          <!-- Include all compiled plugins (below), or include individual files as needed -->
          <script src="<?=base_url()?>js/bootstrap.min.js"></script>
          <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
          <script src="<?=base_url()?>js/ie10-viewport-bug-workaround.js"></script>

          <script src="<?=base_url()?>js/offcanvas.js"></script>
        </body>
        </html>