<?php
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
	echo"<th>Doctor</th>";
	echo"<th>Paciente</th>";
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
mysqli_close( $mysqli );
?>