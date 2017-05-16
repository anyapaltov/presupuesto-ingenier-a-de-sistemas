<?php
   include("conexion.php");

   $conexion = mysqli_connect("localhost","root","");
    mysqli_select_db($conexion,"proyectonuevo");
    
   $codigo_ISO=$_REQUEST['codigo_ISO'];

   $codigo_ISO= $_POST['codigo_ISO'];
   $nombre_curso=$_POST['nombre_curso'];
   $dia= $_POST['dia'];
   $horario= $_POST['horario'];
   $salon= $_POST['salon'];
   $valor_costo= $_POST['valor_costo'];


    $actualizar="UPDATE  cursos SET codigo_ISO ='$codigo_ISO',nombre_curso='$nombre_curso',dia='$dia',horario='$horario',salon='$salon'=,valor_curso='$valor_curso' WHERE codigo_ISO='$codigo_ISO'";  
   
    $resultado= mysqli_query($conexion,$actualizar);



   if (!$resultado) {
       
        header("location: tablacursos.php");
   	}	else
        {
   		echo " Insercion erronea ";
   	    }
?>
       
        