<div class="col-lg-6">
	<form action="<?php echo base_url(); ?>cpersona/update" method="POST">
		<h2 class="text-muted">Actualizar Persona</h2>
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
		<input name="id" type="hidden" value="<?php echo $id ?>"class="form-control col-10">

        <input class="btn btn-primary" type="submit" value="Guardar Cambios"><br><br>	   
	</form>
 </div>  
