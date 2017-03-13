<form action="<?php echo base_url(); ?>clogin/login" method="POST">
	<div class="row">
		<div class="large-5 columns">
			<h2>Login</h2>

			<label for="usuario">Usuario</label>
		  	<input id="usuario" name="usuario" type="text" class="validate">
      
	      	<label for="password">Password</label>
		  	<input id="password" name="password" type="password" class="validate">

	        <input class="button" type="submit" value="Ingresar">
	    </div>
    </div>  
</form>