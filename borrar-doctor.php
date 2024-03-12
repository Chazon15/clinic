<?php 
	$id=$_POST['id'];
	echo $id;
	$mysqli = new mysqli("localhost", "root", "chazon2020", "iberico");

	if ($mysqli->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	$sql = "DELETE FROM  doctores where idDoctor='".$id."'";
	$resultado=mysqli_query($mysqli,$sql) or die ('Error en el query database');

	$sql2 = "DELETE FROM  fichas where idDoctor='".$id."'";
	$resultado=mysqli_query($mysqli,$sql2) or die ('Error en el query database');
?>