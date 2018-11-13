<?php
include "conexion.php";

session_start();

if(!isset($_SESSION["id"])){
  header("location:login.php");
}

$id = mysqli_real_escape_string($connect, $_SESSION['id']);
$sql = "SELECT * FROM usuario WHERE id = '$id'";
  $resultado = mysqli_query($connect, $sql);;
  if (!$resultado) {
    echo 'No se pudo ejecutar la consulta: ' . mysql_error();
    exit;
  }else{
    $fila = mysqli_fetch_row($resultado);
  }

$sql4 = "SELECT sn FROM adaptador WHERE id_user='$id'";
$resulSN = mysqli_query($connect, $sql4);


$sql1 = "SELECT hora1, minuto1, hora2, minuto2, hora3, minuto3 FROM adaptador WHERE id_user = '$id' AND sn='123'";
$resultado1 = mysqli_query($connect, $sql1);
if (!$resultado1) {
  echo 'No se pudo ejecutar la consulta: ' . mysql_error();
  exit;
}else{
  $fila2 = mysqli_fetch_row($resultado1);
}

$sql2 = "SELECT sn, nombre FROM adaptador WHERE id_user = '$id'";
$resultado2 = mysqli_query($connect, $sql2);
if (!$resultado2) {
  // code...
  echo "Error en la consulta".mysql_error();
  exit;
}else {
  $fila3 = mysqli_fetch_row($resultado2);
}

$sql6 = "SELECT * FROM adaptador where id_user='$id'";
$res6 = mysqli_query($connect, $sql6);
if (!$res6) {
  // code...
  echo "Error en la consulta".mysql_error();
  exit;
}else {
  $data = "";
  while ($data6 = mysqli_fetch_assoc($res6)) {
    // code...

    $data .= '<tr>
                <td>'.$data6['sn'].'</td>
                <td>'.$data6['nombre'].'</td>
                <td>
                    <button data-target="modal2" class="btn blue modal-trigger modal-2 hoverable" style="border-radius: 25px" value='.$data6['sn'].'>Cambiar Nombre</button>
                </td>
                <td>
                    <button data-target="modal3" class="btn red modal-trigger modal-3 hoverable" style="border-radius: 25px" value='.$data6['sn'].'>Eliminar</button>
                </td>
            </tr>';
  }
}

$sql7 = "SELECT * FROM adaptador where id_user='$id'";
$res7 = mysqli_query($connect, $sql7);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap core CSS -->
    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/miestilo.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js" ></script>
    <script type="text/javascript">
      $(function(){
        Materialize.updateTextFields();
        $('.materialboxed').materialbox();
        $(".button-collapse").sideNav();
        $('.scrollspy').scrollSpy();
        $(document).ready(function() {
          $('select').material_select();
        });
        $('.carousel.carousel-slider').carousel({fullWidth: true});
        $('.slider').slider({
          indicators: false,
          height: 400
        });
        $(document).ready(function(){
          // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
          $('.modal').modal();
        });
      });
    </script>
  </head>
  <body >
    <header>
      <div>
        <nav>
          <div class="nav-wrapper" style="background-color: white" id="nav">
            <a href="#" class="hide-on-small-only"  ><img class="responsive-image" width="290" src="image/logoUPPER.png" alt=""></a>
            <a href="#" class="hide-on-med-and-up"  ><img class="center responsive-image" width="200" src="image/logoUPPER.png" alt=""></a>
            <ul class="right hide-on-med-and-down">
              <li><a id="ini" class="green-text" href="inicio.php">Hola: <b><?php echo $fila[1]   ; ?></b></a></li>
              <li><a class="green-text" href="adaptador.php">Adaptador<i class="material-icons left green-text">add_alarm</i></a></li>
              <!-- <li><a href="dispensador.php">Dispensador<i class="material-icons left green-text">cake</i></a></li> -->
              <li><a class="green-text" href="producto.php">Productos<i class="material-icons left green-text">add_to_photos</i></a></li>
              <li><a class="green-text" href="logout.php">Desconectarse<i class="material-icons left green-text">power_settings_new</i></a></li>
            </ul>
            <!-- Menú desplegable en Tablets o Moviles-->
            <ul id="slide-out" class="side-nav">
              <!--Header del Nav-->
              <li>
                <div class="background">
                  <img src="image/logoUPPER.png" alt="" class="responsive-image" width="300" >
                </div>
              </li>
              <!--Lista de contenido del menu-->
              <li><a href="inicio.php">Perfil<i class="material-icons left">person</i></a></li>
              <li><a href="adaptador.php">Adaptador<i class="material-icons left">add_alarm</i></a></li>
              <!-- <li><a href="dispensador.php">Dispensador<i class="material-icons left white-text">cake</i></a></li> -->
              <li><a href="producto.php">Productos<i class="material-icons left">add_to_photos</i></a></li>
              <li><a href="logout.php">Desconectarse<i class="material-icons left">power_settings_new</i></a></li>
            </ul>
            <!-- Boton de Menú -->
            <a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="material-icons">menu</i></a>
          </div>
        </nav>
      </div>
    </header>
