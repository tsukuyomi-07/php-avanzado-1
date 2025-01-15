<?php

class Db{

    protected $conexion;

    function __construct()
    {
        $this->conexion = new mysqli('localhost', 'root', '', 'example');
        
        
    }

}

//$object = new Db();
//$object->imprimir();

