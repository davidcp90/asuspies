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
      </div>



    </div>

  </div>
  <?php }} else{
    ?>
    <h5>No se encuentran eventos en la base de datos</h5>
    <?php } ?>
    <!-- End Header Content -->


    <!-- Thumbnails -->
    <?php
    $j=1;
    if($fotos){
      foreach($fotos as $data) { 
        if($j==1){
          ?>
          <div class="row">
            <div class="three columns">
              <img src="<?=base_url()?>assets/uploads/imagen/<?php echo $data->imagen;?>" alt="<?php echo $data->nombre;?>">
              <div class="panel">
                <p><?php echo $data->descripcion;?></p>
              </div>
            </div>
            <?php 
            $j++;
          } 
          elseif($j==4){
            ?>
            <div class="three columns">
              <img src="<?=base_url()?>assets/uploads/imagen/<?php echo $data->imagen;?>" alt="<?php echo $data->nombre;?>">
              <div class="panel">
                <p><?php echo $data->descripcion;?></p>
              </div>
            </div>
          </div>
          <?php $j=1;

        }
        else{ ?> 

        <div class="three columns">
          <img src="<?=base_url()?>assets/uploads/imagen/<?php echo $data->imagen;?>" alt="<?php echo $data->nombre;?>">
          <div class="panel">
            <p><?php echo $data->descripcion;?></p>
          </div>
        </div>
        <?php 
        $j++;
      }}} ?>





      <!-- End Thumbnails -->


