<?php
require_once __DIR__ . "/Controllers/CervezasController.php";
$controlador = new CervezasController();

$datosFormulario = $_REQUEST;

$controlador->crearCerveza($datosFormulario);