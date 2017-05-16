<!DOCTYPE html>
<html 
  <head>
       <title>DOCENTES</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>   
  <body>
    <div class="container">
        <table class="table table-bordered">
          <thead>
         <tr>
            <th colspan="1"> <a href="indexdocentes.php" href="estiloscursos.php">INSERTAR</a></th>
            <th colspan="5">LISTA DE DOCENTES</th>
          </tr>
            
          </thead>
          <tbody>
              <tr>

                 <td>cedula</td>   
                 <td>nombre</td>   
                 <td>apellido</td>   
                 <td>correo</td>   
                 <td>codigo</td>   
                 <td>salario</td> 
                 <td>modificar</td>   
                 <td>eliminar</td> 


              </tr>

              <?php

              $conexion = mysqli_connect("localhost","root","");
    
               mysqli_select_db($conexion,"proyectonuevo");
                
              $query="SELECT * FROM DOCENTES";
              $resultado= mysqli_query($conexion,$query);
              while($row=$resultado->fetch_assoc()){

             ?>

              <tr>
               <td><?php echo $row['cedula']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['apellido']; ?></td>
                <td><?php echo $row['correo']; ?></td>
                <td><?php echo $row['codigo']; ?></td>
                <td><?php echo $row['salario']; ?></td>
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






























































