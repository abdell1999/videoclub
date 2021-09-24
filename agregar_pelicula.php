<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    
    <title>Agregar película</title>
</head>
<body>
    <h1>Agregar película</h1>

    <form role="form" method="POST" action="agregar_pelicula.php">
  <div class="form-group">
    <label for="titulo">Título de la película</label>
    <input type="text" class="form-control" name="titulo" required>
  </div>
  <div class="form-group">
    <label for="genero">Género de la película</label>
    <input type="text" class="form-control" name="genero" required>
  </div>
  <div class="form-group">
    <label for="pais">País de la película</label>
    <input type="text" class="form-control" name="pais" required>
  </div>
  <div class="form-group">
    <label for="anyo">Año de la película</label>
    <input type="number" class="form-control" name="anyo" required>
  </div>



  <div class="form-group">
    <label for="cartel">Cartel de la película</label>
    <input type="file" class="form-control" name="cartel" required>
  </div>




  <button type="submit" class="btn btn-success">Agregar</button>
  <a href="index.php" class="btn btn-dark">Volver</a>
</form>



<?php


require 'conexion.php';
if (isset($_POST['titulo']) && isset($_POST['genero']) && isset($_POST['pais']) && isset($_POST['anyo']) && isset($_POST['cartel'])) {
  $titulo=$_POST['titulo'];
  $genero = $_POST['genero'];
  $pais = $_POST['pais'];
  $anyo = $_POST['anyo'];
  $cartel = $_POST['cartel'];
  

  
    $insertar = "INSERT INTO peliculas(titulo, genero, pais, anyo, cartel) VALUES ('$titulo', '$genero', '$pais','$anyo', '$cartel')";
    $resultado = mysqli_query($conexion, $insertar);

    if ($resultado) {
      header("location:index.php");
    }else{
      echo "Ha ocurrido un error, no se ha podido registrar la película";
    }

  }










?>

</body>
</html>