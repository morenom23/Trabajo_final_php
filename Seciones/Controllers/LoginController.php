<?php
session_start();
require_once __DIR__."/../Models/Usuario.php";
class LoginController {
    
    /**
     * Carga o el html
     */
    public function cargarView()
    {       
        require_once __DIR__ . "/../Views/login.php";
    }

    public function autenticarUsuario($dataAcceso)
    {    
   
        if(isset($dataAcceso["usuario"]) && isset($dataAcceso["password"])){
            $usuario = $this->getUsuario();
            if($usuario->getUsername() === $dataAcceso["usuario"]){
                if($usuario->getPassword() === $dataAcceso["password"]){
                    $_SESSION["usuario"] = $usuario->getUsername();
                    $_SESSION["usuario_name"]  = $usuario->getNombre();
                    header("Location: dashboard.php");                    
                }else {
                    echo "El password del usuario es incorrecto";
                }
            } else {
                echo "El usuario no existe";
            }

        }else {
            echo "No se envio informacion";
        }
    }

    /**
     * Devuelve un usuario creado
     */
    private function getUsuario()
    {

        $usuarioExistente = new Usuario(
            "paco",
            "12345",
            "Paco Web"
        );
        return $usuarioExistente;
    }
}