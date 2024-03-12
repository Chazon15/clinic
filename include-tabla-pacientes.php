<?php
date_default_timezone_set("America/Lima");
$hoy = getdate();
$dia=$hoy['mday'];
$mes=$hoy['mon'];
$anyo=$hoy['year'];

	$sqlPacientes = "SELECT * FROM pacientes where idPaciente=$idPaciente";
	$resultadoPacientes = mysqli_query($mysqli,$sqlPacientes) or die ('Error en el query database');
	$nombrePacientes="";
	$apellidoPacientes="";
	while( $filaPacientes = $resultadoPacientes->fetch_assoc()){
		$nombrePacientes=$filaPacientes['Nombres'];
		$apellidoPacientes=$filaPacientes['Apellidos'];
	}

		
?>