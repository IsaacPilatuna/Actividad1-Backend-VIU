<?php

class Plataforma
{
    public $id;
    public $nombre;

    function __construct($object){
        $this->id = $object['id'];
        $this->nombre = $object['nombre'];
    }
}
?>