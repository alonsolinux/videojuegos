<?php 
	$mi_conexion = "mysql:dbname=videoJuegos;host=localhost";
	$usuario = "alberto";
	$contraseña = "akon1995";

	try{
		$pdo = new PDO($mi_conexion,$usuario,$contraseña);
	}catch(Excepton $ex){
		echo "Error en la conexion" .$ex-> getMessage();
	}
 ?>