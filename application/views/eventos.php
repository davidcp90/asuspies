<div class="row">
 <div class="mision panel six columns hide-for-small">
  <h2>Eventos</h2>
</div></div>

<!-- Main Page Content and Sidebar -->


<?php 
$counter=0;
if($eventos){
  foreach($eventos as $data) { 
    if($counter==0){ ?>
    <div class="row">
      <div class="four columns">
        
       <a href="<?php echo site_url('eventos/info');?>/<?php echo $data->id_eventos;?>"> <h5><?php echo $data->nombre; ?></h5>
        <img src="<?=base_url()?>assets/uploads/imagen/<?php echo $data->imagen_destacada;?>" /></a>
        <p><?php echo $data->proposito; ?></p>
        <a href="<?php echo site_url('eventos/info');?>/<?php echo $data->id_eventos;?>">Ver mas>>></a>
      </div>

      <?php $counter++;

    }

    else if($counter==2){
      ?>
      
      <div class="four columns">
        <div class="panel">
          <a href="<?php echo site_url('eventos/info');?>/<?php echo $data->id_eventos;?>"> <h5><?php echo $data->nombre; ?></h5>
            <img src="<?=base_url()?>assets/uploads/imagen/<?php echo $data->imagen_destacada;?>" /></a>
            <p><?php echo $data->proposito; ?></p>
            <a href="<?php echo site_url('eventos/info');?>/<?php echo $data->id_eventos;?>">Ver mas>>></a>
          </div>
        </div>
      </div>
      <?php $counter=0; }
      else  { ?>
      <div class="four columns">
        <div class="panel">
         <a href="<?php echo site_url('eventos/info');?>/<?php echo $data->id_eventos;?>"> <h5><?php echo $data->nombre; ?></h5>
          <img src="<?=base_url()?>assets/uploads/imagen/<?php echo $data->imagen_destacada;?>" /> </a>
          <p style="text-align:justify;"><?php echo $data->proposito; ?></p>
          <a href="<?php echo site_url('eventos/info');?>/<?php echo $data->id_eventos;?>">Ver mas>>></a>
        </div>
      </div>
      <?php $counter++;} } }
      else{
        ?>
        <h5>No se encuentran eventos en la base de datos</h5>
        <?php
      }
      ?>



