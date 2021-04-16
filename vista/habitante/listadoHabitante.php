<!doctype html>
<?php
include_once '../../controlador/controladorHabitante.php';
include_once '../../modelo/conexion.php';
include_once '../../modelo/habitante.php';
?>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Lista habitantes</title>
</head>

<body  background="../../imagen/fondo2.jpeg";>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <h1 class="text-center" color= "black">
                    LISTADO DE HABITANTES
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="row">
                    <div class="col">
                        <a class="btn btn-primary" href="formularioInscribirHabitante.php">Crear nuevo</a>
                    </div>
                </div>
                <br>
                <table background="../../imagen/fondo3.jpeg"; class="table table-bordered">
                    <thead>
                        <tr>
                          <td><FONT COLOR="blue"><H5><CENTER>Id</CENTER></H5></FONT></td>
                            <td><FONT COLOR="blue"><H5><CENTER>Nombre</CENTER></H5></FONT></td>
                            <td><FONT COLOR="blue"><H5><CENTER>Apellido</CENTER></H5></FONT></td>
                            <td><FONT COLOR="blue"><H5><CENTER>Fecha de nacimiento</CENTER></H5></FONT></td>
                            <td><FONT COLOR="blue"><H5><CENTER>Fecha de inscripcion</CENTER></H5></FONT></td>
                            <td><FONT COLOR="blue"><H5><CENTER>Valor de inscripcion</CENTER></H5></FONT></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $controladorHabitante = new controladorHabitante();
                        $habitantes = $controladorHabitante->listar();
                        foreach ($habitantes as $habitante) {
                            echo "<tr>";
                            echo "<td>" . $habitante->getHabId() . "</td>";
                            echo "<td>" . $habitante->getHabNombre() . "</td>";
                            echo "<td>" . $habitante->getHabApellido() . "</td>";
                            echo "<td>" . $habitante->getHabFechaNacimiento() . "</td>";
                            echo "<td>" . $habitante->getHabFechaInscrito() . "</td>";
                            echo "<td>" . $habitante->getHabValorInscrito() . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>