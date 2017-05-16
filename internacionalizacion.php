<?php

   /*include("conexion.php");*/
    $conexion = mysqli_connect("localhost","root","");
    mysqli_select_db($conexion,"proyectonuevo");
    
   
   $ID_internacionalizacion= $_POST['ID_internacionalizacion'];
   $ID_pais= $_POST['ID_pais'];
   $pais= $_POST['pais'];
   $tipo_convenio= $_POST['tipo_convenio'];
   $vigencia= $_POST['vigencia'];
   $costo= $_POST['costo'];


    $insertar="INSERT INTO CONVENIOS_INTERNACIONALES (ID_internacionalizacion,ID_pais,pais,tipo_convenio,vigencia,costo)  VALUES('$ID_internacionalizacion','$nombre_curso','$ID_pais','$pais','$tipo_convenio','$costo')";
   
    $resultado= mysqli_query($conexion,$insertar);



   if (!$resultado) {
       
        header("location: tablainternacionalizacion.php");
   	}	else
        {
   		echo " Insercion erronea ";
   	    }
?>
       
        