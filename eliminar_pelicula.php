<?php
require 'conexion.php';

$id = $_GET['id'];


$comprobacion = "SELECT * FROM actuan WHERE id_pelicula='$id'";

if($comprobacion!=0){

    $pasoPrevio = "DELETE FROM actuan WHERE id_pelicula='$id'";

    mysqli_query($conexion, $pasoPrevio);
}





$eliminar = "DELETE FROM peliculas WHERE id='$id'";
mysqli_query($conexion, $eliminar);

header('location:peliculas.php');

//ON DELETE CASCADE
// No usar claves aenas, borrar manualmente por si deciden desactivar la integridad referencial

 ?>