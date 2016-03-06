   <div id="hide" style="display:none;"> <div class="row">
      <div class="twelve columns">

        <!-- Content Slider -->

        <div class="row">
          <div class="eight columns hide-for-small">

            <div id="featured">
              
            	<a href="<?php echo site_url("predicas");?>"><img src="<?= base_url(); ?>images/predicas.jpg" alt="Predicas"></a>
              <a href="<?php echo site_url("reflexiones");?>"><img src="<?= base_url(); ?>images/reflexiones.jpg" alt="Reflexiones"></a>
           
            </div>

          </div>
          <div class="mision panel four columns hide-for-small">
            <h2>Iglesia Aposento Alto 140</h2>
            <p>Recibimos a los que Dios añade a su iglesia, adorando a Jesucristo con nuestras vidas, presentándolo como salvador, enseñando su señorío, teniendo comunión unos con otros en el amor del Señor y guiados por el Espíritu Santo servimos con gozo, recordando su obra redentora, esperando su regreso.</p>
          </div>
        </div>
        
        <div class="row">
          <div class="twelve columns hide-for-small">
            <h3 class="contact">Mantente en Contacto</h3>
            <hr class="strong_hr"/>
            <div class="three columns">
              <a class="email" href="#" data-reveal-id="contactForm">Formulario de contacto</a>
            </div>
            <div class="three columns">
              <a class="feed" href="">Lista de Correo</a>
            </div>
            <div class="three columns">
              <a class="fb" href="https://www.facebook.com/aposento140">Facebook</a>
            </div>
            <div class="three columns">
              <a class="tw" href="https://twitter.com/aposento140">Twitter</a>
            </div>
          </div>
        </div>
        <hr class="strong_hr"/>

        <!-- End Content Slider -->

        

        <div class="row">
              <!-- End Feed -->

              <!-- Image -->

              <div class="panel twelve columns azul">
                <h4>Visitanos</h4><hr/>

                <div class="four columns">

                <a href="javascript:void(0);" data-reveal-id="foto"><img style="border-radius:10px;" src="<?= base_url(); ?>images/comunidad.png" /></a>
              </div>
              <div class="five columns">

                <h5 class="vistit" style="color:white;font-size:20px;padding:0;margin:0;margin-bottom:20px;">Reuniones</h5>
                <ul id="reuniones">
                  <li><a href="#" style="color:white;font-size:16px;">Culto dominical - Domingos 10:00 am</a></li>
                  
                  <li><a href="#" style="color:white;font-size:16px;">Reunión de Oración - Miercoles 7:00 pm</a></li>
                  <li><a href="#" style="color:white;font-size:16px;">Reunión Damas - Jueves 10:00 am</a></li>
                  <li><a href="#" style="color:white;font-size:16px;">Reunión Adolescentes - Sabados 3:00 pm</a></li>
                  <li><a href="#" style="color:white;font-size:16px;">Reunión Jovenes Adultos - Sabados 6:00 pm</a></li> 
                </ul> 
              </div>
              <div class="three columns">
               <p style="color:white;font-size:16px;">Direcci&oacute;n: Cra 46 # 143-49</p>
             <!--   <p style="color:white;font-size:16px;">Tel:1234567</p>-->
                <p style="color:white;font-size:16px;">E-mail: info@aposento140.org</p>
                <a href="#" style="color:white;font-size:18px;" data-reveal-id="map">✜ Ver mapa</a>

              </div>
            </div>
        <div class="row">
          <div class="twelve columns">
            <div class="row">

              <!-- Shows -->

              <div id="predicas" class="verde panel four  columns">

                <h4>Ultimas Predicas</h4><hr/>
 <?php 
 if($predicas){
  foreach($predicas as $data) { ?>
                <div class="row">

                 
                  <div class="nine columns">
                    <h5><a href="<?php echo site_url('predicas/post');?>/<?php echo $data->id_predicas;?>"><?php echo $data->nombre; ?></a></h5>
                    <h6 style="height:45px;overflow:hidden; text-overflow:ellipsis;"><?php echo $data->descripcion; ?></h6>
                    <a style=" width:100%; color:white;text-align:right;" href="<?php echo site_url('predicas/post');?>/<?php echo $data->id_predicas;?>">Escuchar Ahora>></a>
                 </div>
                 
                </div><hr/>

                 <?php } }?>


              </div>
              <div class="eight columns">
              <!-- End Shows -->
              <!-- Feed -->
              <div class="row">
              <div id="reflexiones" class="twelve  columns">

                <h4 class="cool_title">Reflexiones de la Palabra</h4><hr/>
                <?php 
                if($reflexiones){
                  $h=1;
                foreach($reflexiones as $data) { 
                  if($h<=3){
                  ?>
                <div class="four  columns">
                  <h5><a href="<?php echo site_url('reflexiones/post');?>/<?php echo $data->id_reflexion;?>"><?php echo $data->titulo; ?></a></h5>

                  <h6 style="height:45px;overflow:hidden; text-overflow:ellipsis;" class="subheader"><?php echo $data->texto; ?></h6>

                  <h6><a href="<?php echo site_url('reflexiones/post');?>/<?php echo $data->id_reflexion;?>">Leer Más +</a></h6>

                </div>
                <?php 
                  $h++;}
              } }?>
                

                <a href="<?php echo site_url('reflexiones');?>" class="twelve mobile-twelve columns right">Ir a Reflexiones »</a>

              </div>
            </div>
              
            </div>
              <!-- End Image -->


<div class="hide">
  <img src="images/feedh.png"/>
  <img src="images/emailh.png"/>
  <img src="images/twitterh.png"/>
  <img src="images/fbh.png"/>
</div>

            </div>
          </div>
        </div>

        <!-- End Content -->




        <!-- Footer -->
