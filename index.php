<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SmartDawn</title>
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <style media="screen">
  h3{
    border: 20px;
  }
  /* label color */
  .input-field label {
    color: #d81b60 !important;
  }
  /* label focus color */
  .input-field input[type=text]:focus + label {
    color: #d81b60 !important;
  }
  /* label underline focus color */
  .input-field input[type=text]:focus {
    border-bottom: 1px solid #d81b60 !important;
    box-shadow: 0 1px 0 0 #d81b60 !important;
  }
  /* valid color */
  .input-field input[type=text].valid {
    border-bottom: 1px solid #d81b60 !important;
    box-shadow: 0 1px 0 0 #d81b60 !important;
  }
  /* invalid color */
  .input-field input[type=text].invalid {
    border-bottom: 1px solid #d81b60 !important;
    box-shadow: 0 1px 0 0 #d81b60 !important;
  }
  /* icon prefix focus color */
  .input-field .prefix.active {
    color: #d81b60 !important;
  }

  .input-field .prefix {
    color: #d81b60 !important;
  }

  .input-field input[placeholder]{
    color: #d81b60 !important;
  }

  ::placeholder { /* Most modern browsers support this now. */
 color: #d81b60 !important;
}

  .input-field input[placeholder=text]:focus + label {
    color: #d81b60 !important;
  }
  /* label underline focus color */
  .input-field input[placeholder=text]:focus {
    border-bottom: 1px solid #d81b60 !important;
    box-shadow: 0 1px 0 0 #d81b60 !important;
  }
  /* valid color */
  .input-field input[placeholder=text].valid {
    border-bottom: 1px solid #d81b60 !important;
    box-shadow: 0 1px 0 0 #d81b60 !important;
  }
  /* invalid color */
  .input-field input[placeholder=text].invalid {
    border-bottom: 1px solid #d81b60 !important;
    box-shadow: 0 1px 0 0 #d81b60 !important;
  }
  </style>
  <body style="background-image: url(image/shattered-dark.png); background-color: #5cd537" >
    <header>
      <div>
        <nav>
          <div class="nav-wrapper" style="background-color: white" id="nav">
            <a href="index.php" class="hide-on-small-only"  ><img class="responsive-image" width="290" src="image/logoUPPER.png" alt=""></a>
            <a href="index.php" class="hide-on-med-and-up"  ><img class="center responsive-image" width="200" src="image/logoUPPER.png" alt=""></a>
            <ul class="right hide-on-med-and-down">
              <li><a class="green-text" href="#QueOfrecemos">Porque Adquirirlo<i class="material-icons left green-text">live_help</i></a></li>
              <li><a class="green-text" href="#NuestrosProductos">SmartDawn<i class="material-icons left green-text">lightbulb_outline</i></a></li>
              <li><a class="green-text" href="#NuestrosMaestros">Acerca de Nosotros<i class="material-icons left green-text">group</i></a></li>
              <li><a class="green-text" href="login.php">Ingresar<i class="material-icons left green-text">person</i></a></li>
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
              <li><a href="#QueOfrecemos">Porque Adquirirlo<i class="material-icons left">live_help</i></a></li>
              <li><a href="#NuestrosProductos">SmartDawn<i class="material-icons left">lightbulb_outline</i></a></li>
              <li><a href="#NuestrosMaestros">Acerca de Nosotros<i class="material-icons left">group</i></a></li>
              <li><a href="login.php">Ingresar<i class="material-icons left">person</i></a></li>
            </ul>
            <!-- Boton de Menú -->
            <a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="material-icons">menu</i></a>
          </div>
        </nav>
      </div>
    </header>
    <main>
      <div class="fixed-action-btn">
        <a class="btn-floating btn-large black" href="#nav">
          <i class="large material-icons">arrow_upward</i>
        </a>
      </div>
      <div class="row hide-on-small-only" id="Banners">
        <div class="slider" width="400">
          <ul class="slides">
            <li>
              <img src="image/bienvenidos2.jpg">
              <div class="caption center-align">
                <h3>Bienvenidos</h3>
                <h5 class="light grey-text text-lighten-3">En UPPERtech estamos preparados para automatizar sus días.</h5>
              </div>
            </li>
            <li>
              <img src="image/tecnologia2.png">
              <div class="caption right-align">
                <h4 class="black-text">Estamos en constante evolucion.</h4>
                <h6 class="black-text"> <b>Trabajando para entregarle lo mejor del internet de las cosas.</b> </h6>
              </div>
            </li>
            <li>
              <img src="image/domotica2.jpg">
              <div class="caption left-align">
                <h3></h3>
                <h3 class="light grey-text text-lighten-3"> <b>La domotica más cerca de tí.</b> </h3>
              </div>
            </li>
            <li>
              <img src="image/descargar_app.png" width="500">
              <div class="caption left-align">
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="row" id="QueOfrecemos">
        <div class="center">
          <h4 class="white-text">¿Por qué adquirir SmartDawn?</h4>
        </div>
        <div class="col s12 m6 l6 center">
          <div class="card-panel" style="border-radius: 25px">
            <img src="image/imageA6.jpg" style="border-radius: 25px" width="480" alt="" class="responsive-img">
            <p><!-- start slipsum code -->
              <h4 align="center">Es un dispositivo generico</h4>
              <p align="justify">La verdadera versatibilidad de Smartdawn está en la capacidad de poder utilizarse en muchos dispositivos electronicos del hogar que cuenten con encendido manual. </p>
              <!-- end slipsum code --></p>
          </div>
        </div>
        <div class="col s12 m6 l6 center">
          <div class="card-panel" style="border-radius: 25px">
            <img src="image/wifi.jpeg" alt="" style="border-radius: 25px" width="400" class="responsive-img">
            <p ><!-- start slipsum code -->
              <h4 align="center">Funciona con redes inalambricas</h4>
              <p align="justify">Permite el funcionamiento con redes inalambricas por lo que solo necesita un proveedor de internet en su hogar y deje que SmartDawn haga su trabajo automatizando esos dispositivos que creía anticuados.</p>
              <!-- end slipsum code --></p>
          </div>
        </div>
      </div>
      <div class="row" id="NuestrosProductos">
        <div class="center">
          <h4 class="white-text">SmartDawn es lo nuevo de UPPERtech en articulos domóticos.</h4>
        </div>
      </div>
      <div class="row">
        <div class="col s12 m6 l6"><img src="image/smartdawn.jpg" style="border-radius: 25px" alt=""  class="responsive-img materialboxed hoverable"></div>
        <div class="col s12 m6 l6"><img src="image/smartdawn2.jpg" style="border-radius: 25px" alt="" class="responsive-img materialboxed hide-on-small-only hoverable"></div>
      </div>
      <div class="row" id="NuestrosMaestros">
        <div class="center">
          <h4 class="white-text">Las mentes detras de UPPERtech</h4>
        </div>
        <div class="col s12 m6 l6 center">
          <div class="card-panel" style="background-color: white ; border-radius: 25px">
            <img class="responsive-img circle hoverable" width="300" src="image/kevin2.jpg" alt="">
            <p><!-- start slipsum code -->
              <h4 class="">Kevin Aqueveque Medel</h4>
              <p style="text-align: justify; text-justify: inter-word;">Kevin Aqueveque es el jefe de desarrollo y quien supervisa que los productos se construyan bajo las normas de seguridad necesarias por lo que tambien se enfoca en la funcionalidad de los dispositivos. Es una persona muy autodidacta y muy experimentada en el área de desarrollo de software.</p>
              <!-- end slipsum code --></p>
          </div>
        </div>
        <div class="col s12 m6 l6 center">
          <div class="card-panel" style="background-color: white ; border-radius: 25px">
            <img class="circle responsive-img hoverable" width="300" src="image/chiri.jpg" alt="">
            <p><!-- start slipsum code -->
              <h4 class="" >Christian Díaz Castillo</h4>
              <p style="text-align: justify; text-justify: inter-word;">Christian Díaz es director de proyectos de UPPERtech, es el principal responsable de velar por el cumplimiento de los objetivos, fechas y calidad de estos. Un lider responsable, empático y con basta experiencia en el desarrollo de proyectos como también en uso de metodologías agiles, como Scrum. </p>
              <!-- end slipsum code --></p>
          </div>
        </div>
      </div>
    </main>
    <footer class="page-footer" style="background-color: white">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="black-text">UPPERtech</h5>
            <p class="black-text">Soluciones tecnologicas para el día a día.</p>
            <ul>
              <li><a class="black-text" href="#!"><i class="material-icons"> <img src="image/fb1.png"  width="15" alt=""> </i> Facebook</a></li>
              <li><a class="black-text" href="#!"><i class="material-icons"> <img src="image/ig1.png" width="15" alt=""> </i> Instagram</a></li>
              <li><a class="black-text" href="#!"><i class="material-icons"> <img src="image/yt1.png" width="15" alt=""> </i> Youtube</a></li>
              <li><a class="black-text" href="#!"><i class="material-icons"> <img src="image/location1.png" width="15" alt=""> </i> Av. San Miguel 3496</a></li>
              <li><a class="black-text" href="#!"><i class="material-icons"> <img src="image/telephone.png" width="15" alt=""> </i> +569 12345678</a></li>
            </ul>
          </div>
          <div class="col l6 s12">
            <img src="image/sponsors.jpg" width="400" alt="">
          </div>
        </div>
      </div>
      <div class="black-text footer-copyright">
        <div class="container black-text">
          © 2018 Copyright
          <a class="black-text right" href="#!">Creado por Kevin Aqueveque Medel - Sitio web de proyecto de titulo, sin fines de lucro.</a>
        </div>
      </div>
    </footer>
  </body>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js" ></script>
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
</html>
