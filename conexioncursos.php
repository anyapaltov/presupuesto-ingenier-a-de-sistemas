<?php
  
  $conexion = new mysqli("localhost","root","","proyectonuevo" );

  if ($conexion) {
  	echo "Dato eliminado";
  } 
  else {
    echo "conexion fallida";
}
  	
?>