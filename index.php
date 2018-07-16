<?php

session_start();
if(!isset($_SESSION["id"])){
  header("location:login.php");
}

$connect = mysqli_connect("localhost", "root", "smartdawn", "proyectosmart");
$id = mysqli_real_escape_string($connect, $_SESSION['id']);
$sql = "SELECT nombre FROM usuario WHERE id = '$id'";
  $resultado = mysqli_query($connect, $sql);;
  if (!$resultado) {
    echo 'No se pudo ejecutar la consulta: ' . mysql_error();
    exit;
  }else{
    $fila = mysqli_fetch_row($resultado);
  }

echo '<h1 class="" align=center>Bienvenido: '.$fila[0].'</h1>';

include "header.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <script src="js/jquery-1.12.3.min.js" charset="utf-8"></script>
    <style type="text/css" media="screen">
      body{
        background-image: url('image/image1.jpg');
      }
    </style>
</head>
<body>
  <form method="POST">
  <div class="container">
    <div class="col-sm-4 form-control">
      Desea cambiar la contrasena? <br>
      <input class="form-control" type="password" name="pass1" id="pass1" placeholder="contrasena"> <br>
      <input class="form-control" type="password" name="pass2" id="pass2" placeholder="repita contrasena">
      <br>
      <input class="btn btn-warning" type="button" name="cambiar" id="cambiar" value="Cambiar">
    </div>
    <div class="col-sm-4">
      
    </div>
    <div class="col-sm-4">
      
    </div>
  </div>
  <span id="result"></span>
  </form>
</body>
</html>
<script type="text/javascript">
   $(document).ready(function(){
    $('#cambiar').click(function(){
      alert("Cambio");
      var pass1 = $('#pass1').val();
      var pass2 = $('#pass2').val();
      if ($.trim(pass1).length > 0 && $.trim(pass2).length > 0){
        $.ajax({
          url:'indexame.php',
          method:"POST",
          data:{pass1:pass1, pass2:pass2},
          cache:false,
          beforeSend:function(){
            $('#cambiar').val("Comprobando información...");
          },
          success:function(data){
            $('#cambiar').val("Cambiar");
            if(data){
              $("#result").html(data);
            };

          }
        });
      };
    });
  });
 </script>