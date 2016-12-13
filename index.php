<?php
include_once("header.php");
?>
<div class="container-abso">
	<h1>Bienvenido <br> <b>ACEAL APP</b></h1>	
	<div class="container-card">
		<div class="logos">
			<img src="img/aceal.png" alt="">
			<img src="img/genesis.png" alt="">
			<img src="img/lepanto.png" alt="">
			<img src="img/aceal.png" alt="">
		</div>
		<div class="button-cont">
			<div class="btn-normal b_azul b_estudiante">Soy Estudiante</div>
			<div class="btn-normal b_azul_claro b_docente">Soy Docente</div>
		</div>
	</div>
	<p>Todos los derechos reservados</p>


<div class="modal-co">
	<div class="modal-form">
		<div class="form-cont estudiante">
			<i class="fa fa-close close"></i>
			<form method="POST" action="val_estu.php" class="form">
				<h2>Ingrese como Estudiante</h2>
				<input type="text" name="id" placeholder="ingrese cedula" required>
				<input type="submit" name="login_estu" value="ingresar" class="btn-normal b_azul">
			</form>
		</div>	
		<div class="form-cont docente">
			<i class="fa fa-close close"></i>
			<form method="POST" action="validar.php" class="form">
				<h2>Ingrese como Docente</h2>
				<input type="text" name="user" placeholder="Cedula">
				<input type="password" name="password" placeholder="Contraseña" required>
				<input type="submit" name="login" value="ingrese" class="btn-normal b_azul" />
			</form>
			
	</div>
</div>


<?php
include_once("footer.php");
?>