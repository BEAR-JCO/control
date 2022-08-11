<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; FINALIZADOS
    </h3>
</div>

<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs">
        <li>
            <a href="reservation-new"><i class="fas fa-plus fa-fw"></i> &nbsp; NUEVO PRÉSTAMO</a>
        </li>
        <li>
            <a class="active" href="reservation-list"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; FINALIZADOS</a>
        </li>
    </ul>
</div>

 <div class="container-fluid">
	<div class="table-responsive">
		<table class="table table-dark table-sm">
			<thead>
				<tr class="text-center roboto-medium">
					<th>#</th>
					<th>CLIENTE</th>
					<th>FECHA DE PRÉSTAMO</th>
					<th>FECHA DE ENTREGA</th>
					<th>Pago</th>
					<th>Descripcion</th>
					<th>ESTADO</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$ruta= "/xampp/htdocs/DirecciónProyectos/control/config/conexion.php";
					include($ruta);
					$CONS ="SELECT * FROM pagos";        
                ?>   
				      
					<?php $resultado = mysqli_query($conexion, $CONS);
						while($row=mysqli_fetch_assoc($resultado))  {?>
							<tr class="text-center">  
								<td ><?php echo $row["numero"];?></td>
								<td ><?php echo $row["nombre"];?></td>
								<td ><?php echo $row["fechai"];?></td>
								<td ><?php echo $row["fechaf"];?></td>
								<td ><?php echo $row["pago"];?></td>
								<td ><?php echo $row["descripcion"];?></td>
								<td ><?php echo $row["estado"];?></td>
							</tr><br>
							<?php } ?>
				
							
					
			</tbody>
		</table>
	</div>
	
</div>