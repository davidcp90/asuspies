</div>
<!--closing row for admin-->
<footer class="row">
          <div class="twelve columns"><hr />
            <div class="row">

              <div class="six columns">
                <p>Higher Place CMS</p>
              </div>

              <div class="six columns">
                <p>2013</p>
              </div>

            </div>
          </div>
        </footer>

        <!-- End Footer -->

  


    <!-- Included JS Files -->


    <!-- End Footer -->

-
  

<!-- Included JS Files (Compressed) -->
<script src="<?=base_url()?>javascripts/foundation.min.js"></script>
<script src="<?=base_url()?>javascripts/preloadcss.js"></script>
<!-- Initialize JS Plugins -->
<script src="<?=base_url()?>javascripts/app.js"></script>
<?php foreach($js_files as $file): ?>
 
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>

<script>
$(window).load(function(){
  $("#featured").orbit();


});
</script> 

</body>
</html>
