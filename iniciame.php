<?php

session_start();
require 'conexion.php';

//Ingresar Adaptador
if(isset($_POST["sn"]) && isset($_POST["nombre_sn"])){
  $sn5 = mysqli_real_escape_string($connect, $_POST["sn"]);
  $nombre_sn5 = mysqli_real_escape_string($connect, $_POST["nombre_sn"]);
  $id5 = mysqli_real_escape_string($connect, $_SESSION['id']);
  $result5 = "";

//Validar Adaptador Existente
$sql5 = "SELECT COUNT(*) as cantidad FROM adaptador WHERE sn='$sn5' OR nombre='$nombre_sn5'";
$res5 = mysqli_query($connect, $sql5);
$data5 = mysqli_fetch_array($res5);
if ($data5["cantidad"] > 0) {
  $result5 = "El numero de serie o el nombre ya esta registrado.";
}

//Insertar SN Adaptador
if ($result5 != "") {
    echo $result5;
  }else{
    $sql5 = "INSERT INTO adaptador VALUES($sn5, $id5, '$nombre_sn5', 0, 0, 0, 0, 0, 0)";
    mysqli_query($connect, $sql5);
    echo "Se ha registrado el adaptador correctamente.";
  }
}

//Actualizar un adaptador
if (isset($_POST["sn_editar"]) && isset($_POST["nombre_editar"])) {
  $sn_editar = mysqli_real_escape_string($connect, $_POST["sn_editar"]);
  $nombre_editar = mysqli_real_escape_string($connect, $_POST["nombre_editar"]);
  $sql7 = "UPDATE adaptador SET nombre='$nombre_editar' where sn = $sn_editar";
  mysqli_query($connect, $sql7);
  echo 'Se ha actualizado el nombre correctamente.';
  // code...
}


//Cambio de contraseña
if(isset($_POST["id"]) && isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["email"]) && isset($_POST["pass1"]) && isset($_POST["pass2"])){
  $id3 = mysqli_real_escape_string($connect, $_POST["id"]);
  $nombre3 = mysqli_real_escape_string($connect, $_POST["nombre"]);
  $apellido3 = mysqli_real_escape_string($connect, $_POST["apellido"]);
  $email3 = mysqli_real_escape_string($connect, $_POST["email"]);
  $pass1 = mysqli_real_escape_string($connect, $_POST["pass1"]);
  $pass2 = mysqli_real_escape_string($connect, $_POST["pass2"]);
  $result3 = "";

  if ($result3 != "") {
    echo "Error al realizar la edición";
  } else {
        $sql3 = "UPDATE usuario SET nombre = '$nombre3', apellido = '$apellido3', email = '$email3', pass = '$pass2' where id = '$id3'";
        mysqli_query($connect, $sql3);
        echo "Su perfil ha sido actualizado correctamente.";
  }
}


//Eliminar un dispositivo
if (isset($_POST['sn_md3'])) {
  $sn_md3 = mysqli_real_escape_string($connect, $_POST['sn_md3']);
  $sql4 = "DELETE FROM adaptador WHERE sn = $sn_md3";
  mysqli_query($connect, $sql4);
  echo $sn_md3;
  // code...
}

 ?>
