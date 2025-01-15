<?php

class Db{

    protected $conexion;

    function __construct()
    {
        $this->conexion = new mysqli('localhost', 'root', '', 'example');
        
        return $this->conexion;
    }


    function imprimir()
    {
        echo "imprimir";
    }

}

//$object = new Db();
//$object->imprimir();

