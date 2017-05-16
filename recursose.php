<?php

   /*include("conexion.php");*/
    $conexion = mysqli_connect("localhost","root","");
    mysqli_select_db($conexion,"proyectonuevo");
    
   
    $ID_recurso=$_POST['ID_recurso'];
   $actividad= $_POST['actividad'];
   $costo= $_POST['costo'];


     $insertar="INSERT INTO RECURSOS_EXTERNOS(ID_recurso,actividad,costo) values ('$ID_recurso','$actividad','$costo'";
   
    $resultado= mysqli_query($conexion,$insertar);



   if (!$resultado) {
       
        header("location: tablarecursose.php");
   	}	else
        {
   		echo " Insercion erronea ";
   	    }
?>
       
        
   

   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
  