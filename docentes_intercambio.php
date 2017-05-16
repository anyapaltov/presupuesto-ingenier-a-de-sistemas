<?php

   /*include("conexionrecreacion.php");*/
    $conexion = mysqli_connect("localhost","root","");
    mysqli_select_db($conexion,"proyectonuevo");
    

   $nombre=$_POST['nombre'];
   $pais_origen= $_POST['pais_origen'];

   

   $insertar="INSERT INTO DOCENTES_INTERCAMBIO(nombre,pais_origen) values ('$nombre','$pais_origen'";
   $resultado= mysqli_query($conexion,$insertar);

   if (!$resultado) {
       
      header("location: tabladocentes_intercambio.php");
   	}

   	else
   	 {
   	
   		echo " Insercion erronea ";

   	}
?>