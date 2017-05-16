<?php
  
  $conexion = new mysqli("localhost","root","","proyectonuevo" );

  if ($conexion) {
  	echo "conexion exitosa";
  } 
  else {
    echo "conexion fallida";
}
  	
?>
