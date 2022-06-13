<?php

  require "conexion.php";
  $sql="SELECT * FROM citas";
  $query=mysqli_query($link,$sql);
?>

<main class="main container translate-main">
  <div class="table-container">
  <table class="main-table">
    <thead class="table-header">
      <tr>
        <th>Nombre del citador</th>
        <th>Teléfono</th>
        <th>Servicio</th>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Modificar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
    <?php
        while($cita=mysqli_fetch_array($query)){?>
      <tr>
        <td><?php echo $cita["nombre_citador"] ?></td>
        <td><?php echo $cita["telefono"] ?></td>
        <td><?php echo $cita["servicio"] ?></td>
        <td><?php echo $cita["fecha"] ?></td>
        <td><?php echo $cita["hora"] ?></td>
        <td><a href="index.php?view=modificar&id=<?php echo $cita['id_cita'] ?>">Modificar</a></td>
        <td><a href="index.php?view=delete&id=<?php echo $cita['id_cita'] ?>">Eliminar</a></td>
    </tr>
    <?php } ?>
    </tbody>
  </table>
      </div>
</main>