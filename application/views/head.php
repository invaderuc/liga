<?php $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
$this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
$this->output->set_header('Pragma: no-cache'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url('assets/css/foundation.min.css'); ?>">
	<script type="text/javascript"></script>
	<title><?php echo isset($title) ? $title : 'Default Title' ; ?></title>
</head>
<body>
	<div class="top-bar">
		<div class="top-bar-left">
			<ul class="menu">
				<li class="menu-text">Ligas Observer</li>
				<li><a href="<?php echo base_url(); ?>cpersona/index">Personas</a></li>
				<li><a href="#">Ligas</a></li>
				<?php if ($this->session->userdata('s_per_id') != null) { ?>
					<li><a href="<?php echo base_url(); ?>clogin/close">Cerrar Sesión (<?php print_r($this->session->userdata('s_per_nombre'));     ?>)</a></li>
				<?php } else {?>
				<li><a href="<?php echo base_url(); ?>clogin">Iniciar Sesión</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>