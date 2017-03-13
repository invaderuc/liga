<form action="<?php echo base_url(); ?>cpersona/guardar" method="POST">
	<div class="row">
		<div class="large-5 columns">
			<h2>Formulario Persona</h2>

			<label for="nombre">Nombre</label>
		  	<input id="nombre" name="nombre" type="text" class="validate">
      
	      	<label for="correo">Correo</label>
		  	<input id="correo" name="correo" type="text" class="validate">

	        <label for="clave">Clave</label>
		  	<input id="clave" name="clave" type="text" class="validate">

	        <input class="button" type="submit" value="Ingresar">
	    </div>
    </div>  
</form>

