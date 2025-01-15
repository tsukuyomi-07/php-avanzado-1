<?php

require_once "../config/db.php";

class Users extends Db{

    

    function index(){
        $sql = "SELECT * FROM users";
         $consulta = $this->conexion->query($sql);
    }

    function store(){}

    function create(){}

    function destroy(){}

    function searchByName(){}

}

$objet = new Users();
$objet->index();

