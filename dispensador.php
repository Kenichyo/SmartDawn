<?php 
include 'header.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Dispensador</title>
 	    <script src="js/jquery-1.12.3.min.js" charset="utf-8"></script>

 </head>
 <style type="text/css" media="screen">
 	body {
    background-image: url("image/image3.jpg");
}
 </style>
 <body>
 	<div class="container">
 		<div class="row">
 			<div class="col-sm-4" align="center">
 				<form action="" method="POST">
 					<p class="text"> <b>Seleccione las horas de comida: </b></p>  <br>
 					<div class="form-control">
 						Comida 1: <br> <input type="number" id="hora1" name="hora1" min="0" max="23">:<input type="number" id="minuto1" min="0" max="59" name="minuto1">
						<br> <br>
						<input type="number" class="form-control" id="cantidad1" min="100" max="900" name="cantidad1" placeholder="Eliga la cantidad en gramos">	
 					</div>
					<br>
					<div class="form-control">
 						Comida 2: <br> <input type="number" id="hora2" name="hora2" min="0" max="23">:<input type="number" id="minuto2" min="0" max="59" name="minuto2">
						<br> <br>
						<input type="number" id="cantidad2" min="100" max="900" class="form-control" name="cantidad2" placeholder="Eliga la cantidad en gramos">	
 					</div>
					<br>
					<input type="submit" class="btn btn-primary" name="encenderB" id="encenderB" value="Encender">
					<br>
					<span id="result"></span>
				</form>
 			</div>
 			<div class="col-sm-8">
 				<img src="image/imageB1.jpg">
 			</div>
 		</div>
 	</div>
 
 </body>
 </html>
 <script type="text/javascript">
   $(document).ready(function(){
    $('#encenderB').click(function(){
      var hora1 = $('#hora1').val();
      var minuto1 = $('#minuto1').val();
      var cantidad1 = $('#cantidad1').val();
      var hora2 = $('#hora2').val();
      var minuto2 = $('#minuto2').val();
      var cantidad2 = $('#cantidad2').val();
      if ($.trim(hora1).length > 0 && $.trim(minuto1).length > 0 && $.trim(cantidad1).length > 0 && $.trim(hora2).length > 0 && $.trim(minuto2).length > 0 && $.trim(cantidad2).length > 0){
        $.ajax({
          url:'dispensadorme.php',
          method:"POST",
          data:{hora1:hora1, minuto1:minuto1, cantidad1:cantidad1, hora2:hora2, minuto2:minuto2, cantidad2:cantidad2},
          cache:false,
          beforeSend:function(){
            $('#encenderB').val("Comprobando información...");
          },
          success:function(data){
            $('#encenderB').val("Encender");
            if(data){
              $("#result").html(data);
            };

          }
        });
      };
    });
  });
 </script>