<?php
require 'conexion.php';

$id = $_GET['id'];

$eliminar = "DELETE FROM peliculas WHERE id='$id'";
mysqli_query($conexion, $eliminar);

header('location:index.php');




 ?>