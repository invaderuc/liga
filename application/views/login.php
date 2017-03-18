<div class="col-lg-6">
	<?php $mensaje =  isset($mensaje) ? $mensaje : null ;?>
	<?php if ($mensaje != null): ?>
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		  <strong>Ups!</strong> <?php echo $mensaje ; ?>
		</div>
	<?php endif ?>
	
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

