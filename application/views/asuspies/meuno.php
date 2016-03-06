<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Jóvenes A Sus Pies</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" type="image/png" href="dist/img/favicon.png"/>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="dist/css/bootstrap.css" media="screen">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="bower_components/html5shiv/dist/html5shiv.min.js"></script>
    <script src="bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->
  </head>
  <body ng-controller="AsuspiesController">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>-->
          <a class="navbar-brand" ><img src="dist/img/logo_nav.png" alt="Jovenes A Sus Pies"></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <!--
            <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Link</a></li>-->
          </ul>
          <!--
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
          </ul>-->
        </div>
      </div>
    </nav>
    <section class="jumbotron cute-bg" >
      <div class="col-xs-12" id="intro">
        <div class="text-center" id="head-title"><img src="dist/img/logo_h.png" alt="Jovenes a sus pies" class="img-responsive"/></div>
        <h2 class="text-center tx-wh" id="slogan"><i><strong>#ASUSPIES </strong> hacemos parte de un proposito mas grande</i></h2>
        <a href="javascript:void(0);" ng-click="goNext('intro','me-too',true,false);" class="btn btn-primary center-btn"  title="Si si, peguele al click"><i class="fa fa-hand-o-up"></i>  Yo También  <i class="fa fa-bolt"></i></a>
      </div>
      <div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 panel panel-default fix-top-mg hidden" id="me-too">
        <form class="panel-body form-horizontal" method="POST" action="<?= site_url('asuspies/estoy_asuspies'); ?>" enctype="multipart/form-data">
        <div class="form-group">
              <div class="alert alert-danger alert-dismissible hidden" id="error" role="alert">
              <button type="button" class="close" data-dismiss="error" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong><i class="fa fa-exclamation-triangle"> </i> Chanfle! , la embarraste</strong> Revisa que todos los campos este completos , tu email este bien escrito o no hayas puesto letras en tus numeros telefonicos.
              </div>
            </div>
          <fieldset id="identidad" >
            <legend class="oswald"><i class="text-primary fa fa-paw"> </i> A Sus Pies tengo Identidad</legend class="oswald">

            <div class="form-group">
              <label for="name" class="col-lg-2 control-label">Nombre Completo</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre Completo" data-parsley-required="true" data-parsley-group="identidad">
              </div>
            </div>
            <div class="form-group">
              <label for="genre" class="col-lg-2 control-label">Género</label>
              <div class="col-lg-10">
                <select class="form-control" id="genre" name="genre" data-parsley-required="true" data-parsley-group="identidad">
                  <option selected disabled>Selecciona tu Genero</option>
                  <option value="1">Masculino</option>
                  <option value="2">Femenino</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="birthdate" class="col-lg-2 control-label">Fecha de Nacimiento</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="birthdate" name="birthdate" placeholder="Fecha de Nacimiento" data-parsley-required="true" data-parsley-group="identidad">
              </div>
            </div>
            <div class="form-group">
              <label for="email" class="col-lg-2 control-label">Email</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" data-parsley-required="true" data-parsley-type="email" data-parsley-group="identidad">
              </div>
            </div>
            <div class="form-group">
              <label for="phone" class="col-lg-2 control-label">Telefono Fijo</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefono Fijo" data-parsley-required="true" data-parsley-type="number" data-parsley-group="identidad">
              </div>
            </div>
            <div class="form-group">
              <label for="celular" class="col-lg-2 control-label">Celular</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular"  data-parsley-required="true" data-parsley-type="number" data-parsley-group="identidad">
              </div>
            </div>
            <hr/>
            <div class="form-group">
              <label for="userfile" class="col-lg-6 control-label"><strong>TÓMATE o SUBE UNA FOTO!</strong> Sino David subirá la más fea que encuentre en Facebook :v. (Click en la camarita o en la imagen que subiste)</label>
              <div class="col-lg-6">
                <input type="file" class="hidden" id="photo" name="userfile" accept="image/*;capture=camera" />
                <img src="dist/img/camara.png" alt="Sube tu foto" class="img-responsive" id="upload-photo" onclick="$('#photo').click();"/>
              </div>
            </div>
            <hr/>

            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button type="button" class="btn btn-primary pull-right" ng-click="goNext('identidad','i-can',false,true);">Siguiente  <i class="fa fa-hand-o-right"> </i></button>
              </div>
            </div>
          </fieldset>
          <fieldset id="i-can" class="hidden">
            <legend class="oswald"><i class="text-primary fa fa-magic"> </i> A Sus Pies todo lo puedo</legend class="oswald">
            <div class="form-group">
              <label for="career" class="col-lg-2 control-label">Ocupación</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="career" name="career" placeholder="Ocupación" data-parsley-group="i-can" data-parsley-required="true">
              </div>
            </div>
            <div class="form-group">
              <label for="education" class="col-lg-2 control-label">Nivel Academico</label>
              <div class="col-lg-10">
                <select class="form-control" id="education" name="education" data-parsley-required="true" data-parsley-group="i-can">
                  <option selected disabled>Selecciona tu Nivel Academico</option>
                  <option value="1">Bachillerato</option>
                  <option value="2">Universidad</option>
                  <option value="3">Profesional</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="skills" class="col-lg-2 control-label">Habilidades / Talentos </label>
              <div class="col-lg-10">
                <textarea class="form-control" rows="3" id="skills" name="skills" placeholder="¿Cuáles son tus habilidades/talentos?" data-parsley-required="true" data-parsley-group="i-can"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="hobbies" class="col-lg-2 control-label">Hobbies </label>
              <div class="col-lg-10">
                <textarea class="form-control" rows="3" id="Hobbies" name="hobbies" placeholder="¿Cuáles son tus hobbies/pasatiempos?" data-parsley-required="true" data-parsley-group="i-can"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="gifts" class="col-lg-2 control-label">Dones </label>
              <div class="col-lg-10">
                <select class="form-control" id="known-gifts" name="known_gifts" data-parsley-required="true" data-parsley-group="i-can">
                  <option selected disabled>¿Conoces tus Dones?</option>
                  <option value="1">Sí</option>
                  <option value="2">No</option>
                </select>
                <textarea class="form-control" rows="3" id="gifts" name="gifts" placeholder="¿Si? ¿Cuales són?"></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-12">
                <button type="button" class="btn btn-default" ng-click="goNext('i-can','identidad',false,false);"><i class="fa fa-hand-o-left"> </i> Anterior</button>
                <button type="button" class="btn btn-primary pull-right" ng-click="goNext('i-can','i-grow',false,true);">Siguiente <i class="fa fa-hand-o-right"> </i></button>
              </div>
            </div>
          </fieldset>
          <fieldset id="i-grow" class="hidden">
            <legend class="oswald"><i class="text-primary fa fa-rocket"> </i> A Sus Pies crezco y doy más</legend class="oswald">
            <div class="form-group">
              <label for="has_mentor" class="col-lg-2 control-label">Discipulado</label>
              <div class="col-lg-10">
                <select class="form-control" id="has-mentor" name="has_mentor" data-parsley-required="true" data-parsley-group="i-grow">
                  <option selected disabled>¿Alguien te está discipulando?</option>
                  <option value="1">Sí</option>
                  <option value="2">No</option>
                </select>
                <input type="text" class="form-control" id="mentor" name="mentor" placeholder="¿Si? ¿Quien te discipula?">
              </div>
            </div>
            <br>
            <h3 class="text-center">Sirve A Sus Pies</h3>
            <p class="text-center">Si quieres hacer parte de nuestros comités y aprovechar todos tus talentos y dones para servir a Dios y a otras personas, inscribe hasta 2 comités en los que quieras participar o donde estés participando.</p>
            <br>
            <div class="form-group">
              <label for="first_committee" class="col-lg-2 control-label">Comité 1</label>
              <div class="col-lg-10">
                <select class="form-control" id="first-group" name="first_committee">
                  <option selected disabled>Selecciona tu primer comité</option>
                  <option value="4">Enseñanza</option>
                  <option value="5">Oración</option>
                  <option value="2">Pastoreo y Discipulado</option>
                  <option value="3">Evangelismo</option>
                  <option value="6">Logística</option>
                  <option value="7">Actividades</option>
                  <option value="8">Arte y Comunicaciones</option>
                  <option value="1">Alabanza</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="second_committee" class="col-lg-2 control-label">Comité 2</label>
              <div class="col-lg-10">
                <select class="form-control" id="first-group" name="second_committee">
                  <option selected disabled>Selecciona tu segundo comité</option>
                  <option value="4">Enseñanza</option>
                  <option value="5">Oración</option>
                  <option value="2">Pastoreo y Discipulado</option>
                  <option value="3">Evangelismo</option>
                  <option value="6">Logística</option>
                  <option value="7">Actividades</option>
                  <option value="8">Arte y Comunicaciones</option>
                  <option value="1">Alabanza</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-12">
                <button type="button" class="btn btn-default" ng-click="goNext('i-grow','i-can',false,false);"><i class="fa fa-hand-o-left"> </i> Anterior</button>
                <button type="button" class="btn btn-primary pull-right" ng-click="joinAsuspies();">Finalizar <i class="fa fa-thumbs-up"> </i></button>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
      <div class="col-xs-12 hidden" id="thanks">
        <div class="text-center" id="head-title"><img src="dist/img/logo_h.png" alt="Jovenes a sus pies" class="img-responsive"/></div>
        <h1 class="text-center tx-wh oswald">Gracias</h1>
        <h2 class="text-center tx-wh" id="slogan"><i>Recuerda que <strong>#ASUSPIES</strong> eres {{mensaje_gracias}}.</i></h2>
        <a href="javascript:void(0);" ng-click="resetApp();" class="btn btn-primary center-btn"  title="Si si, peguele al click"><i class="fa fa-child"></i>  Registrar Otro  <i class="fa fa-repeat"></i></a><br>
        <a href="https://twitter.com/share?url=http://facebook.com/asuspies&hashtags=ASusPies&text=Ya soy un joven A Sus Pies y tu?"  class="btn btn-info center-btn pop-share"  title="Si si, twitealo"><i class="fa fa-twitter"></i>  #ASusPies Twiteo  <i class="fa fa-twitter"></i></a><br>
        <a href="http://www.facebook.com/sharer/sharer.php?u=http://facebook.com/asuspies&title=Ya soy un joven ASusPies y tu? http://facebook.com/asuspies" class="btn btn-success center-btn pop-share"  title="Si si, pal' face"><i class="fa fa-facebook"></i>  #ASusPies Va Pal' Face  <i class="fa fa-facebook"></i></a>
      </div>
      <div class="clearfix"></div>
    </section>
    
    <script src="bower_components/requirejs/require.js" data-main="js/main.js">    </script>
  </body>
</html>