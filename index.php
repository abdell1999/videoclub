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
    <h1>Videoclub</h1>
    
    <?php
        

        require 'conexion.php';


            echo "<a class='btn btn-success' href='agregar_pelicula.php'>Añadir pelicula</a>";
            echo "<br>";
            echo "<br>";

            $peliculas = $conexion->query("SELECT * FROM peliculas");
            echo "<table border='1'>";
            echo "<tr><th>Titulo</th><th>Genero</th><th>País</th><th>Año</th><th>Cartel</th><th>Acciones</th></tr>";
            while ($fila = $peliculas->fetch_object()) {
                echo "<tr>";
                echo "<td>" . $fila->titulo . "</td>";
                echo "<td>" . $fila->genero . "</td>";
                echo "<td>" . $fila->pais . "</td>";
                echo "<td>" . $fila->anyo . "</td>";
                echo "<td><img class='card-img-top col-md-4 d-none d-md-block ml-6' src='$fila->cartel' alt='Miniatura'></td>";
                
                echo "<td> <a class='btn btn-warning' href='#'>Editar</a> 
                <a class='btn btn-danger' href='eliminar_pelicula.php?id=$fila->id'>Eliminar</a></td>";

                



                //echo "<td><a href='index.php?action=formularioModificarLibro&idLibro=" . $fila->idLibro . "'>Modificar</a></td>";
                //echo "<td><a href='index.php?action=borrarLibro&idLibro=" . $fila->idLibro . "'>Borrar</a></td>";
                echo "</tr>";

               
                
            }
            echo "</table>";




            


































        
        
    ?>





</body>
</html>