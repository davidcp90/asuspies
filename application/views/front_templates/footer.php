 <footer class="row">
          <div class="twelve columns"><hr />
            <div class="row">

              <div class="six columns">
                <p>Iglesia Aposento Alto 140.</p>
              </div>

              <div class="six columns">
                <ul class="link-list right">
                  <li><a href="<?=base_url()?>index.php/plan">¿Que Creemos?</a></li>
          <li><a href="<?=base_url()?>index.php/nosotros">Sobre Nosotros</a></li>
          <li><a href="<?=base_url()?>index.php/eventos">Eventos</a></li>
          <li><a href="<?=base_url()?>index.php/predicas">Predicas</a></li>
          <li><a href="<?=base_url()?>index.php/reflexiones">Reflexiones</a></li>
                </ul>
              </div>

            </div>
          </div>
        </footer>

        <!-- End Footer -->

      </div>
    </div>
  </div>
    <!-- Included JS Files -->


    <!-- End Footer -->
  <div id="foto" class="reveal-modal large">
    <img  src="<?= base_url(); ?>images/comunidadgrande.jpg" />
     <a class="close-reveal-modal">&#215;</a>
  </div>

  <div id="contactForm" class="reveal-modal large">
  <h2>Formulario de Contacto.</h2>
  <p class="lead">Queremos conocerte y estar en contacto contigo.</p>
  <form>
  
  <input type="text" placeholder="Nombre" class="round support tag close"/>
 
  
  <textarea placeholder="Mensaje"></textarea>
  <input type="submit" class="round button" value="Enviar" />
</form>
  <a class="close-reveal-modal">&#215;</a>
</div>
<div id="map" class="reveal-modal large">
 <h2>Encuentranos.</h2> 
 <iframe width="680" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=209305249846009694230.0004d5c6b147e3120e2dd&amp;ie=UTF8&amp;t=m&amp;ll=4.72608,-74.051778&amp;spn=0.005132,0.006866&amp;z=17&amp;output=embed"></iframe><br /><small>Ver <a href="https://maps.google.com/maps/ms?msa=0&amp;msid=209305249846009694230.0004d5c6b147e3120e2dd&amp;ie=UTF8&amp;t=m&amp;ll=4.72608,-74.051778&amp;spn=0.005132,0.006866&amp;z=17&amp;source=embed" style="color:#0000FF;text-align:left">Iglesia Aposento Alto 140</a> en un mapa ampliado</small>
 <a class="close-reveal-modal">&#215;</a>
</div>
<!-- Included JS Files (Compressed) -->

<script src="<?=base_url()?>javascripts/jquery.placeholder.js"></script>
<!--<script src="<?=base_url()?>javascripts/jquery.joyride.js"></script>-->
<script src="<?=base_url()?>javascripts/foundation.min.js"></script>

<!-- Initialize JS Plugins -->
<script src="<?=base_url()?>javascripts/app.js"></script>


<script>
$(window).load(function(){
  $('#hide').fadeIn('slow');
  $("#featured").orbit(
    {
      pauseOnHover: true,
      startClockOnMouseOut: true,

    });


});

</script> 

</body>
</html>
