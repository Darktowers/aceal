
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="estilo/diseño.css">
	<meta charset="utf-8" />
	<title>ACEAL APP</title>
</head>
<body>
<center><h1>Bienvenido a <br> ACEAL APP</h1></center>
<br>
	<form method="POST" action="val_estu.php" class="formulario1">
		<h2>Ingrese como Estudiante</h2>
		<table>
			<tr>
			<td>ingrese cedula</td>
			<td><input type="text" name="id" placeholder="ingrese cedula" required></td>
			<td><input type="submit" name="login_estu" value="ingresar"></td>
			</tr>
		</table>
		<td></td>
	</form>
	<form method="POST" action="validar.php" class="formulario2">
	<h2>Ingrese como Docente</h2>		
		<table>
			<tr>
				<td>Usuario</td>
				<td><input type="text" name="user" placeholder="usuario"></td>
			</tr>
			<tr>
				<td>Contraseña</td>
				<td><input type="password" name="password" placeholder="contraseña" required></td>
				<td><input type="submit" name="login" value="ingrese"/></td>
			</tr>
		</table>
	</form>
</body>
</html>