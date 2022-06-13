<?php

  require "conexion.php";
  $id=$_POST['id_cita'];
  $nombre_citador = ($_POST["nombre_citador"]);
  $telefono = ($_POST["telefono"]);
  $servicio = ($_POST["servicio"]);
  $fecha = ($_POST["fecha"]);
  $hora = ($_POST["hora"]);

  $sql = "UPDATE citas SET nombre_citador='$nombre_citador', telefono=' $telefono', servicio='$servicio', fecha='$fecha', hora='$hora' WHERE id_cita='$id'";
  $query=mysqli_query($link,$sql);
  if($query){
    header("Location: /salon/index.php?view=dashboard_admin");
    }   
