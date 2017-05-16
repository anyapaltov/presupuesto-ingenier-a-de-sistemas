<?php

   /*include("conexionestudiantes.php");*/
    $conexion = mysqli_connect("localhost","root","");
    mysqli_select_db($conexion,"proyectonuevo");

   $codigo=$_POST['codigo'];
   $codigo_ISO= $_POST['codigo_ISO'];
   

   $insertar="INSERT INTO CURSOS_DOCENTES(codigo,codigo_ISO,) 
   values ('$codigo','$codigo_ISO'";

      $resultado= mysqli_query($conexion,$insertar);

   if (!$resultado) {
       
       header("location: tablacursosdocentes.php");
   	}

   	else
    
   	 {
   	
   		echo "Insercion erronea";

   	}
?>

