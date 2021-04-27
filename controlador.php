<?php
//incluye la clase Libro y CrudLibro
require_once('consultas.php');
require_once('usuarios.php');

$crud= new consultas();
$usuario= new usuarios();

	// si el elemento insertar no viene nulo llama al crud e inserta un libro
	if (isset($_POST['insertar'])) {
		$usuario->setNombre($_POST['nombre']);
		$usuario->setLastname($_POST['lastname']);
		$usuario->setAge($_POST['age']);
		//llama a la función insertar definida en el crud
		$crud->insertar($usuario);
		header('Location: index.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro
	}elseif(isset($_POST['actualizar'])){
		$usuario->setId($_POST['id']);
		$usuario->setNombre($_POST['nombre']);
		$usuario->setLastname($_POST['lastname']);
		$usuario->setAge($_POST['edicion']);
		$crud->actualizar($usuario);
		header('Location: index.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un libro
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: index.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}
?>