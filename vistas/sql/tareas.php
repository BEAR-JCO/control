<?php
$ruta= "/xampp/htdocs/DirecciónProyectos/control/config/conexion.php";
include($ruta);


$numero = $_POST['numero'];
$usuario= $_POST["N-usuario"]; 
$apellido= $_POST["N-apellido"];
$tarea = $_POST["tarea"];
$des= $_POST["des"];
$esta = $_POST["estado"];
// conecion con la base de datos para poder llevaer los datos de la variables a la base de datos

$insertar ="INSERT INTO tarea (numero,nombre,apellido,tarea,descripcion,estado) 
VALUE ('$numero','$usuario','$apellido','$tarea','$des','$esta')";

$resultado=mysqli_query($conexion,$insertar);
if ($resultado){
    header("location: ../../client-new");
}else {
    echo"<script>alert('no se pudo resgistrar');window.history.go(-1);</script>";
}