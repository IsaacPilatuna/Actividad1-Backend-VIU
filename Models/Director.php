<?php

class Director
{
    public $id;
    public $nombre;
    public $apelidos;
    public $fechaNacimiento;
    public $nacionalidad;
    
    function __construct($object){
        $this->id = $object['id'];
        $this->nombre = $object['nombre'];
        $this->apellidos = $object['apellidos'];
        $this->fechaNacimiento = $object['fechaNacimiento'];
        $this->nacionalidad = $object['nacionalidad'];
    }
}
?>