<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

//conexion a la base de datos esto lo vamos hacer de pede como esa organisada el servidor ok
//$ generamos dis varuables un ade condecion y la otra a consulta de la tabla
// vamos a llamar los dos variable para ajecutar
$conexion=mysqli_connect("localhost","root","","administracion");
$consulta="SELECT * FROM usuarios WHERE correo='$usuario' and contrase='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if ($filas>0){
    header("location: ../../home");
}    
else {
    header("location: ../../login");
}
mysqli_free_result($resultado);
mysqli_close($conexion);