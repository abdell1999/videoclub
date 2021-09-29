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
<?php


require 'conexion.php';
if(isset($_GET['id'])){


$id = $_GET['id'];

$consulta = $conexion->query("SELECT * FROM peliculas WHERE id='$id'");
$pelicula = $consulta->fetch_object();

echo "<div class='container'> <h1>Editar película</h1>";
echo "<form method='POST' enctype='multipart/form-data' action='editar_pelicula_2.php' >
<div class='form-group'>
  <label for='titulo'>Título de la película:</label>
  <input type='hidden' name='id' value='$id'>
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
  <input type='file' class='form-control' name='cartel'>
  <input type='hidden' value='$pelicula->cartel' name='cartelOld'>
  <br>
  <br>
  Cartel actual:
  <img class='card-img-top col-md-4 d-none d-md-block ml-6' src='$pelicula->cartel' alt='Cartel'>
  
</div>




<button type='submit' class='btn btn-warning'>Editar</button>
<a href='index.php' class='btn btn-dark'>Volver</a>
</form></div>";





































}else{
  echo "<h1>ERROR 777</h1>";
}
?>

</body>
</html>