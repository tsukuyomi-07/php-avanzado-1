<?php
require_once "../model/user.php";

class UserController {

    function index()
    {
        $objet = new Users();
        $listUsers = $objet->index();
        echo $listUsers->names . ' ' . $listUsers->phone; 
        echo $listUsers->email;
    }
}

$object = new UserController();
$object->index();

