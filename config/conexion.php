<?php
include("SERVER.php");
$conexion = new mysqli($SERVER,$USER,$PASS,$DB);

if (mysqli_connect_errno()){
    echo "no conectado", mysqli_connect_error();
    exit();
}