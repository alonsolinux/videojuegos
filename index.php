<?php
	require_once('conexion/con.php'); 
	$title = 'Inicio';
	$title_menu = 'El mundo de los Video Juegos'; 
  	$descripcion = 'Administra todo lo relacionado con los video juegos registrados en el sistema';
?>
<?php 
	//LLENADO DE LA TABLA FINAL
  	$consultas_sql = 'SELECT Videojuego.*,Distribuidor.Nombre_distribuidor,Desarrollo.Nombre_desarrollo FROM Videojuego INNER JOIN Distribuidor ON Distribuidor.idDistribuidor = Videojuego.Distribuidor_idDistribuidor INNER JOIN Desarrollo ON Desarrollo.idDesarrollo = Videojuego.Desarrollo_idDesarrollo WHERE Nombre LIKE :search ORDER by idVideojuego ASC';
		$search = isset($_GET['Nombre'])? $_GET['Nombre']: '';
		$arr[':search']= '%' . $search . '%';
		$statement = $pdo->prepare($consultas_sql);
		$statement->execute($arr);
		$resultado_consulta = $statement->fetchAll();

		//llenado de campos foraneos
		$sql_distribuidor = 'SELECT * FROM Distribuidor';
		$statement_status = $pdo->prepare($sql_distribuidor);
		$statement_status->execute();
		$dist = $statement_status->fetchAll();

		//llenado de campos foraneos
		$sql_desarrollador = 'SELECT * FROM Desarrollo';
		$statement_status = $pdo->prepare($sql_desarrollador);
		$statement_status->execute();
		$desar = $statement_status->fetchAll()

 ?>
<?php 
 	include 'extend/cabecera.php';
?>

<div class="container">
	<div class="col s12 m4 l1"></div>
	
	<div class="col s12 m8 l10">
		<div class="card">
			<div class="card-content">
				<h5 class="card-title">Agregar un nuevo videojuego</h5>
				<form action="/videojuego/contenido/insertar_videojuegos.php" method="post" class="col s5">
					<div class="row">
						<div class="input-field col s6">
							<input placeholder="Clave del Juego" type="text" name="idVideojuego">
						</div>
						<div class="input-field col s6">
							<input placeholder="Consola" type="text" name="Consola">
						</div>
					</div>

					<div class="row">
						<div class="input-field col s4">
							<input placeholder="Nombre" type="text" name="Nombre">
						</div>
						<div class="input-field col s4">
							<input placeholder="Genero" type="text" name="Genero">
						</div>
						<div class="input-field col s4">
							<input placeholder="Clasificacion" type="text" name="Clasificacion">
						</div>
					</div>
					<div class="row">
						<div class="input-field col s4">
							<input placeholder="Descripcion" type="text" name="Descripcion">
						</div>

						<div class=" input-field col s4">
		               		<select name="Distribuidor_idDistribuidor">
		                		<option value="" disabled selected>Eliga un distribuidor</option>
			                	<?php 
									foreach($dist as $rl) {
								?>
		  						<option value="<?php echo $rl['idDistribuidor']?>"><?php echo $rl['Nombre_distribuidor']?>	
	  								</option>
			  					<?php 
							    	}
							    ?>
							</select>
							<label>Distribuidor</label>
						</div>

						<div class=" input-field col s4">
		               		<select name="Desarrollo_idDesarrollo">
		                		<option value="" disabled selected>Eliga un desarrollador</option>
			                	<?php 
									foreach($desar as $lr) {
								?>
		  						<option value="<?php echo $lr['idDesarrollo']?>"><?php echo $lr['Nombre_desarrollo']?>	
	  								</option>
			  					<?php 
							    	}
							    ?>
							</select>
							<label>Dessarrollador</label>
						</div>

					</div>
					<input  name="boton" class="btn waves-effect waves-light cyan" type="submit" value="Agregar"/>
					<input class="btn waves-effect waves-light red" type="submit" value="Cancelar" name="cancelar" />
				</form>
			</div>
		</div>
	</div>
	<div class="col s12 m4 l1"></div>
</div>

<div id="bordered" class="section scrollspy">
	<div class="row">

		<!--<div class="col s12 m4 l1"></div>-->

		<div class="col s12 m8 l10">
			<div class="">
			<div class="">
			<h5 class="">Video Juegos Detalles</h5>
			<table class="responsive-table striped">
				<thead>
					<tr>
					   	<th class="center">Consola</th>
					   	<th class="center">Nombre</th>
					   	<th class="center">Genero</th>
					   	<th class="center">Clasificacion</th>
					   	<th class="center">Descripcion</th>
					   	<th class="center">Distribuidor</th>
					   	<th class="center">Desarrollador</th>
					    <th class="center" colspan="2">Opciones</th>
					</tr>
				</thead>

				<tbody>
					<?php 
				   		foreach($resultado_consulta as $rs2) {
					?>
					<tr>
					 	<td class="center"><?php echo $rs2['Consola']?></td>
						<td class="center"><?php echo $rs2['Nombre']?></td>
						<td class="center"><?php echo $rs2['Genero']?></td>
						<td class="center"><?php echo $rs2['Clasificacion']?></td>
						<td class="center"><?php echo $rs2['Descripcion']?></td>
						<td class="center"><?php echo $rs2['Nombre_distribuidor']?></td>
						<td class="center"><?php echo $rs2['Nombre_desarrollo']?></td>
						<td class="center">
							<a class="btn waves-effect waves-light cyan lighten-1" href="actividad.php?clave_act=<?php echo $rs2['clave_act']; ?>">Editar</a>
						</td>
						<td class="center">
							<a class="btn waves-effect waves-light red" onclick="delete_actividad(<?php echo $rs2['clave_act']; ?>)" href="#">ELIMINAR</a>
						</td>
					</tr>
					<?php 
						}
					?>
				</tbody>
			</table>
		</div>
		</div>
		</div>
		<!--<div class="col s12 m4 l1"></div>-->
	</div>
</div>
<?php 
	include 'extend/pie.php';
?>