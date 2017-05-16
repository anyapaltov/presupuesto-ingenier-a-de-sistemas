<!DOCTYPE html>
<html 
  <head>
       <title>CONVENIOS INTERNACIONALES</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>   
  <body>
    <div class="container">
        <table class="table table-bordered">
          <thead>
         <tr>
            <th colspan="1"> <a href="indexinternacionalizacion.php" href="estiloscursos.php">INSERTAR</a></th>
            <th colspan="5">LISTA DE CURSOS</th>
          </tr>
            
          </thead>
          <tbody>
              <tr>

                 <th>ID_internacionalizacion</th> 
                 <th>ID_pais</th>     
                 <th>pais</th>   
                 <th>tipo_convenio</th>   
                 <th>vigencia</th>   
                 <th>costo</th> 
                 <th>modificar</th>   
                 <th>eliminar</th> 


              </tr>

              <?php

              $conexion = mysqli_connect("localhost","root","");
    
               mysqli_select_db($conexion,"proyectonuevo");
                
              $query="SELECT * FROM CONVENIOS_INTERNACIONALES";
              $resultado= mysqli_query($conexion,$query);
              while($row=$resultado->fetch_assoc()){

             ?>

              <tr>
               <td><?php echo $row['ID_internacionalizacion']; ?></td>
                <td><?php echo $row['ID_pais']; ?></td>
                <td><?php echo $row['pais']; ?></td>
                <td><?php echo $row['tipo_convenio']; ?></td>
                <td><?php echo $row['vigencia']; ?></td>
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