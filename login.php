<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ingresar</title>
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <style type="text/css" media="screen">
    body {
    background-image: url("image/image9.jpg");
    }
    #card-panel{
      border-radius: 25px;
    }

  </style>
  <style media="screen">
  /* label color */
  .input-field label {
    color: green !important;
  }
  /* label focus color */
  .input-field input[type=text]:focus + label {
    color: green !important;
  }
  /* label underline focus color */
  .input-field input[type=text]:focus {
    border-bottom: 1px solid green !important;
    box-shadow: 0 1px 0 0 green !important;
  }
  /* valid color */
  .input-field input[type=text].valid {
    border-bottom: 1px solid green !important;
    box-shadow: 0 1px 0 0 green !important;
  }
  /* invalid color */
  .input-field input[type=text].invalid {
    border-bottom: 1px solid green !important;
    box-shadow: 0 1px 0 0 green !important;
  }
  /* icon prefix focus color */
  .input-field .prefix.active {
    color: green !important;
  }

  .input-field .prefix {
    color: green !important;
  }

  .input-field input[placeholder]{
    color: green !important;
  }

  ::placeholder { /* Most modern browsers support this now. */
 color: green !important;
}

  .input-field input[placeholder=text]:focus + label {
    color: green !important;
  }
  /* label underline focus color */
  .input-field input[placeholder=text]:focus {
    border-bottom: 1px solid green !important;
    box-shadow: 0 1px 0 0 green !important;
  }
  /* valid color */
  .input-field input[placeholder=text].valid {
    border-bottom: 1px solid green !important;
    box-shadow: 0 1px 0 0 green !important;
  }
  /* invalid color */
  .input-field input[placeholder=text].invalid {
    border-bottom: 1px solid green !important;
    box-shadow: 0 1px 0 0 green !important;
  }
  </style>
  <body>
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
    <main>
      <div class="container">
        <form class="col s12 m12 l12" method="post">
          <div class="row">
            <div id="card-panel" class="input-field col s12 m8 l6 offset-l3 offset-m2 card-panel hoverable">
              <i class="material-icons prefix">account_circle</i>
              <input id="id" type="text" class="validate">
              <label for="id">Rut</label>
            </div>
          </div>
          <div class="row">
            <div id="card-panel" class="input-field col s12 m8 l6 offset-l3 offset-m2 card-panel hoverable">
              <i class="material-icons prefix">lock</i>
              <input id="pass" type="password" class="validate">
              <label for="pass">Contraseña</label>
            </div>
          </div>
          <div class="row center">
            <div class="col s12 m6 l6 offset-m3 offset-l3">
              <input type="button" name="login" style="border-radius: 25px" id="login" value="Entrar" class="btn green hoverable">
            </div>
          </div>
          <div class="row center">
            <div class="col s12 m6 l6 offset-m3 offset-l3">
              <p class="center">¿No tienes cuenta? Registrate <a class="green-text" href="registrar.php" > <b>Aquí</b> </a></p>
            </div>
          </div>
        </form>
      </div>
    </main>
    <footer>

    </footer>
  </body>
</html>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js" ></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('.materialboxed').materialbox();
    $(".button-collapse").sideNav();
    $('.scrollspy').scrollSpy();
    $('.slider').slider({
      indicators: false
    });
    $(document).ready(function() {
      $('input#input_text, textarea#textarea1').characterCounter();
    });
    $('#login').click(function(){
      var id = $('#id').val();
      var pass = $('#pass').val();
      var expresion1 = /\w/;
      if (id === "" || pass === "") {
        Materialize.toast("Todos los campos son obligatorios.", 2000, 'red rounded');
      }else if (isNaN(id) || id.length>8 || id.length<8) {
        Materialize.toast("Ingrese su rut sin guion, puntos ni digito verificador.", 2000, 'red rounded');
      }else if (!expresion1.test(pass)) {
        Materialize.toast("Su contreña debe ser Alfanúmerica.", 2000, 'red rounded');
      }else{
        $.ajax({
          url:"logueame.php",
          method:"POST",
          data:{id:id, pass:pass},
          cache:"false",
          success:function(data) {
            if (data=="1") {
              $(location).attr('href','inicio.php');
            } else {
              Materialize.toast("Las credenciales son incorrectas.", 2000, 'red rounded');
            }
          }
        });
      };
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
