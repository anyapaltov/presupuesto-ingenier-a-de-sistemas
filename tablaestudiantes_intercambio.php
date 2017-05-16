<!DOCTYPE html>
<html 
  <head>
       <title>CURSOS ESTUDIANTES INTERCAMBIO</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>   
  <body>
    <div class="container">
        <table class="table table-bordered">
          <thead>
         <tr>
            <th colspan="1"> <a href="indexestudiantes_intercambio.php" href="">INSERTAR</a></th>
            <th colspan="5">LISTA ESTUDIANTES_INTERCAMBIO</th>
          </tr>
            
          </thead>
          <tbody>
              <tr>

                 <td>nombre</td>   
                 <td>pais_origen</td>    
                 <td>modificar</td>   
                 <td>eliminar</td> 


              </tr>

              <?php

              $conexion = mysqli_connect("localhost","root","");
    
               mysqli_select_db($conexion,"proyectonuevo");
                
              $query="SELECT * FROM ESTUDIANTES_INTERCAMBIO";
              $resultado= mysqli_query($conexion,$query);
              while($row=$resultado->fetch_assoc()){

             ?>

              <tr>
                 <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['pais_origen']; ?></td>
                <td><a colspan="1" href="modificarc.php">modificar</a></td>
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













