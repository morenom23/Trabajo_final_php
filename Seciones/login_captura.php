<?php
require_once __DIR__ . "/Controllers/LoginController.php";
$controller = new LoginController();
$controller->autenticarUsuario($_POST);