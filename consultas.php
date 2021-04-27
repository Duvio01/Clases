<?php
require_once('conexion.php');

	class consultas{

		public function __construct(){}

		// método para insertar, recibe como parámetro un objeto de tipo libro
		public function insertar($usuario){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO listado_usuarios values(NULL,:nombre,:apellido,:edad)');
			$insert->bindValue('nombre',$usuario->getNombre());
			$insert->bindValue('apellido',$usuario->getLastname());
			$insert->bindValue('edad',$usuario->getAge());
			$insert->execute();

		}

		// método para mostrar todos los libros
		public function mostrar(){
			$db=Db::conectar();
			$listaUsuarios=[];
			$select=$db->query('SELECT * FROM listado_usuarios');

			foreach($select->fetchAll() as $usuario){
				$myLibro= new Libro();
				$myLibro->setId($usuario['id']);
				$myLibro->setNombre($usuario['nombre']);
				$myLibro->setLastname($usuario['apellido']);
				$myLibro->setAge($usuario['edad']);
				$listaUsuarios[]=$myLibro;
			}
			return $listaUsuarios;
		}

		// método para eliminar un libro, recibe como parámetro el id del libro
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM listado_usuarios WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}

		// método para actualizar un libro, recibe como parámetro el libro
		public function actualizar($usuario){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE listado_usuarios SET nombre=:nombre, apellido=:apellido,edad=:edad  WHERE ID=:id');
			$actualizar->bindValue('id',$usuario->getId());
			$actualizar->bindValue('nombre',$usuario->getNombre());
			$actualizar->bindValue('apellido',$usuario->getAutor());
			$actualizar->bindValue('edad',$usuario->getAnio_edicion());
			$actualizar->execute();
		}
	}
?>