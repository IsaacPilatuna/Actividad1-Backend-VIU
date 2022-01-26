<?php

class Idioma
{
    public $id ;
    public $nombre ;
    public $codigoISO ;
    public $tipo ;

    function __construct($object){
        $this->id = $object['id'];
        $this->nombre = $object['nombre'];
        $this->codigoISO = $object['codigoISO'];
        $this->tipo = $object['tipo'] ?? null;
    }
}
?>