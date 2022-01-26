<?php

class Actor
{
    public $id;
    public $nombre;
    public $apellidos;
    public $fechaNacimiento;
    public $nacionalidad;

    function __construct($object){
        $this->id = $object['id'];
        $this->nombre = $object['nombre'];
        $this->apellidos = $object['apellidos'];
        $this->fechaNacimiento = $object['fechaNacimiento'];
        $this->nacionalidad = $object['nacionalidad'];
    }

    public function getId(){
        return $this->id;
    }



}

?>