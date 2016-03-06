<?php
if($info){
  foreach($info as $data) { ?>
  <div class="row">
   <div class="mision panel six columns hide-for-small">
    <h2><?php echo $data->nombre;?></h2>
  </div></div>

  <!-- Main Page Content and Sidebar -->

  <div class="row">

    <div class="six columns">

      <img src="<?=base_url()?>assets/uploads/imagen/<?php echo $data->imagen_destacada;?>"><br>

    </div>


    <div class="six columns">
      <div class="panel">
        <h4>Información del Evento<hr/></h4>
        <h5 class="subheader"><b>Lugar:</b> <?php echo $data->lugar;?></h5>
        <h5 class="subheader"><b>Fecha:</b> <?php echo $data->fecha;?></h5>
        <h5 class="subheader"><b>Hora:</b> <?php echo $data->hora;?></h5>
        <h5 class="subheader"><b>Proposito</b></h5>
        <p><?php echo $data->proposito;?></p>
        <p><h6>Compartir</h6>
                <hr/>
            <div class="fb-like" data-href="<?php echo site_url('eventos/info');?>/<?php echo $data->id_eventos;?>" data-send="false" data-width="250" data-show-faces="false" data-font="segoe ui"></div> 
            <a href="https://twitter.com/share"  class="twitter-share-button"  data-counturl="<?php echo site_url('eventos/info');?>/<?php echo $data->id_eventos;?>" data-text="<?php echo $data->nombre;?>" data-url="<?php echo site_url('eventos/info');?>/<?php echo $data->id_eventos;?>" data-via="aposento140" data-lang="es">Tweet</a>
            <hr/></p>
      </div>



    </div>

  </div>
  
  <!-- End Header Content -->

  <!-- Thumbnails -->

  <div class="row">
    <div class="five columns">
      <h3>Información Adicional</h3><hr>
      <p><?php echo $data->adicional;?></p></div>
      <?php }} else{
        ?>
        <h5>No se encuentra información de este evento.</h5>
        <?php } ?>
        <div class="seven columns">
          <h3>Galeria</h3><hr>


          <ul class=" block-grid twelve columns" data-clearing>
            <?php
            if($fotos){
              foreach($fotos as $data) { ?>
              <li class="three columns">
                <a href="<?=base_url()?>assets/uploads/imagen/<?php echo $data->imagen;?>">
                  <img data-caption="<?php echo $data->descripcion;?>" src="<?=base_url()?>assets/uploads/imagen/<?php echo $data->imagen;?>"></a></li>
                  <?php }} else{?>
                  <h5>No se han añadido fotos para este evento.</h5>
                  <?php }?>
                </ul>


              </div>
              

              

              

            </div>

            <!-- End Thumbnails -->


            


            
