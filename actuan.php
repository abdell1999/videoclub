<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    
    <title>Videoclub</title>
</head>
<body>
 
    
    
    <?php
        
        require 'header.php';
        require 'conexion.php';

        $consulta = $conexion->query("SELECT DISTINCT actuan.id_persona FROM peliculas
        INNER JOIN actuan ON peliculas.id = actuan.id_pelicula 
        INNER JOIN personas ON actuan.id_persona = personas.id");
        


        echo "<div class='container'><h1>Peliculas y Actores</h1>";

        
     

      
            
            

           
            echo "<table class='table table-bordered grocery-crud-table table-hover'>
            <thead>
              <tr>
                <th>Actor</th>
                <th>Películas</th>

              </tr>
            </thead>";
            while ($fila = $consulta->fetch_object()) {

                $consulta2 = $conexion->query("SELECT * FROM personas WHERE id='$fila->id_persona'");
                //$consulta20 = $conexion->query("SELECT id_pelicula FROM actuan WHERE id_persona = '$fila->id_persona'");
                //$fila20 = $consulta20->fetch_object();
                $fila2 = $consulta2->fetch_object();

                
            echo "<tbody><tr><td>";
                echo $fila2->nombre;
                echo " ";
                echo $fila2->apellido1;
                echo " "; 
                echo $fila2->apellido2; 
                
                echo "</td><td>";
                $consulta4 = $conexion->query("SELECT id_pelicula FROM actuan WHERE id_persona = '$fila2->id'");
                

                while ($fila4 = $consulta4->fetch_object()) {
                    $consulta3 = $conexion->query("SELECT titulo FROM peliculas WHERE id='$fila4->id_pelicula'");
                


                while ($fila3 = $consulta3->fetch_object()) {
                    echo "$fila3->titulo";
                    echo "<br>";

                }
                }



                
                




                echo "</td></tr>";
               }
            echo "</tbody>";
            
            
          echo "</table></div>";


        ?>
        
