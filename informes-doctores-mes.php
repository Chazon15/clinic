<?php
date_default_timezone_set("America/Lima");
$hoy = getdate();
$dia=$hoy['mday'];
$mes=$hoy['mon'];
$anyo=$hoy['year'];
header('Content-type: application/vnd.ms-excel;charset=iso-8859-15');
//header('Content-type: application/vnd.ms-excel;charset=utf8');
header('Content-Disposition: attachment; filename=informes_doctores_'.$dia.'_'.$mes.'_'.$anyo.'.xls');

$numPacientes=0;
$plataGenerada=0;

$mysqli = new mysqli("localhost", "root", "chazon2020", "iberico");	
		if ($mysqli->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}
		$sql = "SELECT * FROM doctores";
		$resultado=mysqli_query($mysqli,$sql) or die ('Error en el query database');
		
echo"<table border='1' cellpadding='1' cellspacing='0' class='table table-striped table-bordered'>
		<caption>Informe MENSUAL ($dia/$mes/$anyo) de Doctores</caption>";
echo"<tr>";
	echo"<th>Nombres de los doctores</th>";
	echo"<th>Apellidos de los doctores</th>";
	echo"<th>Numero de pacientes</th>";
	echo"<th>Dinero generado</th>";
echo"</tr>";
		while( $fila = $resultado->fetch_assoc()){
			$idDoctor=$fila['idDoctor'];
			include 'include-fichas-mes.php';
			echo"<tr>";
				echo"<td>$fila[Nombres]</td>"; 
				echo"<td>$fila[Apellidos]</td>";
				echo"<td>$numPacientes</td> ";
				echo"<td>$plataGenerada</td> ";
			echo"</tr>";
		}
echo"</table>";

// a

		date_default_timezone_set("America/Lima");
		$hoy = getdate();
		$dia=$hoy['mday'];
		$mes=$hoy['mon'];
		$anyo=$hoy['year'];
		$sqlTabla2 = "SELECT * FROM  fichas where MONTH(fecha)=$mes";
		$resultadoTabla2=mysqli_query($mysqli,$sqlTabla2) or die ('Error en el query database');
		
echo"<table border='1' cellpadding='1' cellspacing='0' class='table table-striped table-bordered'>
		<caption>Informe MENSUAL ($dia/$mes/$anyo) DETALLADO</caption>";
echo"<tr>";
	echo"<th>Nombres de los doctores</th>";
	echo"<th>Apellidos de los doctores</th>";
	echo"<th>Nombres de los pacientes</th>";
	echo"<th>Apellidos de los pacientes</th>";
	echo"<th>Tratamiento</th>";
	echo"<th>Fecha</th>";
	echo"<th>Costo</th>";	
	echo"<th>Haber</th>";
	echo"<th>Saldo</th>";
	echo"<th>moneda</th>";
	echo"<th>Observaciones</th>";
echo"</tr>";
	
	$idDoctor="";
	$idPaciente="";
	$idTratamiento="";
	$nombreDoctores="";
	$apellidoDoctores="";
	$nombrePacientes="";
	$apellidoPacientes="";
	$nombreTratamientos="";
	$precioTratamiento="";
	$monedaTratamiento="";
		while( $filaTabla2 = $resultadoTabla2->fetch_assoc()){
			$idDoctor=$filaTabla2['idDoctor'];
			$idPaciente=$filaTabla2['idPaciente'];
			$idTratamiento=$filaTabla2['tratamiento'];
			include 'include-tabla-doctores.php';
			include 'include-tabla-pacientes.php';
			include 'include-tabla-tratamientos.php';
			echo"<tr>";
				echo"<td>$nombreDoctores</td>"; 
				echo"<td>$apellidoDoctores</td>";
				echo"<td>$nombrePacientes</td> ";
				echo"<td>$apellidoPacientes</td> ";
				echo"<td>$nombreTratamientos</td> ";
				echo"<td>$filaTabla2[fecha]</td> ";
				echo"<td>$precioTratamiento</td> ";				
				echo"<td>$filaTabla2[Haber]</td> ";
				echo"<td>$filaTabla2[Saldo]</td> ";
				echo"<td>$monedaTratamiento</td> ";
				echo"<td>$filaTabla2[observacion]</td> ";
			echo"</tr>";
		}
echo"</table>";

mysqli_close( $mysqli );
?>