<?php

require_once '../controlador/userController.php';

$names = $_REQUEST['names'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];

UserController::store($names, $phone, $email);

?>






