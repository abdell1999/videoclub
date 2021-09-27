<?php
require 'conexion.php';

$id = $_GET['id'];

$eliminar = "DELETE FROM peliculas WHERE id='$id'";
mysqli_query($conexion, $eliminar);

header('location:index.php');

//ON DELETE CASCADE
// No usar claves aenas, borrar manualmente por si deciden desactivar la integridad referencial

 ?>