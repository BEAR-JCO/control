<div class="full-box page-header">
	<h3 class="text-left">
		<i class="fas fa-plus fa-fw"></i> &nbsp; NUEVO USUARIO
	</h3>
</div>

<div class="container-fluid">
	<ul class="full-box list-unstyled page-nav-tabs">
		<li>
			<a class="active" href="user-new"><i class="fas fa-plus fa-fw"></i> &nbsp; NUEVO USUARIO</a>
		</li>
		
	</ul>	
</div>

<div class="container-fluid">
	<form action="http://localhost/DirecciónProyectos/control/vistas/sql/user.php" class="form-neon" autocomplete="off" method="post">
		<fieldset>
			<legend><i class="far fa-address-card"></i> &nbsp; Información personal</legend>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="usuario_dni" class="bmd-label-floating">DNI</label>
							<input type="text" pattern="[0-9-]{1,20}" class="form-control" name="id_us" id="usuario_dni" maxlength="20">
						</div>
					</div>
					
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="usuario_nombre" class="bmd-label-floating">Nombres</label>
							<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control" name="N-usuario" id="usuario_nombre" maxlength="35">
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="usuario_apellido" class="bmd-label-floating">Apellidos</label>
							<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control" name="N-apellido" id="usuario_apellido" maxlength="35">
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="form-group">
							<label for="usuario_telefono" class="bmd-label-floating">Teléfono</label>
							<input type="text" pattern="[0-9()+]{8,20}" class="form-control" name="tel" id="usuario_telefono" maxlength="20">
						</div>
					</div>
					
				</div>
			</div>
		</fieldset>
		<br><br><br>
		<fieldset>
			<legend><i class="fas fa-user-lock"></i> &nbsp; Información de la cuenta</legend>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-md-6">
						<div class="form-group">
							<label for="usuario_usuario" class="bmd-label-floating">Nombre de usuario</label>
							<input type="text" pattern="[a-zA-Z0-9]{1,35}" class="form-control" name="usuario" id="usuario_usuario" maxlength="35">
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="form-group">
							<label for="usuario_email" class="bmd-label-floating">Email</label>
							<input type="email" class="form-control" name="correo" id="usuario_email" maxlength="70">
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="form-group">
							<label for="usuario_clave_1" class="bmd-label-floating">Contraseña</label>
							<input type="password" class="form-control" name="contrase" id="usuario_clave_1" maxlength="100" required="" >
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="form-group">
							<select class="form-control" name="estado">
								<option value="" selected="" disabled="">Seleccione una opción</option>
								<option value="1">Activo</option>
								<option value="2">Baja</option>
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
			<button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save" name="guardar"></i> &nbsp; GUARDAR</button>
		</p>
	</form>
</div>