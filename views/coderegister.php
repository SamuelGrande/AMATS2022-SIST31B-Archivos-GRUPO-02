<?php
  require "conexion.php";

  $username = isset($_POST["username"]) ? trim($_POST["username"]) : "";
  $email = isset($_POST["email"]) ? trim($_POST["email"]) : "";
  $password = isset($_POST["password"]) ? trim($_POST["password"]) : "";

  if (empty($username) || empty($email) || empty($password)) {
    header("Location: /salon/index.php?view=registrarse");
    exit();
  }

  $errors = [];
  
  // Validando que el usuario no exista
  $query = "SELECT * FROM usuarios WHERE usuario=?";
  $stmt = $link->prepare($query);
  if ($stmt == false) {
    die("Algo salió mal a la hora de preparar consulta: " . $link->error);
  }
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $res = $stmt->get_result();
  $resultados = $res->fetch_array(MYSQLI_ASSOC);
  if ($resultados !== NULL) {
    array_push($errors, "user_err");
  }

  // Validando que el email no exista
  $query = "SELECT * FROM usuarios WHERE email=?";
  $stmt = $link->prepare($query);
  if ($stmt == false) {
    die("Algo salió mal a la hora de preparar consulta: " . $link->error);
  }
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $res = $stmt->get_result();
  $resultados = $res->fetch_array(MYSQLI_ASSOC);
  if ($resultados !== NULL) {
    array_push($errors, "email_err");
  }

  // Si el usuario o email ya están registrados, se regresa a la view
  // Y se indica cual existe
  if (count($errors) > 0) {
    header("Location: /salon/index.php?view=registrarse&" . join("&", $errors));
    exit();
  }

  // Registrando usuario en la base de datos
  $contra_encriptada = password_hash($password, PASSWORD_DEFAULT);
  $query = "INSERT INTO usuarios VALUES (null,?,?,?)";
  $stmt = $link->prepare($query);
  if ($stmt == false) {
    die("Algo salió mal a la hora de preparar consulta: " . $link->error);
  }
  $stmt->bind_param("sss", $username, $email, $contra_encriptada);
  $exito = $stmt->execute();
  if ($exito == true) {
    header("Location: /salon/index.php?view=login&agregado");
  } else {
    echo "Error a la hora de ingresar el registro: " . $stmt->error;
  }

?>