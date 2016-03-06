  <div class="row">
   <div class="mision panel six columns hide-for-small">
              <h2>Reflexiones</h2>
               </div></div>

    <!-- Main Page Content and Sidebar -->

    <div class="row">

      <!-- Main Blog Content -->
      <div class="nine columns" role="content">
        
        <?php 
        if($reflexiones){
  foreach($reflexiones as $data) { ?>
        <article id="<?php echo $data->titulo; ?>" class="row">
          <div class="row">
          <h3><a href="<?php echo site_url('reflexiones/post');?>/<?php echo $data->id_reflexion;?>"><?php echo $data->titulo; ?></a></h3>
          <h6>Autor: <?php echo $data->id_usuario; ?> el: <?php echo $data->fecha; ?></h6>
        </div>
          <div class="row">
            
            <div class="twelve columns" style="overflow:hidden;height:240px;">
              
              <img src="<?=base_url()?>assets/uploads/imagen/<?php echo $data->imagen; ?>" width="100%" height="240px" />
            </div>
            <div class="twelve columns" style="text-align:justify;">
            	<h6>Compartir</h6>
                <hr/>
            <div class="fb-like" data-href="<?php echo site_url('reflexiones/post');?>/<?php echo $data->id_reflexion;?>" data-send="false" data-width="250" data-show-faces="false" data-font="segoe ui"></div> 
            <a href="https://twitter.com/share"  class="twitter-share-button"  data-counturl="<?php echo site_url('reflexiones/post');?>/<?php echo $data->id_reflexion;?>" data-text="<?php echo $data->titulo;?>" data-url="<?php echo site_url('reflexiones/post');?>/<?php echo $data->id_reflexion;?>" data-via="aposento140" data-lang="es">Tweet</a>
            <hr/>
               <?php echo substr($data->texto, 0, 1000); ?> ...
              <br/>
              <a class="radius large button success"  href="<?php echo site_url('reflexiones/post');?>/<?php echo $data->id_reflexion;?>">Leer Mas +</a>
              </div>
          </div>
          
        </article>

        <hr />
  <?php } }
else{
  ?>
  <article class="row">
  	<h5>No existen reflexiones por el momento</h5>
  </article>
  <?php
}
?>
      <p><?php echo $links; ?></p> 

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
          <li><a href="<?php echo site_url('reflexiones/categoria');?>/<?php echo $data->id_categoriaReflexiones;?>"><?php echo $data->nombre; ?></a></li>
          <? } ?>
          
        </ul>

        

      </aside>

      <!-- End Sidebar -->
    </div>

    <!-- End Main Content and Sidebar -->


