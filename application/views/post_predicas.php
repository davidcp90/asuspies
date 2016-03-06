  <div class="row">
   <div class="mision panel six columns hide-for-small">
              <h2>Predicas</h2>
               </div></div>

    <!-- Main Page Content and Sidebar -->

    <div class="row">

      <!-- Main Blog Content -->
      <div class="nine columns" role="content">
        
        <?php 
  foreach($post as $data) { ?>
        <article id="<?php echo $data->nombre; ?>">

          <h3><a href="<?php echo site_url('predicas/post');?>/<?php echo $data->id_predicas;?>"><?php echo $data->nombre; ?></a></h3>
          <h6>Predicó: <?php echo $data->autor; ?> el: <?php echo $data->fecha; ?></h6>

          <div class="row">
            <div class="six columns">
              
              <img src="<?=base_url()?>assets/uploads/imagen/<?php echo $data->imagen; ?>" height="140px" />
              <h6>Compartir</h6>
              <hr/>
            <div class="fb-like" data-href="<?php echo site_url('predicas/post');?>/<?php echo $data->id_predicas;?>" data-send="false" data-width="250" data-show-faces="false" data-font="segoe ui"></div> 
            <a href="https://twitter.com/share" class="twitter-share-button" data-counturl="<?php echo site_url('predicas/post');?>/<?php echo $data->id_predicas;?>" data-text="<?php echo $data->nombre; ?>" data-url="<?php echo site_url('predicas/post');?>/<?php echo $data->id_predicas;?>" data-via="aposento140" data-lang="es">Tweet</a></div>
            
            <div class="six columns">
              <?php echo $data->descripcion; ?>
            </div>
            
          </div>
            <div class="row">
            <div class="six columns centered" style="margin-top:30px;">
             <audio  preload="none" controls="controls">
             	<source type="audio/mpeg" src="<?=base_url()?>uploads/mp3/<?php echo $data->audio_mp3; ?>" />
			
   
    
            <!--  <object width="320" height="240" type="application/x-shockwave-flash" data="<?=base_url()?>javascripts/flashmediaelement.swf">
        <param name="movie" value="<?=base_url()?>javascripts/flashmediaelement.swf" />
        <param name="flashvars" value="controls=true&file=<?php echo $data->audio_mp3; ?>" />
        
    </object>-->
             </audio>
             
              </div></div>
              <div class="row">
              	<div class="six columns centered" style="margin-top:30px;">
              		<a class="button alert"href="<?=base_url()?>uploads/mp3/<?php echo $data->audio_mp3; ?>">⬇ Descargar Predica en MP3</a>
              	</div>
              </div>
            <script>
	
			$('audio,video').mediaelementplayer({
        plugins: ['flash','silverlight'],
    // specify to force MediaElement to use a particular video or audio type
    type: '',
    // path to Flash and Silverlight plugins
    pluginPath: 'http://www.aposento140.org/javascripts/',
    // name of flash file
    flashName: 'flashmediaelement.swf',
    // name of silverlight file
    silverlightName: 'silverlightmediaelement.xap',
    // default if the <video width> is not specified
        });
	
	</script>
        </article>

        <hr />
  <?php }
  ?>
      

      </div>

      <!-- End Main Content -->


      <!-- Sidebar -->

      <aside class="three columns">
      
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


