<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php echo COMPANY; ?></title>
    <?php include_once "./vistas/inc/css1.php"; ?>
</head>

<body>
    <?php
		$peticionAjax=false;
		require_once "./controladores/vistasControlador.php";
        $IV = new vistaControlador();

		$vistas=$IV-> obtener_vista_controlador();

		if($vistas=="login" || $vistas=="404"){
			require_once "./vistas/contenido/".$vistas."-view.php";
		}else{
	?>
    <!-- Main container -->
    <main class="full-box main-container">
        <!-- Nav lateral -->
        <?php include_once "./vistas/inc/navlateral.php";?>

        <!-- Page content -->
        <section class="full-box page-content">
			<?php 
				include_once "./vistas/inc/pagecontent.php";

				include  $vistas;
			?>
		</section>
    </main>
    <?php
        }
        include_once "./vistas/inc/script1.php"; 
    ?>
</body>
</html>