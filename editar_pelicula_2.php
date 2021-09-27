<?php
require 'conexion.php';
if (isset($_REQUEST['id']) && isset($_REQUEST['titulo']) && isset($_REQUEST['genero']) && isset($_REQUEST['pais']) && isset($_REQUEST['anyo']) && isset($_REQUEST['cartel'])) {
    $titulo=$_REQUEST['titulo'];
    $genero = $_REQUEST['genero'];
    $pais = $_REQUEST['pais'];
    $anyo = $_REQUEST['anyo'];
    $cartel = $_REQUEST['cartel'];
    $id = $_REQUEST['id'];
    
  
    
     
      $editar = "UPDATE peliculas SET titulo='$titulo', genero='$genero', pais='$pais', anyo='$anyo', cartel='$cartel' WHERE id='$id'";
     
      $resultado = mysqli_query($conexion, $editar);
  
      if ($resultado) {
        header("location:index.php");
      }else{
        echo "Ha ocurrido un error, no se ha podido editar la película";
      }
  
    }



?>