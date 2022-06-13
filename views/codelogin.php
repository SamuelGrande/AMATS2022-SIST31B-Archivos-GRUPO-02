<?php

require_once "conexion.php";
session_start();
//INICIALIZAR LA SESION
  $adminpass = ($_POST["password"]);
  $adminmail = ($_POST["email"]);
if($adminpass=="admin123" && $adminmail=="adminVictoriasSalon@admin.com"){
  session_start();
  $_SESSION["admin"] = true;
  header("location: /salon/index.php?view=servicios");
}
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: /salon/index.php?view=servicios");
    exit;
  }

  $password = isset($_POST["password"]) ? trim($_POST["password"]) : "";
  $email = isset($_POST["email"]) ? trim($_POST["email"]) : "";

  if (empty($email) || empty($password)) {
    header("Location: /salon/index.php?view=login");
    exit();
  }

  $query = "SELECT * FROM usuarios WHERE email=?";
  $stmt = $link->prepare($query);
  if ($stmt == false) {
    die("Ocurrió un error tratando de preparar la consulta: ".$link->error);
  }
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $res = $stmt->get_result();
  $resultado = $res->fetch_array(MYSQLI_ASSOC);
  if ($resultado == null) {
    header("Location: /salon/index.php?view=login&mail_err");
    exit;
  }

  $is_password_correct = password_verify($password, $resultado["clave"]);
  
  if ($is_password_correct) {
    // ALMACENAR DATOS EN VARABLES DE SESION
    $_SESSION["loggedin"] = true;
    $_SESSION["id"] = $resultado["id"];
    header("Location: /salon/index.php?view=servicios");
  } else {
    header("Location: /salon/index.php?view=login&pass_err");
  }

  $link->close();
?>
