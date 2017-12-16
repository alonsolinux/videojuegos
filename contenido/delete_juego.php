<?php 
	require_once('../conexion/con.php');

	$idvideojuego = isset($_GET['idVideojuego']) ? $_GET['idVideojuego']: 0;
	$MYSQL = 'DELETE FROM  Videojuego WHERE idVideojuego = ?';

	$statement = $pdo->prepare($MYSQL);
	$statement->execute(array($idvideojuego));

	$results = $statement->fetchAll();
	header('Location: /../videojuego/index.php');
 ?>