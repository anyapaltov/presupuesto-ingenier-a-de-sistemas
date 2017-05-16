<?php

$cedula=$_POST['cedula'];
$codigo=$_POST['codigo'];

//conecta Base de datos
$conexion=mysqli_connect("localhost","root","","proyectonuevo");
$consulta="SELECT * FROM usuarios WHERE cedula='$cedula' and codigo='$codigo'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);



if ($filas>0) {
    header("location:menu.html");    
}
else {
    echo ("error en la autentificacion");
}
mysqli_free_result($resultado);
mysqli_close($conexion);