<?php

   /*include("conexionestudiantes.php");*/
    $conexion = mysqli_connect("localhost","root","");
    mysqli_select_db($conexion,"proyectonuevo");

   $cedula=$_POST['cedula'];
   $nombre= $_POST['nombre'];
   $apellido= $_POST['apellido'];
   $correo= $_POST['correo'];
   $codigo= $_POST['codigo'];
   $valor_matricula= $_POST['valor_matricula'];

   $insertar="INSERT INTO ESTUDIANTES(cedula,nombre,apellido,correo,codigo,valor_matricula) 
   values ('$cedula','$nombre','$apellido','$correo','$codigo','$valor_matricula'";

      $resultado= mysqli_query($conexion,$insertar);

   if (!$resultado) {
       
       header("location: tablaestudiantes.php");
   	}

   	else
    
   	 {
   	
   		echo "Insercion erronea";

   	}
?>