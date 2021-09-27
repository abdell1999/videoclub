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

        echo "<form class='form-inline' method='GET' action='resultado.php'>
        <input class='form-control mr-sm-2' name='busqueda' type='search' placeholder='Buscar' aria-label='Search'>
        <button class='btn btn-outline-success my-2 my-sm-0' type='submit'>Buscar</button>
        </form>";
            echo "<a class='btn btn-success' href='agregar_pelicula.php'>Añadir pelicula</a>";

            


            echo "<br>";
            echo "<br>";

            //if(isset($_REQUEST['busqueda'])){
                $busqueda = $_REQUEST['busqueda'];
                $peliculas = $conexion->query("SELECT * FROM peliculas WHERE titulo LIKE '%$busqueda%'");
                //$peliculas = $conexion->query("SELECT * FROM peliculas");
                echo "HOLA";
           // }else{
             //   $peliculas = $conexion->query("SELECT * FROM peliculas");
             //   echo "ADIOS";
            //}


            
            echo "<table border='1'>";
            echo "<tr><th>Titulo</th><th>Genero</th><th>País</th><th>Año</th><th>Cartel</th><th>Acciones</th></tr>";
            while ($fila = $peliculas->fetch_object()) {
                echo "<tr>";
                echo "<td>" . $fila->titulo . "</td>";
                echo "<td>" . $fila->genero . "</td>";
                echo "<td>" . $fila->pais . "</td>";
                echo "<td>" . $fila->anyo . "</td>";
                echo "<td><img class='card-img-top col-md-4 d-none d-md-block ml-6' src='$fila->cartel' alt='Miniatura'></td>";
                
                echo "<td> <a class='btn btn-warning' href='editar_pelicula.php?id=$fila->id'>Editar</a> 
                <a class='btn btn-danger' href='eliminar_pelicula.php?id=$fila->id'>Eliminar</a></td>";

                

                echo "</tr>";

               
                
            }
            echo "</table>";




            


































        
        
    ?>





</body>
</html>