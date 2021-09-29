<?php
require 'conexion.php';
if (isset($_REQUEST['id']) && isset($_REQUEST['titulo']) && isset($_REQUEST['genero']) && isset($_REQUEST['pais']) && isset($_REQUEST['anyo'])) {
    $titulo=$_REQUEST['titulo'];
    $genero = $_REQUEST['genero'];
    $pais = $_REQUEST['pais'];
    $anyo = $_REQUEST['anyo'];
    $id = $_REQUEST['id'];

    

    if (isset($_REQUEST['cartel'])) {
      
      $cartel = "CON IMAGEN";
        






    }else{
      
      $cartel = "SIN IMAGEN";
      
    
   
    }
    
  
    
     
      $editar = "UPDATE peliculas SET titulo='$titulo', genero='$genero', pais='$pais', anyo='$anyo', cartel='$cartel' WHERE id='$id'";
     
      $resultado = mysqli_query($conexion, $editar);
  
      if ($resultado) {
        header("location:index.php");
      }else{
        echo "Ha ocurrido un error, no se ha podido editar la película";
      }
  
    
}else{
  echo "<h1>ERROR 444444444</h1>";
}


?>