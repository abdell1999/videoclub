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
        $conexion = new mysqli("localhost", "root", "", "videoclub");

        if ($conexion->connect_error) {
            die('Error de conexión: ' . $conexion->connect_error);


        }else{


            echo "<a class='btn btn-success'>Añadir pelicula</a>";
            echo "<br>";
            echo "<br>";

            $peliculas = $conexion->query("SELECT * FROM peliculas");
            echo "<table border='1'>";
            echo "<tr><th>Titulo</th><th>Genero</th><th>País</th><th>Año</th><th>Distribuidora</th><th>Acciones</th></tr>";
            while ($fila = $peliculas->fetch_object()) {
                echo "<tr>";
                echo "<td>" . $fila->titulo . "</td>";
                echo "<td>" . $fila->genero . "</td>";
                echo "<td>" . $fila->pais . "</td>";
                echo "<td>" . $fila->anio . "</td>";
                echo "<td>" . $fila->distribuidora . "</td>";
                echo "<td> <a class='btn btn-warning' href='#'>Editar</a> <a class='btn btn-danger' href='#'>Eliminar</a></td>";
                //echo "<td><a href='index.php?action=formularioModificarLibro&idLibro=" . $fila->idLibro . "'>Modificar</a></td>";
                //echo "<td><a href='index.php?action=borrarLibro&idLibro=" . $fila->idLibro . "'>Borrar</a></td>";
                echo "</tr>";

               
                
            }
            echo "</table>";




            


































        }
        
    ?>





</body>
</html>