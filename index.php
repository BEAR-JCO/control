<?php
    require_once "./config/APP.php";
    require_once "./controladores//vistasControlador.php";

    $plantilla = new vistaControlador();
    $plantilla -> obtener_pantilla_controlador();