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
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">

            </ul>
          </div><!-- /.nav-collapse -->
        </div><!-- /.container -->
      </div><!-- /.navbar -->
      <div class="container" id="main-container">

        <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-12" id="main-content">
            <section style="margin-top: 40px;">
            <?php foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
 
  <?php endforeach; ?>
<?php echo $output; ?>
</section>
            <section style="display: none;">
              <h1> <span class="glyphicon glyphicon-plus-sign"> </span> Crear Contacto</h1>
              <hr/>
              <form class="form-horizontal">
                <fieldset>
                  <h3 class="text-danger">Información Personal</h3>
                  <br/>
                  <div class="input-group input-group-lg">
                    <span class="input-group-addon">:)</span>
                    <input type="text" class="form-control" placeholder="Nombres" name="first_name">
                  </div>
                  <br/>
                  <div class="input-group input-group-lg">
                    <span class="input-group-addon">:)</span>
                    <input type="text" class="form-control" placeholder="Apellidos" name="last_name">
                  </div>
                  <h3 class="text-warning">Información de Contacto</h3>
                  <br/>
                  <div class="input-group input-group-lg">
                    <span class="input-group-addon">:)</span>
                    <input type="text" class="form-control" placeholder="Nombres" name="first_name">
                  </div>
                  <br/>
                  <div class="input-group input-group-lg">
                    <span class="input-group-addon">:)</span>
                    <input type="text" class="form-control" placeholder="Apellidos" name="last_name">
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                      <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Checkbox
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="textArea" class="col-lg-2 control-label">Textarea</label>
                    <div class="col-lg-10">
                      <textarea class="form-control" rows="3" id="textArea"></textarea>
                      <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 control-label">Radios</label>
                    <div class="col-lg-10">
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                          Option one is this
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                          Option two can be something else
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="select" class="col-lg-2 control-label">Selects</label>
                    <div class="col-lg-10">
                      <select class="form-control" id="select">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                      <br>
                      <select multiple="" class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button class="btn btn-default">Cancel</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </fieldset>
              </form>
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

        <hr>

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
      <?php foreach($js_files as $file): ?>
 
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
    </body>
    </html>