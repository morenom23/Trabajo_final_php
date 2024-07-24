<?php
require_once __DIR__ . "/../Models/Cerveza.php";
class CervezasController {

    /**
     * Se utiliza para cargar la vista de crear una cerveza
     */
    public function crearCervezaView()
    {   
        require_once __DIR__ . "/../Views/crearCerveza.php";
    }

    /**
     * @param array $datosFormulario
     */
    public function crearCerveza($datosFormulario)
    {
       
        // ------ Validaciones  ------
        // - Existencia
        // - Claves
        // - Tipo de datos        
        // - Validacion del negocio
        // 

        //Validaciones de existencia
        $conteoDatos = count($datosFormulario);
        
        if($conteoDatos < 1) {
            echo "ERROR: Faltan los datos";
            return;
        }   
        



        //Validaciones de clave
        
        if(!isset($datosFormulario["nombre"])) {
            echo "ERROR: Falta ingresar el nombre";
            return;
        }       

        if(!isset($datosFormulario["marca"])) {
            echo "ERROR: Falta ingresar la marca";
            return;
        }
       
        if(!isset($datosFormulario["precio"])){            
            echo "ERROR: Falta por ingresar el precio";
            return;
        }

       

        if(empty($datosFormulario["nombre"])) {
            echo "ERROR: Falta ingresar el nombre o es nulo";
            return;
        }       


        
        //llegaron los datos        
        $marcaCerveza =  $datosFormulario["marca"];
        $precioCerveza = $datosFormulario["precio"];

    
        //validaciones de tipo de datos
        if(!is_numeric($precioCerveza)){
            echo "Error: El precio no es un numero";
            return;
        }



        //Validaciones del negocio
        $marcasValidas = [
            "bavaria",
            "bacana"
        ];
    
        if(!in_array($marcaCerveza,$marcasValidas)){
            echo "La marca ".$marcaCerveza. " no valida, verifique";
            return;
        }

        echo "Existoso se guardara la informacion!!";

        ////
        //ALMACENAR DB
        //ALMACENAR EN ARCHIVOS





       

    }
}