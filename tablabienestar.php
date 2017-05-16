<!DOCTYPE html>
<html 
  <head>
       <title>BIENESTAR</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>   
  <body>
    <div class="container">
        <table class="table table-bordered">
          <thead>
         <tr>
            <th colspan="1"> <a href="indexbienestar.php" href="estiloscursos.php">INSERTAR</a></th>
            <th colspan="5">LISTA DE CURSOS</th>
          </tr>
            
          </thead>
          <tbody>
              <tr>

                 <th>ID_bienestar</th> 
                 <th>actividad</th>     
                 <th>costo</th>   
                 <th>modificar</th>   
                 <th>eliminar</th> 


              </tr>

              <?php

              $conexion = mysqli_connect("localhost","root","");
    
               mysqli_select_db($conexion,"proyectonuevo");
                
              $query="SELECT * FROM BIENESTAR";
              $resultado= mysqli_query($conexion,$query);
              while($row=$resultado->fetch_assoc()){

             ?>

              <tr>
               <td><?php echo $row['ID_bienestar']; ?></td>
                <td><?php echo $row['actividad']; ?></td>
                <td><?php echo $row['costo']; ?></td>
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