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
  <body ng-controller="ListaAsuspiesController">
  <?php $this->load->view('asuspies/nav');?>
    <div class="col-xs-12" style="margin-top: 150px;">
      <div class="container-fluid">
        <div class="row" ng-cloak>
          <members ng-repeat="m in members" class="col-xs-12 col-sm-6 panel panel-default people-card">
            <div class="panel-body panel-height">
              <div class="row">
                <div class="head-cont">
                  <div class="col-xs-12 col-sm-5 col-md-5">
                    <div class="post-img-cont" ng-if="m.photo" style="background-image: url('<?= base_url(); ?>uploads/jovenes/{{m.photo}}') !important;"></div>
                    <div class="post-img-cont" ng-if="!m.photo" style="background-image: url('<?= base_url(); ?>imgs/nophoto.png') !important;" ></div>
                  </div>
                  <div class="col-xs-12 col-sm-7 col-md-7 break-word text-left">
                    <h3>{{m.name}}</h3>
                    <h4><img class="img-icon"  ng-if="m.genre==1" ng-src="<?= base_url(); ?>imgs/boy.png" title="Hombre"/><img class="img-icon"  ng-if="m.genre==2" ng-src="<?= base_url(); ?>imgs/girl.png" title="Mujer"/><img class="img-icon"  ng-if="m.first_committee>0" ng-src="<?= base_url(); ?>images/comites/{{m.first_committee}}.png" title="{{committeeName(m.first_committee)}}"><img class="img-icon"  ng-if="m.second_committee>0" ng-src="<?= base_url(); ?>images/comites/{{m.second_committee}}.png" title="{{committeeName(m.second_committee)}}"><img class="img-icon"  ng-if="m.has_mentor==1" src="<?= base_url(); ?>images/discipulado.png" title="Discipulado OK"></h4>
                  </div>
                </div>
                <div class="col-xs-12 text-left push-top-20">
                  <p>{{m.email}}</p>
                  <p><em>Tel :</em> {{m.phone}} - <em>Cel :</em> {{m.celular}}</p>
                  <p><em>Cumpleaños:</em> {{m.birthdate}}</p>
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <button class="btn btn-primary" data-toggle="modal" data-target="#personCard" ng-click="showAll(m);">Ver ficha completa <i class="fa fa-hand-o-right"> </i></button>
            </div>

          <div class="clearfix visible-xs-block"></div>
          </members>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
  </section>
  <div class="modal fade" id="personCard" tabindex="-1" role="dialog" aria-labelledby="personCard">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="pull-right btn btn-default" data-dismiss="modal">&times; Cerrar</button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-xs-4">
              <div class="post-img-cont" ng-if="member.photo" style="background-image: url('<?= base_url(); ?>uploads/jovenes/{{member.photo}}') !important;"></div>
              <div class="post-img-cont" ng-if="!member.photo" style="background-image: url('<?= base_url(); ?>imgs/nophoto.png') !important;"></div>
              <h4><img class="img-icon"  ng-if="member.genre==1" ng-src="<?= base_url(); ?>imgs/boy.png" title="Hombre"/><img class="img-icon"  ng-if="member.genre==2" ng-src="<?= base_url(); ?>imgs/girl.png" title="Mujer"/><img class="img-icon"  ng-if="member.first_committee>0" ng-src="<?= base_url(); ?>images/comites/{{member.first_committee}}.png" title="{{committeeName(member.first_committee)}}"><img class="img-icon"  ng-if="member.second_committee>0" ng-src="<?= base_url(); ?>images/comites/{{member.second_committee}}.png" title="{{committeeName(member.second_committee)}}"><img class="img-icon"  ng-if="member.has_mentor==1" src="<?= base_url(); ?>images/discipulado.png" title="Discipulado OK"></h4>
            </div>
            <div class="col-xs-8">
            <h3 style="margin-top: 0;">{{member.name}} </h3>
              <p><b><em>Genero: </em></b><span ng-show="member.genre==1">Hombre</span><span ng-show="member.genre==2">Mujer</span>
              </p>
              <p><b><em>Email: </em></b>{{member.email}}</p>
              <p><b><em>Tel :</em></b> {{member.phone}} - <em>Cel :</em> {{member.celular}}</p>
              <p><b><em>Cumpleaños:</em></b> {{member.birthdate}}</p>
              <p><b><em>Esta siendo discipulado?: </em></b><span ng-if="member.mentor">Si, {{member.mentor}}</span><span ng-if="!member.mentor">No</span>
              </p>
              <p><b><em>Conoce sus dones?:</em></b> <span ng-if="known_gifts==1">Si</span><span ng-if="known_gifts==2">No</span>{{member.skills}}</p>
              <p><b><em>Dones:</em></b> {{member.gifts}}</p> 
               <p>
              <b><em>Comite Uno: </em></b><span ng-if="member.first_committee>0">{{committeeName(member.first_committee)}}</span><span ng-if="member.first_committee==0">No</span>
              </p>
              <p>
              <b><em>Comite Dos: </em></b><span ng-if="member.second_committee>0">{{committeeName(member.second_committee)}}</span><span ng-if="member.second_committee==0">No</span>
              </p>
              <p><b><em>Ocupación:</em></b> {{member.career}}</p>
              <p><b><em>Nivel Educativo:</em></b> {{academicLevel(member.education)}}</p>
              <p><b><em>Habilidades:</em></b> {{member.skills}}</p>
              <p><b><em>Hobbies:</em></b> {{member.hobbies}}</p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">&times; Cerrar</button>
        </div>
      </div>
    </div>
  </div>
  <script src="<?= base_url(); ?>bower_components/requirejs/require.js" data-main="<?= base_url(); ?>js/main.js">    </script>
</body>
</html>