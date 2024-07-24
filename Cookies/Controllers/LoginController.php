<?php
session_start();
require_once __DIR__."/../Models/Usuario.php";
class LoginController {
    
    /**
     * Carga o el html
     */
    public function cargarView()
    {       
        //verificar si exsiste la cookie del usuario
        if(!empty($_COOKIE["user_login_name"])){
            $valorCookie = $_COOKIE["user_login_name"];
            $usuarioEnAlmacenado = $this->getUsuario();
            if($usuarioEnAlmacenado->getUsername() === $valorCookie){
                $this->loguear($usuarioEnAlmacenado);
            }else {
                //devolver un error
                unset($_SESSION["usuario"]);
                unset($_SESSION["usuario_name"]);
                unset($_COOKIE["user_login_name"]);
                session_destroy();
                setcookie('user_login_name', null, -1); 
                header("Location: login.php");

            }
        }else {
            require_once __DIR__ . "/../Views/login.php";
        }        
    }

    public function autenticarUsuario($dataAcceso)
    {    
   
        if(isset($dataAcceso["usuario"]) && isset($dataAcceso["password"])){
            $usuario = $this->getUsuario();
            if($usuario->getUsername() === $dataAcceso["usuario"]){
                if($usuario->getPassword() === $dataAcceso["password"]){
                    $this->loguear($usuario);                                   
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

    protected function loguear($usuario)
    {
        $_SESSION["usuario"] = $usuario->getUsername();
        $_SESSION["usuario_name"]  = $usuario->getNombre();
       
        //GUARDADO DE LA COOKIES
        /**
         * @var int $tipoCaducidad
         * +60*60*24*30
         */
        $tipoCaducidad = time() +60*60*24*30;                    
        setcookie("user_login_name",$usuario->getUsername(),$tipoCaducidad);                   
        
        header("Location: dashboard.php");   
    }
    /**
     * Devuelve un usuario creado
     */
    private function getUsuario()
    {

        $usuarioExistente = new Usuario(
            "moreno",
            "1234567",
            "Desarrollador Web"
        );
        return $usuarioExistente;
    }
}