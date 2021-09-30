<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    
    <title>Agregar actor</title>
</head>
<body>
    
<?php
require 'header.php';

echo "<div class='container'> <h1>Agregar actor</h1>";

echo "<form role='form' enctype='multipart/form-data' method='POST' action='agregar_persona.php'>
<div class='form-group'>
  <label for='titulo'>Nombre:</label>
  <input type='text' class='form-control' name='nombre' required>
</div>
<div class='form-group'>
<label for='titulo'>Primer apellido:</label>
<input type='text' class='form-control' name='apellido1' required>
</div>
<div class='form-group'>
<label for='titulo'>Segundo apellido:</label>
<input type='text' class='form-control' name='apellido2'>
</div>

<div class='form-group'>
  <label for='fotografia'>Fotografía:</label>
  <input type='file' class='form-control' name='fotografia' required>
  <input type='hidden' value= '1' name='controlador'>
</div>




<button type='submit' class='btn btn-success'>Agregar</button>
<a href='index.php' class='btn btn-dark'>Volver</a>
</form></div>";




require 'conexion.php';
if (isset($_POST['nombre']) && isset($_POST['apellido1'])) {
  $nombre=$_POST['nombre'];
  $apellido1 = $_POST['apellido1'];
  //$fotografia = $_POST['fotografia'];

    if(isset($_POST['apellido2'])){
        $apellido2 = $_POST['apellido2'];

    }else{
        $apelldio2 = "";
    }

  if(isset($_REQUEST['controlador'])){
    $target_path = "C:/xampp/htdocs/dwes/videoclub/img/fotografias/";
    $basename = basename( rand(1,99999) . $_FILES['fotografia']['name']);
    $target_path = $target_path . $basename; 
    if(move_uploaded_file($_FILES['fotografia']['tmp_name'], $target_path)) {
        echo "OKEY CRACK";

        $fotografia = "http://localhost/dwes/videoclub/img/fotografias/$basename";
        echo "<a href='$fotografia'> IMAGEN </a>";
    } else{
        echo "Ha ocurrido un error, trate de nuevo!";
        //echo "ADIOS";
    }
}else{
    echo "NO ENTRA EN LA CONDICION";
}


  
    $insertar = "INSERT INTO personas(nombre, apellido1, apellido2, fotografia) VALUES ('$nombre', '$apellido1', '$apellido2', '$fotografia')";
    $resultado = mysqli_query($conexion, $insertar);
 
    //echo $fotografia;

    if ($resultado) {
      header("location:personas.php");
    }else{
      echo "Ha ocurrido un error, no se ha podido registrar la película";
    }

  }










?>

</body>
</html>