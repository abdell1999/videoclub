<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    
    <title>Editar película</title>
</head>
<body>
    <h1>Editar película</h1>

   



<?php


require 'conexion.php';

$id = $_GET['id'];

$consulta = $conexion->query("SELECT * FROM peliculas WHERE id='$id'");
$pelicula = $consulta->fetch_object();

echo "<form role='form' method='POST' action='editar_pelicula.php'>
<div class='form-group'>
  <label for='titulo'>Título de la película:</label>
  <input type='text' class='form-control' name='titulo' value = '$pelicula->titulo' required>
</div>
<div class='form-group'>
  <label for='genero'>Género de la película:</label>
  <input type='text' class='form-control' name='genero' value = '$pelicula->genero' required>
</div>
<div class='form-group'>
  <label for='pais'>País de la película:</label>
  <input type='text' class='form-control' name='pais' value = '$pelicula->pais' required>
</div>
<div class='form-group'>
  <label for='anyo'>Año de la película:</label>
  <input type='number' class='form-control' name='anyo' value = '$pelicula->anyo' required>
</div>



<div class='form-group'>
  <label for='cartel'>Cartel de la película</label>
  <input type='file' class='form-control' name='cartel' required>
</div>




<button type='submit' class='btn btn-warning'>Editar</button>
<a href='index.php' class='btn btn-dark'>Volver</a>
</form>";



























if (isset($_REQUEST['titulo']) && isset($_REQUEST['genero']) && isset($_REQUEST['pais']) && isset($_REQUEST['anyo']) && isset($_REQUEST['cartel'])) {
  $titulo=$_REQUEST['titulo'];
  $genero = $_REQUEST['genero'];
  $pais = $_REQUEST['pais'];
  $anyo = $_REQUEST['anyo'];
  $cartel = $_REQUEST['cartel'];
  

  
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