<?php
date_default_timezone_set("America/Lima");
$hoy = getdate();
$dia=$hoy['mday'];
$mes=$hoy['mon'];
$anyo=$hoy['year'];

	$sqlDoctores = "SELECT * FROM doctores where idDoctor=$idDoctor";
	$resultadoDoctores = mysqli_query($mysqli,$sqlDoctores) or die ('Error en el query database');
	$nombreDoctores="";
	$apellidoDoctores="";
	while( $filaDoctores = $resultadoDoctores->fetch_assoc()){
		$nombreDoctores=$filaDoctores['Nombres'];
		$apellidoDoctores=$filaDoctores['Apellidos'];
	}

		
?>