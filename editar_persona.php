<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    
    <title>Editar actor</title>
</head>
<body>
<?php

require 'header.php';
require 'conexion.php';
if(isset($_GET['id'])){


$id = $_GET['id'];

$consulta = $conexion->query("SELECT * FROM personas WHERE id='$id'");
$persona = $consulta->fetch_object();

echo "<div class='container'> <h1>Editar actor</h1>";
echo "<form method='POST' enctype='multipart/form-data' action='editar_persona_2.php' >
<div class='form-group'>
  <label for='nombre'>Nombre:</label>
  <input type='hidden' name='id' value='$id'>
  <input type='text' class='form-control' name='nombre' value = '$persona->nombre' required>
</div>
<div class='form-group'>
  <label for='apellido1'>Primer Apellido:</label>
  <input type='text' class='form-control' name='apellido1' value = '$persona->apellido1' required>
</div>
<div class='form-group'>
  <label for='apellido2'>Segundo Apellido:</label>
  <input type='text' class='form-control' name='apellido2' value = '$persona->apellido2'>
</div>


<div class='form-group'>

  <label for='fotografia'>fotografia de la actor</label>
  <input type='file' class='form-control' name='fotografia'>
  <input type='hidden' value='$persona->fotografia' name='fotografiaOld'>
  <br>
  <br>
  fotografia actual:
  <img class='card-img-top col-md-4 d-none d-md-block ml-6' src='$persona->fotografia' alt='fotografia'>
  
</div>




<button type='submit' class='btn btn-warning'>Editar</button>
<a href='personas.php' class='btn btn-dark'>Volver</a>
</form></div>";





































}else{
  echo "<h1>ERROR 777</h1>";
}
?>

</body>
</html>