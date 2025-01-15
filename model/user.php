<?php

require_once "../config/db.php";

class Users extends Db{

    

    function index(){
        $sql = "SELECT * FROM users";
         $consulta = $this->conexion->query($sql)->fetch_object();
         return $consulta;
    }

    function store(){
        $sql = "INSERT INTO users VALUES (NULL, 'sebas', 5555555, 'sebas@gmail.com')";
        $this->conexion->query($sql);
    }

    function create(){}

    function destroy(){}

    function searchByName(){}

}


