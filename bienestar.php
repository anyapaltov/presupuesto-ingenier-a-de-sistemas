<?php

   /*include("conexioncultura.php")*/

    $conexion = mysqli_connect("localhost","root","");
    mysqli_select_db($conexion,"proyectonuevo");

   $ID_bienestar=$_POST['ID_bienestar'];
   $actividad= $_POST['actividad'];
   $costo= $_POST['costo'];
   

   $insertar="INSERT INTO BIENESTAR ID_bienestar,actividad,costo values '$ID_bienestar','$actividad','$costo'";
   $resultado= $conexion->query($query);

   if (!$resultado) {
       
      header("location: tablabienestar.php");
   	}

   	else
   	 {
   	
   		echo " Insercion erronea ";

   	}
?>