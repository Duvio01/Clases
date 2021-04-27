<?php
//incluye la clase Libro y CrudLibro
	require_once('consultas.php');
	require_once('usuarios.php');
	$crud= new consultas();
	$usuario=new usuarios();
	//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php
?>
<html>
<head>
	<title>Actualizar Libro</title>
</head>
<body>
	<form action='administrar_libro.php' method='post'>
	<table>
		<tr>
			<input type='hidden' name='id' value='<?php echo $usuario->getId()?>'>
			<td>Nombre libro:</td>usuario
			<td> <input type='text' name='nombre' value='<?php echo $usuario->getNombre()?>'></td>
		</tr>
		<tr>
			<td>Autor:</td>
			<td><input type='text' name='autor' value='<?php echo $usuario->getLastname()?>' ></td>
		</tr>
		<tr>
			<td>Fecha Edición:</td>
			<td><input type='text' name='edicion' value='<?php echo $usuario->getAge() ?>'></td>
		</tr>
		<input type='hidden' name='actualizar' value'actualizar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>
</body>
</html>