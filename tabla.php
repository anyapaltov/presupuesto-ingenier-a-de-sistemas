<!DOCTYPE html>
<html 
  <head>
       <title>CURSOS</title>
  </head>   
  <body>
      <center>
        <table border="3">
          <thead>
         <tr>
            <th colspan="1"> <a href="cursosindex.php" href="estiloscursos.php">Nuevo</a></th>
            <th colspan="5">LISTA DE CURSOS</th>
          </tr>
            
          </thead>
          <tbody>
              <tr>

                 <td>Nombre_curso</td>   
                 <td>Codigo_ISO</td>   
                 <td>Dia</td>   
                 <td>Horario</td>   
                 <td>Salon</td>   
                 <td>modificar</td>   
                 <td>eliminar</td> 


              </tr>

              <?php

              include("conexion.php");

              $query="SELECT * FROM CURSOS";
              $resultado= $conexion->query($query);
              while($row=$resultado->fetch_assoc()){

             ?>

              <tr>
                <td><?php echo $row['Nombre_curso']; ?></td>
                <td><?php echo $row['Codigo_ISO']; ?></td>
                <td><?php echo $row['Dia']; ?></td>
                <td><?php echo $row['Horario']; ?></td>
                <td><?php echo $row['Salon']; ?></td>
                <td><a href="modificarcurso.php? Codigo_ISO=<?php echo $row['Codigo_ISO']; ?>">modificar</a></td>
                <td><a href="#">eliminar</a></td>
              </tr>

             <?php

              }

              ?>

          </tbody>
        </table>
       </center>
       
  </body>
</html>