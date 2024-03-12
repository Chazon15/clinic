<?php
date_default_timezone_set("America/Lima");
$hoy = getdate();
$dia=$hoy['mday'];
$mes=$hoy['mon'];
$anyo=$hoy['year'];

		$sql2 = "SELECT * FROM  fichas where idDoctor=$idDoctor AND DAY(fecha)=$dia";
		$resultado2=mysqli_query($mysqli,$sql2) or die ('Error en el query database');
		$cont=0;
		$plataGenerada=0;
		$numPacientes=0;
		while( $fila2 = $resultado2->fetch_assoc()){
				$cont++;
				$numPacientes=$cont;
				$plataGenerada=$fila2['Debe']+$plataGenerada;
			
		}	

		
?>