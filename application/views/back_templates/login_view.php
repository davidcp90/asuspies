<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <?php $this->load->helper('html');
$this->load->helper('url');?>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title><?php echo $title;?></title>
  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
-->

<!-- Included CSS Files (Compressed) -->

<link rel="stylesheet" href="<?=base_url()?>stylesheets/foundation.css">
<link rel="stylesheet" href="<?=base_url()?>stylesheets/back.css">

<script src="<?=base_url()?>javascripts/modernizr.foundation.js"></script>
</head>
<body class="off-canvas">
	<div class="row">
		<div class="seven columns centered" style="text-align:center;">
			<img src="<?=base_url()?>images/oldfashion.png" alt="logo" style="margin:0 auto;"/>
			<h5>Sede 140</h5>
			<h6>Para ingresar al area de hermanos ingrese sus datos</h6>
		</div>
	</div>
	<div class="row">
		<div class="seven columns centered">
      <?php
      if($errorl){
        echo '<div class="alert-box alert">Usuario y/o contrase&ntilde;a incorrectos. Pruebe de nuevo o contacte al administrador.</div>
      ';
    }
       echo form_open(); ?>
  <fieldset>

    <legend>Login</legend>

    <label>Email/Username</label>
    <input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" class="form" /><?php echo form_error('username'); ?><br/><br/>

    <label>Contrase&ntilde;a</label>
    <input type="password" name="password" value="<?php echo set_value('password'); ?>" size="50" class="form" /><?php echo form_error('password'); ?><br /><br />
    <input type="submit" class="radius success button" value="login" />

  </fieldset>
</form>
		</div>
	</div>

	 

        
<script src="<?=base_url()?>javascripts/foundation.min.js"></script>
<script src="<?=base_url()?>javascripts/preloadcss.js"></script>
<!-- Initialize JS Plugins -->
<script src="<?=base_url()?>javascripts/app.js"></script>


<script>
$(window).load(function(){
  $("#featured").orbit();


});
</script> 

</body>
</html>
