<?php
 
 function conexion(){

  $conexion=new mysqli("localhost","root","","basesegura");
  if ($conexion->connect_errno) {
    echo "Fallo al conectar :".$conexion->connect_error;
  }

  $conexion->set_charset("utf8");
  
  return $conexion;
}

?>