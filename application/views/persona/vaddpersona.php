<div class="col-lg-6">
	<form action="<?php echo base_url(); ?>cpersona/guardar" method="POST">

		<h2 class="text-muted">Formulario Persona</h2>
		<br>
		<div class="form-group row">
			<span class="col-2 col-form-label">Nombre</span>
		  	<input name="nombre" type="text" class="form-control col-10">
		</div>
		
		<div class="form-group row">
			<span class="col-2 col-form-label">Clave</span>
		  	<input name="clave" type="password" class="form-control col-10">
		</div>
		
		<div class="form-group row">
			<span class="col-2 col-form-label">Correo</span>
		  	<input name="correo" type="text" class="form-control col-10">
		</div>

        <input class="btn btn-primary" type="submit" value="Guardar"><br><br>	   
	</form>
 </div>  
