<?php

   /*include("conexion.php");*/
    
    $conexion = mysqli_connect("localhost","root","");
    mysqli_select_db($conexion,"proyectonuevo");
    
   
   $codigo_ISO= $_POST['codigo_ISO'];
   $nombre_curso=$_POST['nombre_curso'];
   $dia= $_POST['dia'];
   $horario= $_POST['horario'];
   $salon= $_POST['salon'];
   $valor_costo= $_POST['valor_costo'];


    $insertar="INSERT INTO cursos(codigo_ISO,nombre_curso,dia,horario,salon,valor_curso)  VALUES ('$Codigo_ISO','$nombre_curso','$dia','$horario','$salon','$valor_curso')";
   
    $resultado= mysqli_query($conexion,$insertar);



   if (!$resultado) {
       
        header("location: tablacursos.php");
   	}	else
        {
   		echo " Insercion erronea ";
   	    }
?>