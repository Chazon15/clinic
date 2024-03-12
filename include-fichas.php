<?php

		
		/*$sql2 = "SELECT * FROM  doctores where idDoctor=$idDoctor";
		$resultado2=mysqli_query($mysqli,$sql2) or die ('Error en el query database');
		
		$sql3 = "SELECT * FROM  pacientes where idPaciente=$idPaciente";
		$resultado3=mysqli_query($mysqli,$sql3) or die ('Error en el query database');

		$sql4 = "SELECT * FROM  tratamientos where idTratamiento=$idTratamiento";
		$resultado4=mysqli_query($mysqli,$sql4) or die ('Error en el query database');
		
		while( $fila2 = $resultado2->fetch_assoc()){
			
				$nomDoctor=$fila2['Nombres'];		
				$apellDoctor=$fila2['Apellidos'];		
			
		}
		
		while( $fila3 = $resultado3->fetch_assoc()){
			
				$nomPaciente=$fila3['Nombres'];		
				$apellPaciente=$fila3['Apellidos'];	
				$sexo=$fila3['sexo'];
			
		}
		
		while( $fila4 = $resultado4->fetch_assoc()){
			
				$nomTratamiento=$fila4['Nombre'];	
				$moneda=$fila4['moneda'];
			
		}*/

		$sql2 = "SELECT * FROM  fichas where idDoctor=$idDoctor";
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