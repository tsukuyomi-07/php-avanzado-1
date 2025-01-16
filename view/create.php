<?php

require_once '../controlador/userController.php';

        $names = $_REQUEST['names'];
        $phone = $_REQUEST['phone'];    //metodo con parametros
        $email = $_REQUEST['email'];


UserController::store();
UserController::store($names, $phone, $email); //metodo con parametros


?>






