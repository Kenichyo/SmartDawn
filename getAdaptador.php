<?php
include("conexion.php");
if($_REQUEST['empid']) {
  $sql = "SELECT hora1, minuto1, hora2, minuto2, hora3, minuto3 FROM adaptador WHERE sn='".$_REQUEST['empid']."'";
  $resultset = mysqli_query($connect, $sql) or die("database error:". mysqli_error($connect));
  $data = array();
  while( $rows = mysqli_fetch_assoc($resultset) ) {
    $data = $rows;
  }
  echo json_encode($data);
  } else {
    echo 0;
  }
?>
