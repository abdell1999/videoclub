<?php
require 'conexion.php';

$id = $_GET['id'];

$eliminar = "DELETE FROM personas WHERE id='$id'";
mysqli_query($conexion, $eliminar);

header('location:personas.php');

//ON DELETE CASCADE
// No usar claves aenas, borrar manualmente por si deciden desactivar la integridad referencial

 ?>