<?php
    require_once "./modelo/vistasModelo.php";
    
    class vistaControlador extends vistasModelo{
        /* estammos creando una clase que hereda valores de vista modelo 
        la parabra extends es para heredar valosres de otra clase */

        /* -------- controlador obtener plantilla -----*/
        public function obtener_pantilla_controlador(){
            return require_once "./vistas/plantilla.php";
        }

        /* -------- controlador obtener  vista ----*/
        public function obtener_vista_controlador(){
            if (isset($_GET['views'])){
                $ruta = explode("/",$_GET['views']);
                $respuesta = vistasModelo ::obtener_vista_modelo($ruta[0]);
            }else{
                $respuesta = "login";
            }
            return $respuesta;
        } 
    }