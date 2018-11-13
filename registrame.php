<?php

session_start();
require 'conexion.php';

if(isset($_POST["id"]) && isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["pass"]) && isset($_POST["email"]) && isset($_POST["rpass"])){
  $id = mysqli_real_escape_string($connect, $_POST["id"]);
  $nombre = mysqli_real_escape_string($connect, $_POST["nombre"]);
  $apellido = mysqli_real_escape_string($connect, $_POST["apellido"]);
  $email = mysqli_real_escape_string($connect, $_POST["email"]);
  $pass = mysqli_real_escape_string($connect, $_POST["pass"]);
  $rpass = mysqli_real_escape_string($connect, $_POST["rpass"]);
  $sql = "INSERT INTO usuario VALUES($id, '$nombre', '$apellido', '$pass', '$email')";
  mysqli_query($connect, $sql);
} else {
  echo "No se pudo realizar el registro.";
}

?>
