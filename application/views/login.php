<div class="col-lg-6">
	<form action="<?php echo base_url(); ?>clogin/login" method="POST">
		<h2 class="text-muted">Logín</h2>
		<br>
	  	<div class="form-group row">
			<span class="col-2 col-form-label">Clave</span>
		  	<input name="usuario" type="text" class="form-control col-10">
		</div>
		
		<div class="form-group row">
			<span class="col-2 col-form-label">Correo</span>
		  	<input name="password" type="password" class="form-control col-10">
		</div>

        <br><input class="btn btn-primary" type="submit" value="Ingresar"><br><br>	
	</form>
</div>