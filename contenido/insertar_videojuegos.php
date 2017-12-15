<?php 
	require_once('../conexion/con.php');

	if($_POST['cancelar'] == 'Cancelar'){
		header('location: /../videojuego/index.php');
	}else{

			$mi_variable = 'INSERT INTO Videojuego(idVideojuego,Consola,Nombre,Genero,Clasificacion,Descripcion,Distribuidor_idDistribuidor,Desarrollo_idDesarrollo) VALUES (?,?,?,?,?,?,?,?)';
			$id_video = isset($_POST['idVideojuego']) ? $_POST['idVideojuego']: '';
			$consola = isset($_POST['Consola']) ? $_POST['Consola']: '';
			$nombre = isset($_POST['Nombre']) ? $_POST['Nombre']: '';
			$genero = isset($_POST['Genero']) ? $_POST['Genero']: '';
			$clas = isset($_POST['Clasificacion']) ? $_POST['Clasificacion']: '';
			$descrip = isset($_POST['Descripcion']) ? $_POST['Descripcion']: '';
			$dist = isset($_POST['Distribuidor_idDistribuidor']) ? $_POST['Distribuidor_idDistribuidor']: '';
			$desa = isset($_POST['Desarrollo_idDesarrollo']) ? $_POST['Desarrollo_idDesarrollo']: '';

			$statement_insert = $pdo->prepare($mi_variable);
			$statement_insert->execute(array($id_video,$consola,$nombre,$genero,$clas,$descrip,$dist,$desa));
			header('Location: /../videojuego/index.php');
		
	}
 ?>