<!DOCTYPE html>
<html lang="es">
<body background="cursos.jpg" style="background-repeat: no-repeat;background-size: cover;" >

          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <head>
        <title>CURSOS</title>
        <meta charset="utf-8">
     <meta name="viewport" content="width=devide-width, user-scalable=no, initial-scal=1, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="" >
    </head>
<div class="container"> 
    <div class="page-header">
        <h1 style="text-align: center; color: #666;">MODIFICAR</h1>
</div> 
<div class="col-xs-12 col-md-4 col-md-offset-4">
     <div class="panel panel-default">
  <div class="panel-body">
  
              <?php
              
              /*include("conexion.php");*/
               $codigo_ISO=$_REQUEST['codigo_ISO'];
        
              $conexion = mysqli_connect("localhost","root","");
    
               mysqli_select_db($conexion,"proyectonuevo");
                
              $query="SELECT * FROM CURSOS WHERE codigo_ISO ='$codigo_ISO'";
              $resultado= mysqli_query($conexion,$query);
              $row=$resultado->fetch_assoc();

             ?>
   
    <form action="modificarproceso.php?codigo_ISO=<?php echo $row['codigo_ISO']; ?>" method="POST">
             
             
             
              <input type="text" class="form-control" REQUIRED name="codigo_ISO" placeholder="codigo..." 
              value="<?php echo $row['codigo_ISO']; ?>" /><br/><br/>
              <input type="text" class="form-control" REQUIRED name="nombre_curso" placeholder="nombre..."
               value="<?php echo $row['nombre_curso']; ?>"/><br/><br/>
              <input type="text" class="form-control" REQUIRED name="dia" placeholder="Dia..." 
              value="<?php echo $row['dia'];?>"/><br/><br/>
              <input type="text" class="form-control" REQUIRED name="horario" placeholder="Horario..." 
              value="<?php echo $row['horario']; ?>"/><br/><br/>
              <input type="text" class="form-control" REQUIRED name="salon" placeholder="Salon..." 
              value="<?php echo $row['salon']; ?>" /><br/><br/>
               <input type="text" class="form-control" REQUIRED name="valor_curso" placeholder="valor..." 
               value="<?php echo $row['valor_curso']; ?>"/><br/><br/>

              <input type="submit" class="btn btn-primary" value="actualizar" /><br/><br/>   
       
       
         </form>
  </div>
</div>
      
    </div>
</div> 
    </body>
</html>
        