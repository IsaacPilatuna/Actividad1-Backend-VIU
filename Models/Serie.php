<?php
    class Serie
    {
        public $id;
        public $titulo;
        public $plataforma;
        public $director;

        function __construct($object){
            $this->id = $object['id'];
            $this->titulo = $object['titulo'];
            $this->plataforma = $object['plataforma'];
            $this->director = $object['director'];
        }
    }
?>