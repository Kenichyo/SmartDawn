<?php

session_start();
require 'conexion.php';

if(isset($_POST["sn"]) && isset($_POST["hora1"]) && isset($_POST["minuto1"]) && isset($_POST["hora2"]) && isset($_POST["minuto2"]) && isset($_POST["hora3"]) && isset($_POST["minuto3"])){
  $sn = mysqli_real_escape_string($connect, $_POST["sn"]);
  $hora1 = mysqli_real_escape_string($connect, $_POST["hora1"]);
  $minuto1 = mysqli_real_escape_string($connect, $_POST["minuto1"]);
  $hora2 = mysqli_real_escape_string($connect, $_POST["hora2"]);
  $minuto2 = mysqli_real_escape_string($connect, $_POST["minuto2"]);
  $hora3 = mysqli_real_escape_string($connect, $_POST["hora3"]);
  $minuto3 = mysqli_real_escape_string($connect, $_POST["minuto3"]);
  $id = mysqli_real_escape_string($connect, $_SESSION["id"]);
  $sql = "UPDATE adaptador SET hora1 = '$hora1', minuto1 = '$minuto1', hora2 = '$hora2', minuto2 = '$minuto2', hora3 = '$hora3', minuto3 = '$minuto3' where sn = $sn";
  mysqli_query($connect, $sql);
  echo "Se ha registrado el adaptador correctamente.";
}

?>
