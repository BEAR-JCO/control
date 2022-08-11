<?php
$ruta= "/xampp/htdocs/DirecciónProyectos/control/config/conexion.php";
include($ruta);


$id_us  = $_POST['id_us'];
$nombre= $_POST["N-usuario"]; 
$apellido= $_POST["N-apellido"];
$correo = $_POST["correo"];
$telefono= $_POST["tel"];
$esta = $_POST["estado"];
$usuario = $_POST["usuario"];
$contrase = $_POST["contrase"];
// conecion con la base de datos para poder llevaer los datos de la variables a la base de datos

$insertar ="INSERT INTO usuarios (id_us,nombre,apellido,correo,telefono,estado,usuario,contrase) 
VALUE ('$id_us','$nombre','$apellido','$correo','$telefono','$esta','$usuario','$contrase')";

$resultado=mysqli_query($conexion,$insertar);
if ($resultado){
    header("location: ../../user-new");
}else {
    echo"<script>alert('no se pudo resgistrar');window.history.go(-1);</script>";
}