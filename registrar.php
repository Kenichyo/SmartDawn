<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/miestilo.css">
  </head>
   <body style="background-image: url(image/image13.jpg)" >
     <header>
       <div>
         <nav>
           <div class="nav-wrapper" style="background-color: white" id="nav">
             <a href="index.php" class="hide-on-small-only"  ><img class="responsive-image" width="290" src="image/logoUPPER.png" alt=""></a>
             <a href="index.php" class="hide-on-med-and-up"  ><img class="center responsive-image" width="200" src="image/logoUPPER.png" alt=""></a>
             <ul class="right hide-on-med-and-down">
               <li><a class="green-text" href="index.php">Inicio<i class="material-icons left green-text">home</i></a></li>
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
               <li><a href="index.php">Inicio<i class="material-icons left">home</i></a></li>
             </ul>
             <!-- Boton de Menú -->
             <a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="material-icons">menu</i></a>
           </div>
         </nav>
       </div>
     </header>
     <main >
       <div class="container">
         <form class="col s12 m12 l12" method="post">
           <div class="row">
             <div class="col s12 m8 l6 offset-m2 offset-l3 center">
             </div>
           </div>
           <div class="row">
             <div id="card-panel" class="input-field col s12 m5 l5 card-panel hoverable">
               <i class="material-icons prefix">account_circle</i>
               <input id="id" type="text">
               <label for="id">Rut</label>
             </div>
             <div id="card-panel" class="input-field col s12 m5 l5 offset-l2 offset-m2 card-panel hoverable">
               <i class="material-icons prefix">account_circle</i>
               <input id="nombre" type="text" class="validate">
               <label for="nombre">Nombre</label>
             </div>
           </div>
           <div class="row">
             <div id="card-panel" class="input-field col s12 m5 l5 card-panel hoverable">
               <i class="material-icons prefix">account_circle</i>
               <input id="apellido" type="text" class="validate">
               <label for="apellido">Apellido</label>
             </div>
             <div id="card-panel" class="input-field col s12 m5 l5 offset-l2 offset-m2 card-panel hoverable">
               <i class="material-icons prefix">email</i>
               <input id="email" type="text" class="validate">
               <label for="email">Correo</label>
             </div>
           </div>
           <div class="row">
             <div id="card-panel" class="input-field col s12 m5 l5 card-panel hoverable">
               <i class="material-icons prefix">lock</i>
               <input id="pass" type="password" class="validate">
               <label for="pass">Contraseña</label>
             </div>
             <div id="card-panel" class="input-field col s12 m5 l5 offset-l2 offset-m2 card-panel hoverable">
               <i class="material-icons prefix">lock</i>
               <input id="rpass" type="password" class="validate">
               <label for="rpass">Repita Contraseña</label>
             </div>
           </div>
           <div class="row">
             <div class="col s12 m6 l6 offset-m3 offset-l3 center">
               <input type="button" name="registrar" id="registrar" style="border-radius: 25px" value="Registrar" class="btn green hoverable">
             </div>
           </div>
           <div class="row">
             <div class="col s12 m8 l6 offset-m2 offset-l3 center">
               <p class="center white-text"> ¿Ya tienes cuenta? Ingresa <a class="white-text" href="login.php" > <b>Aquí</b> </a>  </p>
             </div>
           </div>
         </form>
       </div>
     </main>
   </body>
</html>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js" ></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#registrar').click(function(){
      var id = $('#id').val();
      var nombre = $('#nombre').val();
      var apellido = $('#apellido').val();
      var email = $('#email').val();
      var pass = $('#pass').val();
      var rpass = $('#rpass').val();
      var expresion1 = /[a-z]/;
      var expresion2 = /\w/;
      if (id === "" || nombre === "" || apellido === "" || email === "" || pass === "" || rpass === "") {
        Materialize.toast("Todos los campos son obligatorios.", 2000, 'red rounded');
      }else if(isNaN(id) || id.length!=8){
        Materialize.toast("Ingrese su rut sin guion, puntos ni digito verificador.", 2000, 'red rounded');
      }else if(pass != rpass){
        Materialize.toast("Las contraseñas deben ser las mismas.", 2000, 'red rounded');
      }else if (pass.length>12 || pass.length<4 || rpass.length>12 || rpass.length<4) {
        Materialize.toast("Las contraseñas deben tener entre 4 y 12 caracteres.", 2000, 'red rounded');
      }else if(!expresion1.test(nombre)){
        Materialize.toast("Ingrese un Nombre Valido.", 2000, 'red rounded');
      }else if (!expresion1.test(apellido)) {
        Materialize.toast("Ingrese un Apellido Valido.", 2000, 'red rounded');
      }else if (!expresion2.test(email)) {
        Materialize.toast("Ingrese un Apellido Valido.", 2000, 'red rounded');
      }else {
        $.ajax({
          url:'registrame.php',
          method:"POST",
          data:{id:id, nombre:nombre, apellido:apellido, email:email, pass:pass, rpass:rpass},
          cache:false,
          success:function(data){
            $('#registrar').val("Registrar");
            if (data == "No se pudo realizar el registro.") {
              Materialize.toast(data, 2000, 'red rounded');
            }else {
              Materialize.toast("Usuario registrado.", 2000, 'green rounded');
              $("#id").val("");
              $("#nombre").val("");
              $("#apellido").val("");
              $("#email").val("");
              $("#pass").val("");
              $("#rpass").val("");
            }

          }
        });
      }


    });
  });
</script>
<script type="text/javascript">
  $(function(){
    $('.materialboxed').materialbox();
    $(".button-collapse").sideNav();
    $('.scrollspy').scrollSpy();
    $('.slider').slider({
      indicators: false,
      height: 400
    });
  });
</script>
