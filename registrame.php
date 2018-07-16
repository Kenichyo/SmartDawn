<?php

$connect = mysqli_connect("localhost", "root", "smartdawn", "proyectosmart");

if(isset($_POST["id"]) && isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["pass"]) && isset($_POST["email"]) && isset($_POST["rpass"])){
  $id = mysqli_real_escape_string($connect, $_POST["id"]);
  $nombre = mysqli_real_escape_string($connect, $_POST["nombre"]);
  $apellido = mysqli_real_escape_string($connect, $_POST["apellido"]);
  $email = mysqli_real_escape_string($connect, $_POST["email"]);
  $pass = mysqli_real_escape_string($connect, $_POST["pass"]);
  $rpass = mysqli_real_escape_string($connect, $_POST["rpass"]);
  $result = "";

  if(strlen($pass) > 8) {
    $result .= "<br>-La contraseña supera los 8 caracteres.";
  }
  if ($pass != $rpass) {
    $result .= "<br>-Las contraseñas no coinciden.";
  }

  if(strlen($nombre) > 10) {
    $result .= "<br>-El usuario supera los 10 caracteres.";
  } else {
    $sql = "SELECT COUNT(*) as cantidad FROM usuario WHERE nombre='$nombre'";
    $res = mysqli_query($connect, $sql);
    $data = mysqli_fetch_array($res);
    if ($data["cantidad"] > 0) {
      $result .= "<br>-El usuario ya existe.";
    }
  }

  

  if ($result != "") {
    echo "<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Error</strong><br>$result</div>";
  } else {
    $sql = "INSERT INTO usuario VALUES('$id', '$nombre', '$apellido', '$pass', '$email')";
    mysqli_query($connect, $sql);
    echo "<div class='alert alert-dismissible alert-success'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Correcto!</strong><br>Usuario registrado correctamente.</div>";
  }
} else {
  echo "Error";
}

?>
