<html>
<head>
	<title> Ingresar usuario</title>
</head>
<header>
Ingresa los datos del nuevo usuario
</header>
<form action='controlador.php' method='post'>
	<table>
		<tr>
			<td>Nombre</td>
			<td> <input type='text' name='nombre'></td>
		</tr>
		<tr>
			<td>Apellido</td>
			<td><input type='text' name='lastname' ></td>
		</tr>
		<tr>
			<td>Edad</td>
			<td><input type='number' name='age' ></td>
		</tr>
		<input type='hidden' name='insertar' value='insertar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>
 
</html>