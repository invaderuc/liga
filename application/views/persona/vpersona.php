<div class="row">
  <table>
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
          <td> </td>  
        </tr>  
      <?php } ?>
    </tbody>
  </table>
</div>