<?php
 

class controladorHabitante{
    private $conexion;

    function __construct(){
        $this->conexion = new conexion();
        $this->conexion->getConexion()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    /* Listar los datos de habitante (Read) */
    function listar(){
        try {
            $sql = "select * from habitantes";
            $ps = $this->conexion->getConexion()->prepare($sql);
            $ps->execute(NULL);
            $resultado = [];
            while($row = $ps->fetch(PDO::FETCH_OBJ)){
                $habitante = new habitante(
                    $row->hab_id,
                    $row->hab_nombre,
                    $row->hab_apellido,
                    $row->hab_fecha_nacimiento,
                    $row->hab_fecha_inscrito,
                    $row->hab_valor_inscrito
                );

                
                array_push($resultado,$habitante);
            }
            $this->conexion = null;
        }catch(PDOException $e){
            echo "Falló la conexión " . $e->getMessage();
        }

        return $resultado;
    }

    function crear($habitante){
        try{
            $resultado = [];
            $sql = "insert into habitantes values (?,?,?,?,?,?)";
            $ps = $this->conexion->getConexion()->prepare($sql);
            $ps->execute(array(
                $habitante->getHabId(),
                $habitante->getHabNombre(),
                $habitante->getHabApellido(),
                $habitante->getHabFechaNacimiento(),
                $habitante->getHabFechaInscrito(),
                $habitante->getHabValorInscrito(),
            ));
            if($ps->rowCount() > 0){
                $mensaje = "Se creó el habitante correctamente";
                $type = "success";
            }else{
                $mensaje = "No se pudo crear el habitante";
                $type = "error";
            }
            $this->conexion = null;
        }catch(PDOException $e){
            $mensaje = "Error al crear el habitante " .$e->getMessage(); 
            $type = "error";
        }
        $resultado = [
            "mensaje" => $mensaje,
            "type"    => $type
        ];
        return $resultado;
    }
}