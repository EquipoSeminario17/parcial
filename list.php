<?php
  include 'bd/conexion.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>   aplicacion zoologico</title>
	
  <link rel="stylesheet" type="text/css" href="MD/css/mdb.min.css">
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
  />
  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
  />
  <!-- MDB -->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css"
    rel="stylesheet"

      <link rel="stylesheet" type="text/css" href="css/styles.css">
  
  
  <link rel="stylesheet" type="text/css" href="css/zoo.css">
</head>
<body>
	<br><br>
<div class="container" id="principal">
	<div id="app">mi aplicacion</div>
 <br><br><br>
 <?php
    include '../../bd/conexion.php';

    $id = $_POST["id_categoria"];
    $nombre= $_POST["nombre_categoria"];
    $detalle = $_POST["detalle_categoria"];

    $sql = "INSERT INTO categorias(idCategoria, nombreCategoria, detalle) 
            values ('$id', '$nombre', '$detalle')";
    if($conexion->query($sql) == TRUE){
      echo "Inserción exitosa";
    }
    else{
      echo "Inserción rechazada";
    }
   ?>
 <div class="form-outline">
             <label for="validationCustom01" class="form-label">id
             </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             
   <form action="index.php" method="POST">
            <input type="text" id="id_Animales" name="id_Animales">
           
          
        </div>
         <div class="form-outline">
             <label for="validationCustom01" class="form-label">animal
             </label>
            <input type="text" id="nombre_Animal" name="nombre_Animal">
           
           
          
        </div>
         <div class="form-outline">
             <label for="validationCustom01" class="form-label">cantidad
             </label>&nbsp;&nbsp;&nbsp;
            <input type="number" id="cantidad" name="cantidad">
           
           
          
        </div>
        <div class="form-outline">
             <label for="validationCustom01" class="form-label">peso
             </label>&nbsp;&nbsp;&nbsp;
            <input type="number" id="nombre" name="nombre">
           
           
          
        </div>

 <div align="center" class="container" id="container1">
        
        <br><br><br><br><br><br><br>
        <a type="button" class="btn btn-succes" id="btn1" href="register.php">Registrar</a>&nbsp;
        <button type="button" class="btn btn-primary" id="btn2">opcion2</button>&nbsp;
        <button type="button" class="btn btn-primary" id="btn3">opcion3</button>
        </div>
          <?php
           $sql= "SELECT * FROM animales";
           $i = 0;
            if($resultado = $conexion->query($sql)){
             echo('
           
              <thead>
                <tr>
                 <th>#</th> 
                  <th>ID</th>
                  <th>Nombre Producto</th>
                  <th>Unidades Disponibles</th>
                  <th>Categoria</th>
                  <th>Opciones</th>
                </tr>
              </thead>
              ');
              while($row = $resultado->fetch_array()){
                $i = $i + 1;
                $id = $row['idAnimales'];
                $nombre = $row['nombreAnimal'];
                $cantidad = $row['cantidad'];
                $categoria = $row['categoria'];
                echo('
                  <tbody>
                <tr>
                 <td>'.$i.'</td>
                  <td>'.$id.'</td>
                  <td>'.$nombre.'</td>
                  <td>'.$cantidad.'</td>
                  <td>'.$categoria.'</td>
                  <td>
                     <a href="edit.php" class="btn btn-default">
                        <i class="fas fa-edit"></i>
                      </a>
                      <a href="" class="btn btn-default">
                        <i class="fas fa-trash"></i>
                      </a>
                  </td>
                </tr>
              

                  ');


              }
               echo('

                    </tbody>
                    </table>

                ');

            }

          ?>
        
          
             
          </div>
<br><br>
</div>

        <br>
   
   <fieldset id="perfil">
    <img  src="img/zoo.jpg" width="400px" height="250px">
</fieldset>
  
</div>
 <script type="text/javascript" src="MD/js/mdb.min.js"></script>
  <script type="text/javascript" src="js/copia.js"></script>
  <script>
  $(function () {
    bsCustomFileInput.init();
  });
  </script>
   <?php
  mysqli_close($conexion);

  ?>
</body>
</html>