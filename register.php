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
  <script type="text/javascript" src="MD/js/mdb.min.js"></script>
  <script type="text/javascript" src="js/copia.js"></script>
  
  <link rel="stylesheet" type="text/css" href="css/zoo.css">
</head>
<body>
	<br><br>
<div class="container" id="principal">
	<div id="app">mi aplicacion</div>
 <br><br><br>
 <div class="form-outline">
             <label for="validationCustom01" class="form-label">id
             </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             
   <form action="proceso.php" method="POST">
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
            <input type="number" id="categoria" name="categoria">
           
           
          
        </div>

 <div align="center" class="container" id="container1">
        
        <br><br><br><br><br><br><br>
       <a type="button" class="btn btn-succes" id="btn1" href="register.php">Registrar</a>&nbsp;&nbsp;
        <button type="button" class="btn btn-primary" id="btn2">opcion2</button>&nbsp;
        <button type="button" class="btn btn-primary" id="btn3">opcion3</button>
<br><br>
</div>

        <br>
   
   <fieldset id="perfil">
    <img  src="img/zoo.jpg" width="400px" height="250px">
</fieldset>
  
</div>
 <script>
  $(function () {
    bsCustomFileInput.init();
  });
  </script>
</body>
</html>