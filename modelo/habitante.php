<?php

class habitante {
    private $hab_id;
    private $hab_nombre;
    private $hab_apellido;
    private $hab_fecha_nacimiento;
    private $hab_fecha_inscrito;
    private $hab_valor_inscrito;
    
    function __construct($hab_id,$hab_nombre,$hab_apellido,$hab_fecha_nacimiento,$hab_fecha_inscrito,$hab_valor_inscrito) {
        $this->hab_id = $hab_id;
        $this->hab_nombre = $hab_nombre;
        $this->hab_apellido = $hab_apellido;
        $this->hab_fecha_nacimiento = $hab_fecha_nacimiento;
        $this->hab_fecha_inscrito = $hab_fecha_inscrito;
        $this->hab_valor_inscrito = $hab_valor_inscrito;
    }

    function setHabId($hab_id) {
        $this->hab_id = $hab_id;
    }

    function setHabNombre($hab_nombre) {
        $this->hab_nombre = $hab_nombre;
    }

    function setHabApellido($hab_apellido) {
        $this->hab_apellido = $hab_apellido;
    }

    function setHabFechaNacimiento($hab_fecha_nacimiento) {
        $this->hab_fecha_nacimiento = $hab_fecha_nacimiento;
    }

    function setHabFechaInscrito($hab_fecha_Inscrito) {
        $this->hab_fecha_inscrito = $hab_fecha_inscrito;
    }
    function setHabValorInscrito($hab_valor_Inscrito) {
        $this->hab_valor_inscrito = $hab_valor_inscrito;
    }

    function getHabId() {
        return $this->hab_id;
    }

    function getHabNombre() {
        return $this->hab_nombre;
    }

    function getHabApellido() {
        return $this->hab_apellido;
    }

    function getHabFechaNacimiento() {
        return $this->hab_fecha_nacimiento;
    }

    function getHabFechaInscrito() {
        return $this->hab_fecha_inscrito;
    }
    function getHabValorInscrito() {
        return $this->hab_valor_inscrito;
    }
}