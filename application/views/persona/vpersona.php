<div class="col-lg-12">
  <p><a class="btn btn btn-success" href="<?php echo base_url(); ?>cpersona/add" role="button">Agregar Personas</a></p>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Registro</th>
        <th>Acción</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($info->result() as $row){ ?>
        <tr>
          <td> <?php echo $row->PER_ID; ?></td>
          <td> <?php echo $row->PER_NOMBRE; ?></td>
          <td> <?php echo $row->PER_CORREO; ?></td>
          <td> <?php echo $row->PER_REGISTRO; ?></td>
          <td>  
            
              <a class="link" href="<?php echo base_url(); ?>cpersona/view?id=<?php echo $row->PER_ID; ?>">Ver</a> 
              <a class="link" href="<?php echo base_url(); ?>">Editar</a> 
              <a class="link" href="<?php echo base_url(); ?>">Eliminar</a> 
            
          </td>  
        </tr>  
      <?php } ?>
    </tbody>
  </table>
</div>