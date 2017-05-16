<?php
   include("conexioncursos.php");
   
    /*$conexion = mysqli_connect("localhost","root","");
    mysqli_select_db($conexion,"proyectonuevo");*/

    
   $codigo_ISO=$_REQUEST['codigo_ISO'];
   
   


    $eliminar="DELETE  FROM cursos WHERE codigo_ISO='$codigo_ISO'";  
   
    $resultado= mysqli_query($conexion,$eliminar);



   if (!$resultado) {
       
        header("location: tablacursos.php");
    } else
        {
      echo " ";
        }
?>