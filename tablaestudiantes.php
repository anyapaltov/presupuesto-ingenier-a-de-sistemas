<!DOCTYPE html>
<html 
  <head>
       <title>ESTUDIANTES</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>   
  <body>
    <div class="container">
        <table class="table table-bordered">
          <thead>
         <tr>
            <th colspan="1"> <a href="indexestudiantes.php" href="estiloscursos.php">INSERTAR</a></th>
            <th colspan="5">LISTA DE ESTUDIANTES</th>
          </tr>
            
          </thead>
          <tbody>
              <tr>

                 <td>cedula</td>   
                 <td>nombre</td>   
                 <td>apellido</td>   
                 <td>correo</td>   
                 <td>codigo</td> 
                 <td>valor_matricula</td>   
                 <td>modificar</td>   
                 <td>eliminar</td> 


              </tr>

              <?php

              $conexion = mysqli_connect("localhost","root","");
    
               mysqli_select_db($conexion,"proyectonuevo");
                
              $query="SELECT * FROM ESTUDIANTES";
              $resultado= mysqli_query($conexion,$query);
              while($row=$resultado->fetch_assoc()){

             ?>

              <tr>
                 <td><?php echo $row['cedula']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['apellido']; ?></td>
                <td><?php echo $row['correo']; ?></td>
                <td><?php echo $row['codigo']; ?></td>
                <td><?php echo $row['valor_matricula']; ?></td>
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
































































