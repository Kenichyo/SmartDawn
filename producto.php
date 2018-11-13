<?php

include "header.php";

//function llenar_producto($connect)
//{
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Guarda</title>
  </head>
  <body style="background-image: url('image/image12.jpg');" >
    <br>
    <main>
      <div class="row">
        <div id="div" class="row">
          <div class="input-field card-panel col s12 l8 offset-l2 hoverable" style="border-radius: 25px">
            <div class="col s6">
              <h4>Listado de productos</h4>
            </div>
            <div class="col s4 offset-s2 center" style="padding-top: 20px;">
              <button type="button" id="modal_guardar" data-target="modal1" class="btn green modal-trigger hoverable" style="border-radius: 25px" name="button">Agregar Producto</button>
            </div>
            <table class="" id="taba">
              <tr>
                <th>Número de Serie</th>
                <th>Nombre</th>
                <th>Editar</th>
                <th>Eliminar</th>
              </tr>
              <?php
              echo $data; ?>
            </table>
          </div>
        </div>
        <!-- Modal Trigger -->


        <!-- Modal 1 - Registrar -->
        <div id="modal1" style="border-radius: 25px" class="modal col s12 m12 l6 offset-l3">
          <div class="row">
            <div id="card-panel" class="input-field col s12 m12 l12">
              <i class="material-icons prefix">account_box</i>
              <input id="sn_m1" type="text" value="" class="validate">
              <label for="sn_m1">Numero Serial</label>
            </div>
          </div>
          <div class="row">
            <div id="card-panel" class="input-field col s12 m12 l12">
              <i class="material-icons prefix">assignment</i>
              <input id="nombre_snm1" type="text" value="" class="validate">
              <label for="nombre_snm1">Nombre Adaptador</label>
            </div>
          </div>
          <div class="row center">
            <div class="col s12 m4 l4 offset-m1 offset-l1">
              <input type="button" onclick="" name="login" id="guardar_producto" style="border-radius: 25px" value="Registrar" class="btn green hoverable">
            </div>
            <div class="col s12 m4 l4 offset-m2 offset-l2">
              <input type="button" onclick="" id="cancelar_modal" style="border-radius: 25px" value="Cancelar" class="btn blue close hoverable">
            </div>
          </div>
        </div>
        <!--Modal 2 - Editar -->
        <div id="modal2" style="border-radius: 25px" class="modal col s12 m12 l6 offset-l3">
          <div class="row">
            <div id="card-panel" class="input-field col s12 m12 l12">
              <i class="material-icons prefix">account_box</i>
              <label>Numero Serial</label> <br>
              <input id="sn_m2" type="text" value="" disabled class="">
            </div>
          </div>
          <div class="row">
            <div id="card-panel" class="input-field col s12 m12 l12">
              <i class="material-icons prefix">assignment</i>
              <label>Nombre Adaptador</label> <br>
              <input id="nombre_snmd2" type="text" value="" class="validate">
            </div>
          </div>
          <div class="row center">
            <div class="col s12 m4 l4 offset-m1 offset-l1">
              <input type="button" id="editar_modal" style="border-radius: 25px" value="Editar" class="btn green hoverable">
            </div>
            <div class="col s12 m4 l4 offset-m2 offset-l2">
              <input type="button" onclick="" id="cancelar_modal" style="border-radius: 25px" value="Cancelar" class="btn blue close hoverable">
            </div>
          </div>
        </div>
        <!--Modal 3 - Eliminar-->
        <div id="modal3" style="border-radius: 25px" class="modal col s12 m12 l6 offset-l3">
          <div class="row center">
            <h5>¿Está seguro que desea eliminar este dispositivo?</h5>
            <p>*Si lo hace deberá agregarlo nuevamente.</p>
            <input id="sn_md3" type="text" value="" hidden class="validate">
            <br>
            <div class="col s12 m4 l4 offset-m1 offset-l1">
              <input type="button" id="eliminar_modal" style="border-radius: 25px" value="Aceptar" class="btn green hoverable">
            </div>
            <div class="col s12 m4 l4 offset-m2 offset-l2">
              <input type="button" onclick="" id="cancelar_modal" style="border-radius: 25px" value="Cancelar" class="btn blue close hoverable">
            </div>
          </div>
        </div>
        <p id="result"></p>
      </div>
    </main>
    <footer>
    </footer>
  </body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
    $(".modal-2").click(function() {
      var sn_modal = $(this).val();
      document.getElementById('sn_m2').value = sn_modal;
      var dataString = 'empid='+ sn_modal;
      $.ajax({
        url: 'getProductos.php',
        dataType: "json",
        data: dataString,
        cache: false,
        success: function(adaptadorData) {
          if(adaptadorData) {
            $("#heading").show();
            $("#no_records").hide();
            var objeto = Object.values(adaptadorData);
            document.getElementById("nombre_snmd2").value = objeto[1];
            $("#records").show();
          } else {
            $("#heading").hide();
            $("#records").hide();
            $("#no_records").show();
          }
        }
      });
    });
    $('.modal-3').click(function () {
      var sn3_modal = $(this).val();
      document.getElementById('sn_md3').value = sn3_modal;
      if (sn3_modal === "") {
        Materialize.toast('Debe seleccionar un dispositivo', 2000, 'red rounded');
      }
    });
    $('.close').click(function () {
      $('#modal3').modal('close');
      $('#modal1').modal('close');
      $('#modal2').modal('close');
    });
    $('#eliminar_modal').click(function functionName() {
      var sn_md3 = $('#sn_md3').val();
      if (sn_md3 === "") {
        Materialize.toast('Debe seleccionar un dispositivo', 2000, 'red rounded');
      }else {
        $.ajax({
          url: 'iniciame.php',
          method: 'POST',
          data: {sn_md3:sn_md3},
          success:function (data) {
            if (data.length > 0) {
              Materialize.toast('Se ha eliminado correctamente.', 2000, 'green rounded');
              $('#modal3').modal('close');
              location.reload('taba');
            }else {
              Materialize.toast('No se ha podido eliminar el adaptador.', 2000, 'red rounded');
            }
          }
        });
      }
    });
    $('#editar_modal').click(function () {
      var sn_editar = $("#sn_m2").val();
      var nombre_editar = $("#nombre_snmd2").val();
      if (sn_editar === "" || nombre_editar === "") {
        Materialize.toast("No puede dejar campos vacios.", 2000, 'red rounded');
      }else{
        $.ajax({
          url: 'iniciame.php',
          method: 'POST',
          data: {sn_editar: sn_editar, nombre_editar:nombre_editar},
          success: function(data) {
            if(data == 'Se ha actualizado el nombre correctamente.'){
              Materialize.toast(data, 2000, 'green rounded');
              location.reload('#taba');
            }else {
              Materialize.toast('No se ha podido cambiar el nombre a su producto.', 2000, 'red rounded');
            }
          }
        });
      }
    });
    $('#guardar_producto').click(function(){
      var sn = $('#sn_m1').val();
      var nombre_sn = $('#nombre_snm1').val();
      if (sn === "" || nombre_sn === "") {
        Materialize.toast("Debe Ingresar un Numero de Serie.", 2000, 'red rounded');
      }else if(sn.length > 8 || sn.length < 8) {
        Materialize.toast("Los Numeros de Serie son de 8 digitos.", 2000, 'red rounded');
      }else {
        $.ajax({
          url:'iniciame.php',
          method:"POST",
          data:{sn:sn, nombre_sn:nombre_sn},
          cache:false,
          success:function(data5){
            $('#guardar_producto').val("Registrar");
            if(data5 == 'Se ha registrado el adaptador correctamente.'){
              Materialize.toast(data5, 2000, 'green rounded');
              $("#sn_m1").val("");
              $("#nombre_snm1").val("");
              location.reload('#taba');
            }else {
              Materialize.toast('No se ha podido registrar el dispositivo.', 2000, 'red rounded');
            }
          }
        });


      };
    });
  });
</script>
