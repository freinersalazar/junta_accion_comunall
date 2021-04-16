<!doctype html>
<?php
include_once '../../modelo/habitante.php';
include_once '../../modelo/conexion.php';
include_once '../../controlador/controladorHabitante.php';
?>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Programacion de sistemas de informacion</title>
</head>

<body background="../../imagen/fondo6.jpeg";>
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <?php
                try {
                    if (!isset($_REQUEST["identificacion"])) {
                        throw new PDOException("Por favor digite la identificación");
                    }
                    if (!isset($_REQUEST["nombre"])) {
                        throw new PDOException("Por favor digite el nombre");
                    }
                    if (!isset($_REQUEST["apellido"])) {
                        throw new PDOException("Por favor digite el apellido");
                    }
                    if (!isset($_REQUEST["fecha_nacimiento"])) {
                        throw new PDOException("Por favor digite la fecha de nacimiento");
                    }
                    if (!isset($_REQUEST["fecha_inscrito"])) {
                        throw new PDOException("Por favor digite la fecha actual");
                    }
                    if (!isset($_REQUEST["valor_inscrito"])) {
                        throw new PDOException("Por favor digite el valor de inscripcion");
                    }

                    $hab_id = $_REQUEST["identificacion"];
                    $hab_nombre = $_REQUEST["nombre"];
                    $hab_apellido = $_REQUEST["apellido"];
                    $hab_fecha_nacimiento = $_REQUEST["fecha_nacimiento"];
                    $hab_fecha_inscrito = $_REQUEST["fecha_inscrito"];
                    $hab_valor_inscrito = $_REQUEST["valor_inscrito"];


                
                    $habitante = new habitante(
                        $hab_id,
                        $hab_nombre,
                        $hab_apellido,
                        $hab_fecha_nacimiento,
                        $hab_fecha_inscrito,
                        $hab_valor_inscrito
                    );
                    $controladorHabitante = new controladorHabitante();
                    $resultado = $controladorHabitante->crear($habitante);

                    if($resultado["type"] == "success"){
                        echo '<h2 class="text-center text-success">'. $resultado["mensaje"] ."</h2>";
                    }else{
                        echo '<h2 class="text-center text-danger">'. $resultado["mensaje"] ."</h2>";
                    }
                } catch (PDOException $ex) {
                    echo '<h2 class="text-center text-danger">'. $ex->getMessage() ."</h2>";
                }
                ?>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <a class="btn btn-warning" href="listadoHabitante.php">Regresar al listado de inscritos</a>
                </div>
            </div>
        </div>
    </div>







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>