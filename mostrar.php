<?php
//incluye la clase Libro y CrudLibro
require_once('consultas.php');
require_once('usuarios.php');
$crud=new consultas();
$usuario= new usuarios();
//obtiene todos los libros con el método mostrar de la clase crud
$listaUsuarios=$crud->mostrar();
?>

<html>
<head>
	<title>Mostrar Usuarios</title>
</head>
<body>
	<table border=1>
		<head>
			<td>ID</td>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Edad</td>
			<td>Actualizar</td>
			<td>Eliminar</td>
		</head>
		<body>
			<?php foreach ($listaUsuarios as $usuario) {?>
			<tr>
				<td><?php echo $usuario->getId() ?></td>
				<td><?php echo $usuario->getNombre() ?></td>
				<td><?php echo $usuario->getLastname() ?></td>
				<td><?php echo $usuario->getAge()?> </td>
				<td><a href="update.php?id=<?php echo $usuario->getId()?>&accion=a">Actualizar</a> </td>
				<td><a href="controlador.php?id=<?php echo $usuario->getId()?>&accion=e">Eliminar</a>   </td>
			</tr>
			<?php }?>
		</body>
	</table>
	<a href="index.php">Volver</a>
</body>
</html>