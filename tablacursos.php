<!DOCTYPE html>
<html 
  <head>
       <title>CURSOS</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>   
  <body>
    <div class="container">
        <table class="table table-bordered">
          <thead>
         <tr>
            <th colspan="1"> <a href="indexcursos.php" href="estiloscursos.php">INSERTAR</a></th>
            <th colspan="5">LISTA DE CURSOS</th>
          </tr>
            
          </thead>
          <tbody>
              <tr>

                 <th>codigo_ISO</th> 
                 <th>nombre_curso</th>     
                 <th>dia</th>   
                 <th>horario</th>   
                 <th>salon</th>   
                 <th>valor_curso</th> 
                 <th>modificar</th>   
                 <th>eliminar</th> 


              </tr>

              <?php

              $conexion = mysqli_connect("localhost","root","");
    
               mysqli_select_db($conexion,"proyectonuevo");
                
              $query="SELECT * FROM CURSOS";
              $resultado= mysqli_query($conexion,$query);
              while($row=$resultado->fetch_assoc()){

             ?>
             

              <tr>
               <td><?php echo $row['codigo_ISO']; ?></td>
                <td><?php echo $row['nombre_curso']; ?></td>
                <td><?php echo $row['dia']; ?></td>
                <td><?php echo $row['horario']; ?></td>
                <td><?php echo $row['salon']; ?></td>
                <td><?php echo $row['valor_curso']; ?></td>
                <td><a href="modificarcurso.php?codigo_ISO=<?php echo $row['codigo_ISO']; ?>">modificar</a></td>
                <td><a href="eliminar.php?codigo_ISO=<?php echo $row['codigo_ISO']; ?>">eliminar</a></td>
              </tr>

             <?php

              }

              ?>

          </tbody>
        </table>
      </div>
       
  </body>
</html>