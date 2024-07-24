<?php

Class ContactoController {
 
 private $conexionDB;

 public function __construct($conexionDB) {

     $this->conexionDB = $conexionDB;
 }

 public function indexC() {
     include __DIR__."/../views/Registro.php";
 }


 //esta función es la que guardará en la base de datos la información de contactos que ingresa a través del formulario
 public function crearContacto($dataForm) {
     var_dump($dataForm);
     $query = "INSERT INTO contacto (nombre_completo, correo_electronico, contraseña) VALUES (:nombre, :correo, :contraseña)";
     $params = [
         ':nombre' => $dataForm['nombre'],
         ':correo' => $dataForm['correo'],
         ':contraseña' => $dataForm['contraseña'],
        ];
    
     $this->conexionDB->runQuery($query,$params);

     $_SESSION['form-contacto'] = '¡La información fue enviada exitósamente!';
     header("Location:Registro.php");
    }
}