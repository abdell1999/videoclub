<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videoclub</title>
</head>
<body>
    <h1>Videoclub</h1>
    
    <?php
        $conexion = new mysqli("localhost", "root", "", "videoclub");

        if ($conexion->connect_error) {
            die('Error de conexión: ' . $conexion->connect_error);


        }
        




    ?>





</body>
</html>