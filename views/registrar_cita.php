<?php
  require "conexion.php";

  $id_usuario = isset($_POST["id_usuario"]) ? trim($_POST["id_usuario"]) : "";
  $nombre_citador = isset($_POST["nombre_citador"]) ? trim($_POST["nombre_citador"]) : "";
  $telefono = isset($_POST["telefono"]) ? trim($_POST["telefono"]) : "";
  $servicio = isset($_POST["servicio"]) ? trim($_POST["servicio"]) : "";
  $fecha = isset($_POST["fecha"]) ? trim($_POST["fecha"]) : "";
  $hora = isset($_POST["hora"]) ? trim($_POST["hora"]) : "";

  $query = "SELECT * FROM citas WHERE fecha=? AND hora=?";
  $stmt = $link->prepare($query);
  if ($stmt == false) {
    die("Ocurrió un problema tratado de preparar la consulta: " . $link->error);
  }
  $stmt->bind_param("ss", $fecha, $hora);
  $stmt->execute();
  $result = $stmt->get_result();
  $citas = $result->fetch_all(MYSQLI_ASSOC);
  if (count($citas) > 0) {
    header("Location: /salon/index.php?view=servicios");
    exit;
  }

  $query = "INSERT INTO citas VALUES (null,?,?,?,?,?,?)";
  $stmt = $link->prepare($query);
  if ($stmt == false) {
    die("Ocurrió un problema tratado de preparar la consulta: " . $link->error);
  }
  $stmt->bind_param("ssssss", $id_usuario, $nombre_citador, $telefono, $servicio, $fecha, $hora);
  $exito = $stmt->execute();
  if ($exito) {
    header("Location: /salon/index.php?view=servicios");
  } else {
    die("Falló: ".$stmt->error);
  }
