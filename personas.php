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
    
<script type="text/javascript">

function confirmar() {
	var idE = document.getElementById("idE").value;

	if(confirm("¿ESTAS SEGUR@?"))
		{window.location = "eliminar_persona.php?id="+idE;
	}
}

</script>    



    <?php
        

        require 'conexion.php';

        echo "<div class='container'><h1>Actores</h1>";

        echo "<form class='form-inline' method='GET' action='personas.php'>
        <input class='form-control mr-sm-2' name='busqueda' type='search' placeholder='Buscar' aria-label='Search'>
        <button class='btn btn-outline-success my-2 my-sm-0' type='submit'>Buscar</button>
        </form>";
            //echo "<a class='btn btn-success' href='agregar_persona.php'>Añadir persona</a>";

            


            echo "<br>";
            echo "<br>";

            //if(isset($_REQUEST['busqueda'])){
                if(isset($_REQUEST['busqueda'])){
                    $busqueda = $_REQUEST['busqueda'];
                    $personas = $conexion->query("SELECT * FROM personas WHERE nombre LIKE '%$busqueda%' OR apellido1 LIKE '%$busqueda%' OR apellido2 LIKE '%$busqueda%'");
                }else{
                    $personas = $conexion->query("SELECT * FROM personas");
                }
                
                
                
                
                
                //$personas = $conexion->query("SELECT * FROM personas");
                
           // }else{
             //   $personas = $conexion->query("SELECT * FROM personas");
             //   echo "ADIOS";
            //}


            
            

           echo "<a class='btn btn-primary btn-nueva' href='agregar_persona.php'><i class='fa fa-plus'></i>&nbsp;Añadir Actor </a>";
            echo "<table class='table table-bordered grocery-crud-table table-hover'>
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Fotografia</th>
                <th>Acciones</th>
              </tr>
            </thead>";
            while ($fila = $personas->fetch_object()) {
            echo "<tbody>
              
              <tr>
                <td>$fila->nombre</td>
                <td>
                $fila->apellido1
                </td>
                <td>
                $fila->apellido2
                </td>
                <td>
                <img class='card-img-top col-md-4 d-none d-md-block ml-6' src='$fila->fotografia' alt='Cartel'>
                </td>
                <td>
                <a class='btn btn-warning' href='editar_persona.php?id=$fila->id'>Editar</a> 
                <input id='idE' type='hidden' value= '$fila->id'><a class='btn btn-danger' onclick='confirmar()'>Eliminar</a>
                </td>

              </tr>
              <?php } ?>
            </tbody>";
            }
            
          echo "</table></div>";

        
