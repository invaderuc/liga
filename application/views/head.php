<?php $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
$this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
$this->output->set_header('Pragma: no-cache'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url('assets/css/norma.css'); ?>">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url('assets/css/tema.css'); ?>">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url('assets/css/bootstrap.min.css'); ?>">

	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<title><?php echo isset($title) ? $title : 'Default Title' ; ?></title>
</head>
<body>
	<div class="container">
		<div class="header clearfix">
	        <nav>
	          <ul class="nav nav-pills float-right">
	          	<li class="nav-item">
	              <a class="nav-link" href="<?php echo base_url(); ?>">Inicio</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="<?php echo base_url(); ?>cpersona">Personas</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="<?php echo base_url(); ?>cliga">Ligas</a>
	            </li>
	            <li class="nav-item">
	              <?php if ($this->session->userdata('s_per_id') != null) { ?>
							<li><a class="btn btn-warning" href="<?php echo base_url(); ?>clogin/close">Cerrar Sesión (<?php print_r($this->session->userdata('s_per_nombre')); ?>)</a></li>
						<?php } else {?>
							<li><a class="btn btn-primary" href="<?php echo base_url(); ?>clogin">Iniciar Sesión</a></li>
						<?php } ?>
	            </li>
	          </ul>
	        </nav>
        	<h3 class="text-muted">Ligas Observer</h3>
      	</div>