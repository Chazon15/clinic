<?php
if(!empty($_GET['id'])){
	
   $mysqli = new mysqli("localhost", "root", "chazon2020", "iberico");
	
		if ($mysqli->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}
		
		$idDoctor=$_GET['id'];
		$sql = "SELECT * FROM  doctores where idDoctor='".$idDoctor."'";
		$resultado=mysqli_query($mysqli,$sql) or die ('Error en el query database');
    
       
    if($resultado->num_rows > 0){
        $fila = $resultado->fetch_assoc();
        
        //Mostrar Imagen
        header("Content-type: image/jpg"); 
        echo $fila['imagen']; 
    }else{
        echo 'Imagen no existe...';
    }
}
?>