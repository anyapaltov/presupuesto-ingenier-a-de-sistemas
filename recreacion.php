<?php

   /*include("conexionrecreacion.php");*/
   $conexion = mysqli_connect("localhost","root","");
    mysqli_select_db($conexion,"proyectonuevo");
    

   $ID_recreacion=$_POST['ID_recreacion'];
   $actividad= $_POST['actividad'];
   $costo= $_POST['costo'];
   

   $insertar="INSERT INTO RECREACION_ARTISTICA(ID_recreacion,actividad,costo) values ('$ID_recreacion','$actividad','$costo'";
   $resultado= mysqli_query($conexion,$insertar);

   if (!$resultado) {
       
      header("location: tablarecreacion.php");
   	}

   	else
   	 {
   	
   		echo " Insercion erronea ";

   	}
?>