<div class="col-lg-12">
	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>cpersona">Personas</a></li>
	  <li class="breadcrumb-item active"><?php echo $nombre ?></li>
	</ol>
	<div class="jumbotron">
        <dl class="row">
		  <dt class="col-sm-3">ID usuario:</dt>
		  <dd class="col-sm-9"><?php  echo $id ?></dd>

		  <dt class="col-sm-3">Nombre de usuario:</dt>
		  <dd class="col-sm-9"><?php  echo $nombre ?></dd>

		  <dt class="col-sm-3">Clave:</dt>
		  <dd class="col-sm-9"><?php  echo $clave ?></dd>

		  <dt class="col-sm-3">Correo:</dt>
		  <dd class="col-sm-9"><?php  echo $correo ?></dd>

		  <dt class="col-sm-3">Día de registro:</dt>
		  <dd class="col-sm-9"><?php  echo $registro ?></dd>
		</dl>
    </div>
</div>  
