<?php
require 'conexion.php';
if (isset($_REQUEST['id']) && isset($_REQUEST['nombre']) && isset($_REQUEST['apellido1'])) {
    $nombre=$_REQUEST['nombre'];
    $apellido1 = $_REQUEST['apellido1'];
    $id = $_REQUEST['id'];


    if(isset($_REQUEST['apellido2'])){
        $apellido2 = $_REQUEST['apellido2'];

    }else{
        $apellido2 = "";
    }


    if($_FILES['fotografia']['name'] != ""){
      $target_path = "C:/xampp/htdocs/dwes/videoclub/img/fotografias/";
    $basename = basename( rand(1,99999) . $_FILES['fotografia']['name']);
    $target_path = $target_path . $basename; 
    if(move_uploaded_file($_FILES['fotografia']['tmp_name'], $target_path)) {
        echo "OKEY CRACK";

        $fotografia = "http://localhost/dwes/videoclub/img/fotografias/$basename";
        echo "<a href='$fotografia'> IMAGEN </a>";
    } else{
        echo "Ha ocurrido un error, trate de nuevo!";
        //echo "ADIOS";
    
}
      
      
        

    }else{
      
      $fotografia = $_REQUEST['fotografiaOld'];
      
    
   
    }
    
  
    
     
      $editar = "UPDATE personas SET nombre='$nombre', apellido1='$apellido1', apellido2='$apellido2', fotografia='$fotografia' WHERE id='$id'";
     
      $resultado = mysqli_query($conexion, $editar);
  
      if ($resultado) {
        header("location:personas.php");
      }else{
        echo "Ha ocurrido un error, no se ha podido editar al actor";
      }
  
    
}else{
  echo "<h1>ERROR 444444444</h1>";
}


?>