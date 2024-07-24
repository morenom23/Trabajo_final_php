<?php
session_start();
require_once __DIR__."/../controllers/HomePageController.php";
require_once __DIR__."/../database/Conexion.php";
$controller = new HomePageController(new Conexion());
$controller->index();