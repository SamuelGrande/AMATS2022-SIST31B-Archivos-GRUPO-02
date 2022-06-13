<?php

  require "conexion.php";

  $query = "SELECT * FROM citas WHERE id_usuario=?";
  $stmt = $link->prepare($query);
  if ($stmt == false) {
    die("Error tratando de preparar la consulta: ".$link->error);
  }
  $stmt->bind_param("s", $_SESSION["id"]);
  $stmt->execute();
  $result = $stmt->get_result();
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
      </tr>
    </thead>
    <tbody>
    <?php
      while($cita = $result->fetch_assoc()): ?>
      <tr>
        <td><?php echo $cita["nombre_citador"] ?></td>
        <td><?php echo $cita["telefono"] ?></td>
        <td><?php echo $cita["servicio"] ?></td>
        <td><?php echo $cita["fecha"] ?></td>
        <td><?php echo $cita["hora"] ?></td>
      </tr>
    <?php endwhile ?>
    </tbody>
  </table>
      </div>
</main>