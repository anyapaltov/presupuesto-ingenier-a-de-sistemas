<?php

   /*include("conexion.php");*/
    $conexion = mysqli_connect("localhost","root","");
    mysqli_select_db($conexion,"proyectonuevo");
    
   
   $cedula= $_POST['cedula'];
   $nombre=$_POST['nombre'];
   $apellido= $_POST['apellido'];
   $correo= $_POST['correo'];
   $codigo= $_POST['codigo'];
   $salario= $_POST['salario'];


    $insertar="INSERT INTO DIRECTIVOS(cedula,nombre,apellido,correo,codigo,salario)  VALUES('$cedula','$nombre','$apellido','$correo','$codigo','~$salario')";
   
    $resultado= mysqli_query($conexion,$insertar);



   if (!$resultado) {
       
        header("location: tabladirectivos.php");
   	}	else
        {
   		echo " Insercion erronea ";
   	    }
?>
       