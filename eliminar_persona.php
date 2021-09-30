<?php
require 'conexion.php';

$id = $_GET['id'];


$comprobacion = "SELECT * FROM actuan WHERE id_persona='$id'";

if($comprobacion!=0){

    $pasoPrevio = "DELETE FROM actuan WHERE id_persona='$id'";

    mysqli_query($conexion, $pasoPrevio);
}



















$eliminar = "DELETE FROM personas WHERE id='$id'";
mysqli_query($conexion, $eliminar);

header('location:personas.php');

//ON DELETE CASCADE
// No usar claves aenas, borrar manualmente por si deciden desactivar la integridad referencial

 ?>