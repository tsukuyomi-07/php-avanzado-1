<?php
require_once "../model/user.php";

class UserController {

    public static function index()
    {
        $object = new User();
        $listUsers = $object->index();
       return $listUsers;
    }


    public static function store($names, $phone, $email)
    {
        $object = new User();
        $formUser = $object->store($names, $phone, $email);
        return $formUser;

    }
}




