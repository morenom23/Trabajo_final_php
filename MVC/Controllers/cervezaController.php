<?php
    require_once __DIR__ ."/../models/cerveza.php";
    class cervezaController{
        public function listarCerveza(){
            //Listar las cervezas

            $cervezas = [
                new cerveza ("POKER", "Babaria"),
                new cerveza ("CLUB COLOMBIA","Babaria"),
                
            ];

            require_once __DIR__ ."/../views/crearCerveza.php";
        }

        public function obtenerCervezaNombre($nombre){
            
        }

    }

    
    