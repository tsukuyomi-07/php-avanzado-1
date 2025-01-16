<?php

require_once "../config/db.php";


class User extends Db{

    

    function index(){
        $sql = "SELECT * FROM users";
         $consulta = $this->conexion->query($sql)->fetch_object();
         return $consulta;

         //consultar todos los registros de la tabla
    }

    function store(){


        $names = $_REQUEST['names'];
        $phone = $_REQUEST['phone'];
        $email = $_REQUEST['email'];


        $sql = "INSERT INTO users VALUES (NULL, '$names', '$phone', '$email')";
        $this->conexion->query($sql);
        return $sql;
    }

    function create(){}

    function destroy(){}

    function searchByName(){}

}
// $objetct = new User();
// $objetct->store();


