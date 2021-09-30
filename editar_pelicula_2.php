<?php
require 'conexion.php';
if (isset($_REQUEST['id']) && isset($_REQUEST['titulo']) && isset($_REQUEST['genero']) && isset($_REQUEST['pais']) && isset($_REQUEST['anyo']) && isset($_REQUEST['trailer'])) {
    $titulo=$_REQUEST['titulo'];
    $genero = $_REQUEST['genero'];
    $pais = $_REQUEST['pais'];
    $anyo = $_REQUEST['anyo'];
    $trailer = $_REQUEST['trailer'];
    $id = $_REQUEST['id'];


    if($_FILES['cartel']['name'] != ""){
      $target_path = "C:/xampp/htdocs/dwes/videoclub/img/carteles/";
    $basename = basename( rand(1,99999) . $_FILES['cartel']['name']);
    $target_path = $target_path . $basename; 
    if(move_uploaded_file($_FILES['cartel']['tmp_name'], $target_path)) {
        echo "OKEY CRACK";

        $cartel = "http://localhost/dwes/videoclub/img/carteles/$basename";
        echo "<a href='$cartel'> IMAGEN </a>";
    } else{
        echo "Ha ocurrido un error, trate de nuevo!";
        //echo "ADIOS";
    
}
      
      
        

    }else{
      
      $cartel = $_REQUEST['cartelOld'];
      
    
   
    }
    
  
    
     
      $editar = "UPDATE peliculas SET titulo='$titulo', genero='$genero', pais='$pais', anyo='$anyo', trailer='$trailer', cartel='$cartel' WHERE id='$id'";
     
      $resultado = mysqli_query($conexion, $editar);
  
      if ($resultado) {
        header("location:peliculas.php");
      }else{
        echo "Ha ocurrido un error, no se ha podido editar la película";
      }
  
    
}else{
  echo "<h1>ERROR 444444444</h1>";
}


?>