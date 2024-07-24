<?php
session_start();
require_once __DIR__."/../controllers/LoginController.php";
require_once __DIR__."/../database/Conexion.php";
$controller = new LoginController(new Conexion());
$controller->login($_POST);