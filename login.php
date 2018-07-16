<?php

session_start();
if (isset($_SESSION["id"])) {
  header("location:index.php");
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ingresar</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <script src="js/jquery-1.12.3.min.js" charset="utf-8"></script>
    <script src="bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
  </head>
  <style type="text/css" media="screen">
    body {
    background-image: url("image/image6.jpg");

}
  </style>
  <body>
    <div class="container" align="center">
      <div class="row">
        <div class="col-md-4">
          
        </div>
        <div class="col-md-4">
          <form method="post">
            <br><br>
            <h1><p class="text-center"> Bienvenido</p></h1>
            <br><br>
            <div class="form-group">
              <label for="id">Rut de Usuario</label>
              <input type="text" name="id" id="id" class="form-control">
            </div>
            <div class="form-group">
              <label for="pass">Contrasena</label>
              <input type="password" name="pass" id="pass" class="form-control">
            </div>
            <br><br>
            <div align="center">
              <input type="button" name="login" id="login" value="Entrar" class="btn btn-success">
            </div>
            <br>
            <span id="result"></span>
            <br>
            <p>No tienes cuenta? registrate <a href="registrar.php" > aqui</a></p> 
          </form>
        </div>
        <div class="col-md-4">
          
        </div>
      </div>
    </div>
  </body>
</html>

<script>
  $(document).ready(function() {
    $('#login').click(function(){
      var id = $('#id').val();
      var pass = $('#pass').val();
      if($.trim(id).length > 0 && $.trim(pass).length > 0){
        $.ajax({
          url:"logueame.php",
          method:"POST",
          data:{id:id, pass:pass},
          cache:"false",
          beforeSend:function() {
            $('#login').val("Conectando...");
          },
          success:function(data) {
            $('#login').val("Entrar");
            if (data=="1") {
              $(location).attr('href','index.php');
            } else {
              $("#result").html("<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Error!</strong> las credenciales son incorrectas.</div>");
            }
          }
        });
      };
    });
  });
</script>
