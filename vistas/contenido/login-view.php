<div class="login-container">
	<div class="login-content">
		<p class="text-center">
			<i class="fas fa-user-circle fa-5x"></i>
		</p>
		<p class="text-center">
			Inicia sesión con tu cuenta
		</p>
		<form action="/DirecciónProyectos/control/vistas/sql/login.php" method="POST" autocomplete="off" >
			<div class="form-group">
				<label for="UserName" class="bmd-label-floating"><i class="fas fa-user-secret"></i> &nbsp; Usuario</label>
				<input type="text" class="form-control" id="UserName" name="usuario"  maxlength="35" required="" >
			</div>
			<div class="form-group">
				<label for="UserPassword" class="bmd-label-floating"><i class="fas fa-key"></i> &nbsp; Contraseña</label>
				<input type="password" class="form-control" id="UserPassword" name="contraseña" maxlength="100" required="" >
			</div>
			<button type="submit" class="btn-login text-center">LOG IN</button>
		</form>
	</div>
</div>