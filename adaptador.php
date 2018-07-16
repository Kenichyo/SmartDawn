<?php 
include 'header.php';



 ?>
 <!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8">
    <title>Adaptador</title>
    
    <script src="js/jquery-1.12.3.min.js" charset="utf-8"></script>
 </head>
 <style type="text/css" media="screen">
   body {
    background-image: url("image/imageA3.jpg");
   }
   #jumbotron{
    margin-bottom: 0px;
    opacity: 0.5;
    width: 100%;
    height: 100%;
    background-size: cover;
  }
   </style>
 <body>
 	<div class="container">
 		<div class="row">
 			<div class="col-sm-3">
 				
 			</div>
 			<div class="col-sm-6 jumbotron" id="jumbotron" align="center">
 				<form method="POST">
  					<p class="text"> <b>Seleccione la hora de encendido: </b></p>  <br>
  						Cafe n1: <input type="number" class="btn btn-primary" name="hora1" id="hora1" min="0" max="23">:<input type="number" min="0" max="59" class="btn btn-primary" id="minuto1" name="minuto">
              <br> <br>
              Cafe n2: <input type="number" class="btn btn-primary" name="hora" id="hora2" min="0" max="23">:<input type="number" min="0" max="59" class="btn btn-primary" name="minuto" id="minuto2"> 
              <br> <br>
              Cafe n3: <input type="number" class="btn btn-primary" name="hora" id="hora3" min="0" max="23">:<input type="number" min="0" max="59" class="btn btn-primary" name="minuto" id="minuto3">
					<br>
					<br>
					<input type="submit" class="btn btn-primary" name="encenderA" id="encenderA" value="Encender">
          <br> <br>
          <span id="result"></span>
				</form>
 			</div>
 			<div class="col-sm-3">
 				
 			</div>
 		</div>
 	</div>
 
 </body>
 </html>

 <script type="text/javascript">
   $(document).ready(function(){
    $('#encenderA').click(function(){
      var hora1 = $('#hora1').val();
      var minuto1 = $('#minuto1').val();
      var hora2 = $('#hora2').val();
      var minuto2 = $('#minuto2').val();
      var hora3 = $('#hora3').val();
      var minuto3 = $('#minuto3').val();
      if ($.trim(hora1).length > 0 && $.trim(minuto1).length > 0 && $.trim(hora2).length > 0 && $.trim(minuto2).length > 0 && $.trim(hora3).length > 0 && $.trim(minuto3).length > 0){
        $.ajax({
          url:'adaptadorme.php',
          method:"POST",
          data:{hora1:hora1, minuto1:minuto1, hora2:hora2, minuto2:minuto2, hora3:hora3, minuto3:minuto3},
          cache:false,
          beforeSend:function(){
            $('#encenderA').val("Comprobando información...");
          },
          success:function(data){
            $('#encenderA').val("Encender");
            if(data){
              $("#result").html(data);
            };

          }
        });
      };
    });
  });
 </script>