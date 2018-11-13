<?php
include 'header.php';


 ?>
 <!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8">
    <title>Adaptador</title>
 </head>
 <style type="text/css">
 body {
   background-image: url("image/imageA4.jpg");
 }

 main{
   padding-right: 50px;
   padding-bottom: 2px;
   padding-left: 50px;
 }

 .quantity {
   position: relative;
 }

 input[type=number]::-webkit-inner-spin-button,
 input[type=number]::-webkit-outer-spin-button
 {
   -webkit-appearance: none;
   margin: 0;
 }

 input[type=number]
 {
   -moz-appearance: textfield;
 }

 .quantity input {
   width: 45px;
   height: 42px;
   line-height: 1.65;
   float: left;
   display: block;
   padding: 0;
   margin: 0;
   padding-left: 20px;
   border: 1px solid #eee;
 }

 .quantity input:focus {
   outline: 0;
 }

 .quantity-nav {
   float: left;
   position: relative;
   height: 42px;
 }

 .quantity-button {
   position: relative;
   cursor: pointer;
   border-left: 1px solid #eee;
   width: 20px;
   text-align: center;
   color: #333;
   font-size: 13px;
   font-family: "Trebuchet MS", Helvetica, sans-serif !important;
   line-height: 1.7;
   -webkit-transform: translateX(-100%);
   transform: translateX(-100%);
   -webkit-user-select: none;
   -moz-user-select: none;
   -ms-user-select: none;
   -o-user-select: none;
   user-select: none;
 }

 .quantity-button.quantity-up {
   position: absolute;
   height: 50%;
   top: 0;
   border-bottom: 1px solid #eee;
 }

 .quantity-button.quantity-down {
   position: absolute;
   bottom: -1px;
   height: 50%;
 }
 .btn:focus{
  background-color: #4dd0e1
  }
 </style>
 <body>
   <main>
     <div class="row">
       <form class="col s12 m12 l5" method="post">
         <br>
         <div class="row card-panel hoverable" style="border-radius: 25px">
           <select id="select_adaptador" class="" name="">
             <option value="0">Seleccione un adaptador</option>
             <?php while ($data7 = mysqli_fetch_array($res7)):;?>
               <option value="<?php echo $data7[0]; ?>"><?php echo $data7[2]; ?></option>
             <?php endwhile; ?>
           </select>
         </div>
         <p id="sn12">

         </p>
         <div class="row card-panel hoverable" style="border-radius: 25px">
           <div class="input-field col s4 l4 quantity">
             <i class="material-icons prefix right">looks_one add_alarm</i>
           </div>
           <div class="input-field col l4 hide-on-small-only" hidden>
             <input type="text" name="" id="sn11" style="border-radius: 25px" value="">
           </div>
           <div class="input-field col s4 l4 quantity">
             <input type="number" id="hora1" min="0" max="23" step="1" value="" >
           </div>
           <div class="input-field col s4 l4 quantity">
             <input type="number" id="minuto1" min="0" max="59" step="1" value="">
           </div>
         </div>
         <div class="row card-panel hoverable" style="border-radius: 25px">
           <div class="input-field col s4 l4 quantity">
             <i class="material-icons prefix right">looks_two add_alarm</i>
           </div>
           <div class="input-field col s4 l4 quantity">
             <input type="number" id="hora2" min="0" max="23" step="1" value="">
           </div>
           <div class="input-field col s4 l4 quantity">
             <input type="number" id="minuto2" min="0" max="59" step="1" value="">
           </div>
         </div>
         <div class="row card-panel hoverable" style="border-radius: 25px">
           <div class="input-field col s4 l4 quantity">
             <i class="material-icons prefix right">looks_3 add_alarm</i>
           </div>
           <div class="input-field col s4 l4 quantity">
             <input type="number" id="hora3" min="0" max="23" step="1" value="">
           </div>
           <div class="input-field col s4 l4 quantity">
             <input type="number" id="minuto3" min="0" max="59" step="1" value="">
           </div>
         </div>

         <div class="row">
           <div class="col s12 m6 l6 offset-m3 offset-l3 center">
             <input type="button" id="encenderA" value="Actualizar Horarios" style="border-radius: 25px" class="btn green botoncito hoverable">
           </div>
         </div>
       </form>
       <div class="col s12 l7 hide-on-med-and-down" id="Banners">
         <br> <br>
         <div class="slider" >
           <ul class="slides hoverable slideres" style="border-radius: 25px">
             <li>
               <img src="image/familia.jpg">
               <div class="caption center-align">
                 <h4 class="blue-text">¡Optimiza tu tiempo!</h4>
                 <h5 class="blue-text ">Disfruta con los tuyos al automatizar las cosas del hogar.</h5>

               </div>
             </li>
             <li>
               <img src="image/enjoy.jpg" class="responsive-image">
               <div class="caption right-align" style="padding-top: 200px">
                 <h5 class="blue-text">Aquí, Algunos consejos para comenzar el día.</h5>
               </div>
             </li>
             <li>
               <img src="image/cafeina.jpg" class="responsive-image">
               <div class="caption center-align">
               </div>
             </li>
             <li>
               <img src="image/deporte.jpg" class="responsive-image">
               <div class="caption center-align">
                 <h5 class="white-text">El deporte es esencial para tener una buena salud y más animo por las mañanas.</h5>
               </div>
             </li>
             <li>
               <img src="image/felicidad.jpg" class="responsive-image">
               <div class="caption center-align">
                 <h5 class="white-text">¡Que tengas un buen día, no olvides sonreir!</h5>
               </div>
             </li>
           </ul>
         </div>
       </div>
     </div>
   </main>
 </body>
 </html>
 <script type="text/javascript">
 $(document).ready(function(){
   $("#select_adaptador").change(function() {
     var valor = $(this).val();
     document.getElementById("sn11").value = valor;
     var id = $(this).find(":selected").val();
     var dataString = 'empid='+ id;
     $.ajax({
       url: 'getAdaptador.php',
       dataType: "json",
       data: dataString,
       cache: false,
       success: function(adaptadorData) {
         if(adaptadorData) {
           $("#heading").show();
           $("#no_records").hide();
           var objeto = Object.values(adaptadorData);
           console.log(objeto);
           document.getElementById("hora1").value = objeto[0];
           document.getElementById("minuto1").value = objeto[1];
           document.getElementById("hora2").value = objeto[2];
           document.getElementById("minuto2").value = objeto[3];
           document.getElementById("hora3").value = objeto[4];
           document.getElementById("minuto3").value = objeto[5];
           $("#records").show();
         } else {
           $("#heading").hide();
           $("#records").hide();
           $("#no_records").show();
         }
       }
     });
   });
   $(".botoncito").click(function(){
     var sn = $('#sn11').val();
     console.log(sn);
     var hora1 = $('#hora1').val();
     var minuto1 = $('#minuto1').val();
     var hora2 = $('#hora2').val();
     var minuto2 = $('#minuto2').val();
     var hora3 = $('#hora3').val();
     var minuto3 = $('#minuto3').val();
     if (sn === "" || hora1 === "" || minuto1 === "" || hora2 === "" || minuto2 === "" || hora3 === "" || minuto3 === "") {
       Materialize.toast("Seleccione un adaptador e ingrese las horas.", 2000, 'rounded red');
     }
     else if (hora1 >= 24 || minuto1 >= 60 || hora2 >= 24 || minuto2 >= 60 || hora3 >= 24 || minuto3 >= 60){
       Materialize.toast("Las horas y minutos deben ser validos.", 2000, 'rounded red');
     }else{
         $.ajax({
           url:'adaptadorme.php',
           method:"POST",
           data:{sn:sn, hora1:hora1, minuto1:minuto1, hora2:hora2, minuto2:minuto2, hora3:hora3, minuto3:minuto3},
           success:function(data){
             if(data){
               Materialize.toast(data, 2000, 'rounded green');
               //location.reload();
             };
           }
         });
     }
   });
 });
</script>
