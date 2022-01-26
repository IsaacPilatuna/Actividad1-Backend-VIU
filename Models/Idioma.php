<?php

class Idioma
{
    public $id ;
    public $nombre ;
    public $codigoISO ;

    function __construct($object){
        $this->id = $object['id'];
        $this->nombre = $object['nombre'];
        $this->codigoISO = $object['codigoISO'];
    }
}
?>