<?php
	$ruta= "/xampp/htdocs/DirecciónProyectos/control/config/conexion.php";
	include($ruta);

    if (isset($_POST["guardar"])){
        $dni = mysqli_real_escape_string($conexion,$_POST['dni']);
        $nombre  = mysqli_real_escape_string($conexion,$_POST['nombre']);
        $apellido = mysqli_real_escape_string($conexion,$_POST['apellido']);
        $telefono = mysqli_real_escape_string($conexion,$_POST['tel']);
        $Nuser = mysqli_real_escape_string($conexion,$_POST['nombre_user']);
        $email = mysqli_real_escape_string($conexion,$_POST['usuario_email']);
        $contraseña = mysqli_real_escape_string($conexion,$_POST['contraseña']);
        $estatus = mysqli_real_escape_string($conexion,$_POST['estado']);

        $verificaruser = "SELECT id_us FROM usuarios WHERE correo = '$email'";
        $resultados = $conexion ->query($verificaruser);
        $filas = $resultados -> num_rows;
        if ($filas > 0){
            echo "<script>
                    alert('el usuario ya exixte');
                    windows.location = 'user-new';
                    </script>            
            ";
        }else{
            $adduser = "INSERT INTO 
                        usuarios
                        (dni,
                        nombre,
                        apellido,
                        correo,
                        telefono,
                        estado,
                        usuario,
                        contrase) 
                        VALUES
                        ('$dni,
                        $nombre,
                        $apellido,
                        $email,
                        $telefono,
                        $estatus,
                        $Nuser,
                        $contraseña')";
                        $listo = $conexion ->query($adduser);
                        if ($listo > 0){
                            echo "<script>
                                    alert('usuario creado');
                                    windows.location = 'user-new';
                                    </script>            
                                ";
                        }else{
                            echo "<script>
                                alert('error a regrristar el usuario');
                                windows.location = 'user-new';
                                </script>            
                            ";
                        }
        }
    }