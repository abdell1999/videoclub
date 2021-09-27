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
<?php require_once '../../models/Pelicula.php';

echo "<a class='btn btn-success' href='create.php'>Añadir pelicula</a>";
            echo "<br>";
            echo "<br>";

echo "<table border='1'>";
            echo "<tr><th>Titulo</th><th>Genero</th><th>País</th><th>Año</th><th>Cartel</th><th>Acciones</th></tr>";
            foreach (Pelicula::listar() as $fila) {
                echo "<tr>";
                echo "<td>" . $fila[1] . "</td>";
                echo "<td>" . $fila[2] . "</td>";
                echo "<td>" . $fila[3] . "</td>";
                echo "<td>" . $fila[4] . "</td>";
                echo "<td><img class='card-img-top col-md-4 d-none d-md-block ml-6' src='$fila[5]' alt='Miniatura'></td>";
                
                echo "<td> <a class='btn btn-warning' href='editar_pelicula.php?id=$fila[0]'>Editar</a> 
                <a class='btn btn-danger' href='eliminar_pelicula.php?id=$fila[0]'>Eliminar</a></td>";

                

                echo "</tr>";

               
                
            }
            echo "</table>";
            ?>
</body>
</html>