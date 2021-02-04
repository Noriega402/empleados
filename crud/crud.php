<?php 

	require_once "../bd/conexion.php";
	/**
	 * 
	 */ 
	class Crud extends Conexion{
		
		public function mostrarDatos(){
			$sql = "SELECT id,nombre,sueldo,edad,fRegistro FROM t_crud";

			$stm = Conexion::conectar()->prepare($sql);
			$stm->execute();

			return $stm->fetchAll();
			$stm->close();
		}

		public function insertarDatos($datos){
			//$datos los trae desde ../procesos/insertaDatos.php

			$sql = "INSERT INTO t_crud (nombre,sueldo,edad,fRegistro)
					VALUES (:nombre, :sueldo, :edad, :fRegistro)";

			$stm = Conexion::conectar()->prepare($sql);
			$stm->bindParam(":nombre",$datos["nombre"], PDO::PARAM_STR);
			$stm->bindParam(":sueldo",$datos["sueldo"], PDO::PARAM_STR);
			$stm->bindParam(":edad",$datos["edad"], PDO::PARAM_INT);
			$stm->bindParam(":fRegistro",$datos["fecha"], PDO::PARAM_STR);
			//ultimo parametro es para que tipo de dato es

			return $stm->execute();
			$stm->close();
		}

		public function obtenerDatos($id){
			$sql = "SELECT id,nombre,sueldo,edad,fRegistro FROM t_crud WHERE id = :id";

			$stm = Conexion::conectar()->prepare($sql);
			$stm->bindParam(":id",$id, PDO::PARAM_INT);
			$stm->execute();

			return $stm->fetch();
			$stm->close();
		}

		public function actualizarDatos($datos){
			$sql = "UPDATE t_crud 
					SET nombre = :nombre,
					sueldo = :sueldo,
					edad = :edad,
					fRegistro = :fRegistro
					WHERE id = :id";

			$stm=Conexion::conectar()->prepare($sql);
			$stm->bindParam(":nombre",$datos["nombre"], PDO::PARAM_STR);
			$stm->bindParam(":sueldo",$datos["sueldo"], PDO::PARAM_STR);
			$stm->bindParam(":edad",$datos["edad"], PDO::PARAM_INT);
			$stm->bindParam(":fRegistro",$datos["fRegistro"], PDO::PARAM_STR);
			$stm->bindValue("id",$datos["id"], PDO::PARAM_INT);
			//ultimo parametro es para que tipo de dato es
			
			return $stm->execute();
			$stm->close();
		}

		public function eliminarDatos($id){
			$sql = "DELETE FROM t_crud WHERE id = :id";

			$stm = Conexion::conectar()->prepare($sql);
			$stm->bindParam(":id", $id, PDO::PARAM_INT);
			
			return $stm->execute();
			$stm->close();
		}
	}

?>