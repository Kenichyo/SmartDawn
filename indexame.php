<?php 

session_start();

$connect = mysqli_connect("localhost", "root", "smartdawn", "proyectosmart");

if(isset($_POST["sn"])){
  $sn = mysqli_real_escape_string($connect, $_POST["sn"]);
  $id = mysqli_real_escape_string($connect, $_SESSION['id']);
  $result = "";

$sql = "SELECT COUNT(*) as cantidad FROM adaptador WHERE sn='$sn'";
    $res = mysqli_query($connect, $sql);
    $data = mysqli_fetch_array($res);
    if ($data["cantidad"] > 0) {
      $result .= "<br>El numero de serie ya esta registrado.";
    }

if ($result != "") {
    echo "<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Error</strong><br>$result</div>";
  }else{
    $sql = "INSERT INTO adaptador VALUES($sn, $id, null	, null, null, null, null, null)";
    mysqli_query($connect, $sql);
    echo "<div class='alert alert-dismissible alert-success'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Correcto!</strong><br>Se ha registrado el adaptador correctamente.</div>";
  }

    
  }


if(isset($_POST["sn2"])){
  $sn2 = mysqli_real_escape_string($connect, $_POST["sn2"]);
  $id2 = mysqli_real_escape_string($connect, $_SESSION["id"]);
  $result = "";

if ($result != "") {
    echo "<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Error</strong><br>$result</div>";
    echo "ERROR";
  } else {
    $sql = "INSERT INTO dispensador VALUES($sn2, $id2, null, null, null, null, null, null)";
    mysqli_query($connect, $sql);
    echo "<div class='alert alert-dismissible alert-success'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Correcto!</strong><br>Se ha registrado el adaptador correctamente.</div>";
  }}


 if(isset($_POST["pass1"]) && isset($_POST["pass2"])){
  $pass1 = mysqli_real_escape_string($connect, $_POST["pass1"]);
  $pass2 = mysqli_real_escape_string($connect, $_POST["pass2"]);
  $id = mysqli_real_escape_string($connect, $_SESSION["id"]);
  $result = "";

if ($result != "") {
    echo "<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Error</strong><br>$result</div>";
  } else {
    if ($pass1 == $pass2) {
      # code...
        $sql = "UPDATE usuario SET pass = '$pass1' where id = '$id'";
        mysqli_query($connect, $sql);
        echo "<div class='alert alert-dismissible alert-success'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Correcto!</strong><br>Su contrasenia ha sido cambiada correctamente.</div>";
  }else{
    echo "La contrasenia debe ser la misma";
  }
    }
    }
 ?>