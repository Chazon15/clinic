<?php
date_default_timezone_set("America/Lima");
$hoy = getdate();
$dia=$hoy['mday'];
$mes=$hoy['mon'];
$anyo=$hoy['year'];

	$sqlTratamientos = "SELECT * FROM tratamientos where idTratamiento=$idTratamiento";
	$resultadoTratamientos = mysqli_query($mysqli,$sqlTratamientos) or die ('Error en el query database');
	$nombreTratamientos="";
	$precioTratamiento="";
	$monedaTratamiento="";
	while( $filaTratamientos = $resultadoTratamientos->fetch_assoc()){
		$nombreTratamientos=$filaTratamientos['Nombre'];
		$precioTratamiento=$filaTratamientos['valor'];
		$monedaTratamiento=$filaTratamientos['moneda'];;
	}

		
?>