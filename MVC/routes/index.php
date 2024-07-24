<?php
session_start();
require_once __DIR__."/curso_php/TRABAJO_FINAL_PHP/MVC/views/index.php";
//require_once __DIR__."/../database/Conexion.php";
$controller = new HomePageController();
$controller->index();