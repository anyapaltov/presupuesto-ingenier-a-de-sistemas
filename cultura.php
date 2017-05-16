<?php

   /*include("conexioncultura.php");*/
   
  $conexion = mysqli_connect("localhost","root","");
  mysqli_select_db($conexion,"proyectonuevo");

   $ID_cultura=$_POST['ID_cultura'];
   $actividad= $_POST['actividad'];
   $costo= $_POST['costo'];
   

   $insertar="INSERT INTO CULTURA(ID_cultura,actividad,costo) values ('$ID_cultura','$actividad','$costo'";
   $resultado= mysqli_query($conexion,$insertar);

   if (!$resultado) {
       
      header("location: tablacultura.php");
   	}

   	else
   	 {
   	
   		echo " Insercion erronea ";

   	}
?>

