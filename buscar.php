<?php 

//Recogemos la cadena
$busqueda=$_POST['cadena'];

$mysqli = new mysqli("localhost", "root", "chazon2020", "iberico");
	
		if ($mysqli->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}
		$sql = "SELECT * FROM  pacientes where Apellidos LIKE '%".$busqueda."%'";
$resultado=mysqli_query($mysqli,$sql) or die ('Error en el query database');


	while( $fila = $resultado->fetch_assoc()){
		
		echo "<div class='col-lg-4 col-md-6 col-sm-12'>";
					echo"<div class='card all-patients'>";
						echo"<div class='body'>";
							echo"<div class='row'>";																			
								echo"<div class='col-md-8 col-sm-8 m-b-0'>";	
								
									echo"<h5 class='m-b-0'>";										
										echo"<input style='border: none; background: transparent;' type='text' name='Apellidos' value='".$fila['Nombres']."'>";										
									echo"</h5>";
									
									echo"<h5 class='m-b-0'>";										
										echo"<input style='border: none; background: transparent;' type='text' name='Apellidos' value='".$fila['Apellidos']."'>";										
									echo"</h5>";
									
									echo"<h5 class='m-b-0'>";										
										echo"<input style='border: none; background: transparent;' type='text' name='telefono' value='".$fila['telefono']."'>";										
									echo"</h5>";									
									echo"<a href='agregar-ficha.php?idPaciente=$fila[idPaciente]&Nombres=$fila[Nombres]&Apellidos=$fila[Apellidos]' class='btn btn-raised g-bg-cyan'>+ FICHA</a>";
								echo"</div>";
							echo"</div>";
						echo"</div>";
					echo"</div>";
		echo"</div>";
	}

?>