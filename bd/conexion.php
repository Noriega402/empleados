<?php 
	/**
	 * 
	 */
	class Conexion
	{
		public function conectar(){
			try {
				$host="localhost";
				$usuario="root";
				$pass="";
				$db="pdof";

				$conexion= new PDO("mysql:host=$host; dbname=$db",$usuario,$pass);
				//echo "Conectado";
			
			} catch (Exception $e) {
				echo "Error: ".$e->getMessage();
				echo "\n Linea de error: ".$e->getLine();
			}
			return $conexion;
		}
	}
?>