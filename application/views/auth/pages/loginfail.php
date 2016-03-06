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
      if($errorl==TRUE){
        echo '<div class="alert-box alert">Usuario y/o contrase&ntilde;a incorrectos. Pruebe de nuevo o contacte al administrador.</div>';
    }
       echo form_open(); ?>
  <fieldset>

    <legend>Login</legend>

    <label>Email/Username</label>
    <input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" class="form" /><?php echo form_error('username'); ?><br/><br/>

    <label>Contrase&ntilde;a</label>
    <input type="password" name="password" value="<?php echo set_value('password'); ?>" size="50" class="form" /><?php echo form_error('password'); ?><br /><br />
    <input type="submit" class="radius success button" value="login" name="login" />

  </fieldset>
</form>
		</div>
	</div>