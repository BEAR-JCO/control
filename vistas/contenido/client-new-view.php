<div class="full-box page-header">
	<h3 class="text-left">
		<i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR TAREA
	</h3>
</div>

<div class="container-fluid">
	<ul class="full-box list-unstyled page-nav-tabs">
		<li>
			<a class="active" href="client-new"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR TAREA</a>
		</li>
		<li>
			<a href="client-list"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE TAREAS</a>
		</li>
	</ul>	
</div>

<div class="container-fluid">
	<form action="http://localhost/DirecciónProyectos/control/vistas/sql/tareas.php" class="form-neon" method="post" >
		<fieldset>
			<legend><i class="fas fa-user"></i> &nbsp; Información de la tarea</legend>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-md-6">
						<div class="form-group">
							<label for="numero" class="bmd-label-floating">DNT</label>
							<input type="text" pattern="[0-9-]{1,27}" class="form-control" name="numero" id="numero" maxlength="27">
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="form-group">
							<label for="N-usuario" class="bmd-label-floating">Nombre</label>
							<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="N-usuario" id="N-usuario" maxlength="40">
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="cliente_apellido" class="bmd-label-floating">Apellido</label>
							<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="N-apellido" id="cliente_apellido" maxlength="40">
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="cliente_telefono" class="bmd-label-floating">Tarea</label>
							<input type="text"  class="form-control" name="tarea" id="cliente_telefono" maxlength="20">
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="cliente_direccion" class="bmd-label-floating">Descripcion</label>
							<input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{1,150}" class="form-control" name="des" id="cliente_direccion" maxlength="150">
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="form-group">
							<select class="form-control" name="estado">
								<option value="" selected="" disabled="">Seleccione una opción</option>
								<option value="Activo">Activo</option>
								<option value="Baja">Baja</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</fieldset>
		<br><br><br>
		<p class="text-center" style="margin-top: 40px;">
			<button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
			&nbsp; &nbsp;
			<button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
		</p>
	</form>
</div>