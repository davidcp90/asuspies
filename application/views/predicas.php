  <div class="row">
   <div class="mision panel six columns hide-for-small">
              <h2>Predicas</h2>
               </div></div>

    <!-- Main Page Content and Sidebar -->

    <div class="row">

      <!-- Main Blog Content -->
      <div class="nine columns" role="content">
      	 <?php 
      	 if($categoria_art){
  foreach($categoria_art as $data) { ?>
        <article class="panel ">
        	<h3><?php echo $data->nombre; ?></h3>
        	<?php if($data->imagen){ ?>
        	<img src="<?=base_url()?>assets/uploads/imagen/<?php echo $data->imagen; ?>" width="100%" height="180px" />
        	<?php } ?>
        	<p><?php echo $data->descripcion; ?></p>
        </article>
         <?php }}
  ?>
        <?php 
  foreach($predicas as $data) { ?>
        <article id="<?php echo $data->nombre; ?>">

          <h3><a href="<?php echo site_url('predicas/post');?>/<?php echo $data->id_predicas;?>"><?php echo $data->nombre; ?></a></h3>
          <h6>Predicó: <?php echo $data->autor; ?> el: <?php echo $data->fecha; ?></h6>

          <div class="row">
            <div class="six columns">
              <?php echo $data->descripcion; ?>
              <br/>
              <a class="radius large button success"  href="<?php echo site_url('predicas/post');?>/<?php echo $data->id_predicas;?>">Escuchar Predica >></a>
              </div>
            <div class="six columns">
              
              <img src="<?=base_url()?>assets/uploads/imagen/<?php echo $data->imagen; ?>" width="400px" height="240px" />
                <h6>Compartir</h6>
                <hr/>
            <div class="fb-like" data-href="<?php echo site_url('predicas/post');?>/<?php echo $data->id_predicas;?>" data-send="false" data-width="250" data-show-faces="false" data-font="segoe ui"></div> 
            <a href="https://twitter.com/share" data-counturl="<?php echo site_url('predicas/post');?>/<?php echo $data->id_predicas;?>" class="twitter-share-button" data-text="<?php echo $data->nombre; ?>" data-url="<?php echo site_url('predicas/post');?>/<?php echo $data->id_predicas;?>" data-via="aposento140" data-lang="es">Tweet</a>
            
            </div>
          </div>
        </article>

        <hr />
  <?php }
  ?>
      <p><?php 
      if($links){
      echo $links; }?></p> 

      </div>

      <!-- End Main Content -->


      <!-- Sidebar -->

      <aside class="three columns">
        <!--<h4>Busqueda por criterios</h4><hr/>
        <h5>Predicador</h5>
        <ul class="side-nav">
          <li><a href="#">News</a></li>
          <li><a href="#">Code</a></li>
          <li><a href="#">Design</a></li>
          <li><a href="#">Fun</a></li>
          <li><a href="#">Weasels</a></li>
        </ul>-->
        <h4>Categorias</h5>

        <ul class="side-nav">
          <?php
  foreach($categorias as $data) { ?>
          <li><a href="<?php echo site_url('predicas/categoria');?>/<?php echo $data->id_categoriaPredicas;?>"><?php echo $data->nombre; ?></a></li>
          <? } ?>
          
        </ul>

        

      </aside>

      <!-- End Sidebar -->
    </div>

    <!-- End Main Content and Sidebar -->


