<div class="full-box page-header">
	<h3 class="text-left">
		<i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE TAREAS
	</h3>
</div>

<div class="container-fluid">
	<ul class="full-box list-unstyled page-nav-tabs">
		<li>
			<a href="client-new"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR TAREA</a>
		</li>
		<li>
			<a class="active" href="client-list"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE TAREAS</a>
		</li>
	</ul>	
</div>

<div class="container-fluid">
	<div class="table-responsive">
		<table class="table table-dark table-sm">
			<thead>
				<tr class="text-center roboto-medium">
					<th>#</th>
					<th>NOMBRE</th>
					<th>APELLIDO</th>
					<th>TAREA</th>
					<th>DESCRIPCION</th>
					<th>ESTADO</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$ruta= "/xampp/htdocs/DirecciónProyectos/control/config/conexion.php";
					include($ruta);
					$CONS ="SELECT * FROM tarea";        
                ?>   
				      
					<?php $resultado = mysqli_query($conexion, $CONS);
						while($row=mysqli_fetch_assoc($resultado))  {?>
							<tr class="text-center">  
								<td ><?php echo $row["numero"];?></td>
								<td ><?php echo $row["nombre"];?></td>
								<td ><?php echo $row["apellido"];?></td>
								<td ><?php echo $row["tarea"];?></td>
								<td ><?php echo $row["descripcion"];?></td>
								<td ><?php echo $row["estado"];?></td>
							</tr><br>
							<?php } ?>
				
			</tbody>
		</table>
	</div>
	<nav aria-label="Page navigation example">
		<ul class="pagination justify-content-center">
			<li class="page-item disabled">
				<a class="page-link" href="#" tabindex="-1">Previous</a>
			</li>
			<li class="page-item"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item">
				<a class="page-link" href="#">Next</a>
			</li>
		</ul>
	</nav>
</div>