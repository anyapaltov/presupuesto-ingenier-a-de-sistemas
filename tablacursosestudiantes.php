<!DOCTYPE html>
<html 
  <head>
       <title>CURSOS ESTUDIANTES</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>   
  <body>
    <div class="container">
        <table class="table table-bordered">
          <thead>
         <tr>
            <th colspan="1"> <a href="indexcursoestudiante.php" href="estiloscursos.php">INSERTAR</a></th>
            <th colspan="5">LISTA DE CURSOS PARA ESTUDIANTES</th>
          </tr>
            
          </thead>
          <tbody>
              <tr>

                 <td>codigo</td>   
                 <td>codigo_ISO</td>   
                 <td>modificar</td>   
                 <td>eliminar</td> 


              </tr>

              <?php

              $conexion = mysqli_connect("localhost","root","");
    
               mysqli_select_db($conexion,"proyectonuevo");
                
              $query="SELECT * FROM cursos_estudiantes";
              $resultado= mysqli_query($conexion,$query);
              while($row=$resultado->fetch_assoc()){

             ?>

              <tr>
               <td><?php echo $row['codigo']; ?></td>
                <td><?php echo $row['codigo_ISO']; ?></td>
               
                <td><a href="#">modificar</a></td>
                <td><a href="#">eliminar</a></td>
              </tr>

             <?php

              }

              ?>

          </tbody>
        </table>
      </div>
       
  </body>
</html>



















