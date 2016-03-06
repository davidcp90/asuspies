    <nav class="navbar navbar-default navbar-fixed-top" style="top:0">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-links-asuspies">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" ><img src="<?= base_url(); ?>dist/img/logo_nav.png" alt="Jovenes A Sus Pies"></a>
        </div>
        <div class="collapse navbar-collapse" id="nav-links-asuspies">
          <ul class="nav navbar-nav">
            <li><a href="<?= site_url('asuspies');?>">Encuesta</a></li>
            <li><a href="<?= site_url('asuspies/lista');?>">Hojas de Vida</a></li>
            <li><a href="<?= site_url('asuspies/edicion');?>">Edición</a></li>
          </ul>
          <!--
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
          </ul>-->
        </div>
      </div>
    </nav>