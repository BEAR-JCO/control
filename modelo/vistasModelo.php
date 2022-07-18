<?php
    class vistasModelo{

        protected static function obtener_vista_modelo($vistas){
            $listapaginas = [];
            if (in_array($vistas, $listapaginas)){
                /* si esta en la lista va a mostar la pagina*/
                if (is_file("./vistas/contenido/".$vistas."-view.php")) {
                    $contenido = "./vistas/contenido/".$vistas."-view.php";
                }else{
                    $contenido ="404";
                }

            }elseif ($vistas == "login" || $vistas == "index"){
                $contenido = "login";
                /* si es login o index muestra el login*/
            }else{
                $contenido ="404";
                /* si no es eso muestra la pagina error*/
            }
            return $contenido;
        }

        
    }