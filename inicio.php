<?php
include "header.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style type="text/css" media="screen">
      body{
        background-image: url('image/image14.jpg');
      }
    </style>
</head>
<body>
  <main>
    <div class="container">
      <form class="col s12 m12 l12" method="post">
        <br>
        <div class="row">
          <div id="card-panel" class="input-field col s12 m5 l5 card-panel hoverable">
            <i class="material-icons prefix">account_circle</i>
            <input id="id" type="text" value="<?php echo $fila[0]; ?>" readonly="readonly" >
            <label for="id">Rut</label>
          </div>
          <div id="card-panel" class="input-field col s12 m5 l5 offset-l2 offset-m2 card-panel hoverable">
            <i class="material-icons prefix">account_circle</i>
            <input id="nombre" type="text" class="validate" value="<?php echo $fila[1]; ?>">
            <label for="nombre">Nombre</label>
          </div>
        </div>
        <div class="row">
          <div id="card-panel" class="input-field col s12 m5 l5 card-panel hoverable">
            <i class="material-icons prefix">account_circle</i>
            <input id="apellido" type="text" class="validate" value="<?php echo $fila[2]; ?>">
            <label for="apellido">Apellido</label>
          </div>
          <div id="card-panel" class="input-field col s12 m5 l5 offset-l2 offset-m2 card-panel hoverable">
            <i class="material-icons prefix">email</i>
            <input id="email" type="text" class="validate" value="<?php echo $fila[4]; ?>">
            <label for="email">Correo</label>
          </div>
        </div>
        <div class="row">
          <div id="card-panel" class="input-field col s12 m5 l5 card-panel hoverable">
            <i class="material-icons prefix">lock</i>
            <input id="pass1" type="password" class="validate">
            <label for="pass1">Antigua Contraseña</label>
            <input class="form-control" hidden="true" type="password" name="pass" id="pass" value="<?php echo $fila[3]; ?>">
          </div>
          <div id="card-panel" class="input-field col s12 m5 l5 offset-l2 offset-m2 card-panel hoverable">
            <i class="material-icons prefix">lock</i>
            <input id="pass2" type="password" class="validate">
            <label for="pass2">Nueva Contraseña</label>
          </div>
        </div>
        <div class="row">
          <div class="col s12 m6 l6 offset-m3 offset-l3 center">
            <input type="button" name="cambiar" id="cambiar" style="border-radius: 25px" value="Actualizar Perfil" class="btn green hoverable">
          </div>
        </div>
      </form>
    </div>
  </main>
</body>
</html>
<script type="text/javascript">
   $(document).ready(function(){
    $('#cambiar').click(function(){
      var id = $('#id').val();
      var nombre = $('#nombre').val();
      var apellido = $('#apellido').val();
      var email = $('#email').val();
      var pass0 = $('#pass').val();
      var pass1 = $('#pass1').val();
      var pass2 = $('#pass2').val();
      if (nombre === "" || apellido === "" || email === "" || pass1 === "" || pass2 === "") {
        Materialize.toast("¡Error! No puede dejar campos vacios.", 2000, 'red rounded');
      }else if (pass1 != pass0) {
        Materialize.toast("¡Error! Las contraseñas no coinciden.", 2000, 'red rounded');
      }else {
        $.ajax({
          url:'iniciame.php',
          method:"POST",
          data:{id:id, nombre:nombre, apellido:apellido, email:email, pass1:pass1, pass2:pass2},
          cache:false,
          success:function(data){
            if(data){
              $('#pass1').val("");
              $('#pass2').val("");
              Materialize.toast(data, 2000, 'green rounded');
            };

          }
        });
      };
    });
  });
 </script>
