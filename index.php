<?php
    require_once __DIR__ ."/MVC/Controllers/cervezaController.php";

    $controlador = new cervezaController();
    $controlador->listarCerveza();
