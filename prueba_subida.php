

<form enctype="multipart/form-data" method="POST" action="prueba_subida.php">




<div class="form-group">
  <label for="cartel">Cartel de la película</label>
  <input type="file" class="form-control" name="cartel" required>
  <input type="hidden" value= "1" name="controlador">
</div>



<button type="submit" class="btn btn-success">Agregar</button>
<a href="index.php" class="btn btn-dark">Volver</a>
</form>




<?php





if(isset($_REQUEST['controlador'])){
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
    //echo "NO ENTRA EN LA CONDICION CRACK";
}







?>