<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Clínica Odontológica IBERICO</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="assets/plugins/morrisjs/iconos.css" rel="stylesheet" type="text/css">
<link href="assets/plugins/morrisjs/morris.css" rel="stylesheet" />
<link href="assets/css/main.css" rel="stylesheet">
<link href="assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-cyan">

<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-cyan">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Paciencia por favor...</p>
    </div>
</div>
<!-- #END# Page Loader --> 
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- #Float icon -->
<ul id="f-menu" class="mfb-component--br mfb-zoomin" data-mfb-toggle="hover">
  <li class="mfb-component__wrap">
    <a href="#" class="mfb-component__button--main g-bg-cyan">
      <i class="mfb-component__main-icon--resting zmdi zmdi-plus"></i>
      <i class="mfb-component__main-icon--active zmdi zmdi-close"></i>
    </a>
    <ul class="mfb-component__list">
      <li>
        <a href="doctores.php" data-mfb-label="Doctores" class="mfb-component__button--child bg-blue">
          <i class="zmdi zmdi-calendar mfb-component__child-icon"></i>
        </a>
      </li>
      <li>
        <a href="pacientes.php" data-mfb-label="Pacientes" class="mfb-component__button--child bg-orange">
          <i class="zmdi zmdi-account-o mfb-component__child-icon"></i>
        </a>
      </li>

      <li>
        <a href="pagos.php" data-mfb-label="Pagos" class="mfb-component__button--child bg-purple">
          <i class="zmdi zmdi-balance-wallet mfb-component__child-icon"></i>
        </a>
      </li>
    </ul>
  </li>
</ul>
<!-- #Float icon -->

<!-- Top Bar -->
<nav class="navbar clearHeader">
    <div class="col-12">
        <div class="navbar-header"> <a href="javascript:void(0);" class="bars"></a> <a class="navbar-brand" href="index.php">Programa IBERICO 2021</a> </div>
        <ul class="nav navbar-nav navbar-right">
            <!-- Notifications -->
            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications"></i> <span class="label-count">1</span> </a>
                <ul class="dropdown-menu">
                    <li class="header">NOTIFICACIONES</li>
                    <li class="body">
                        <ul class="menu">
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-light-green"><i class="zmdi zmdi-account-add"></i></div>
                                <div class="menu-info">
                                    <h4>Por ahora nada</h4>
                                    <p> <i class="material-icons">access_time</i> hace 14 minutos </p>
                                </div>
                                </a>
							</li>
                            
                        </ul>
                    </li>
                    <li class="footer"> <a href="javascript:void(0);">Ver las Notificaciones</a> </li>
                </ul>
            </li>
			
            
            <li class="dropdown">
				<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-flag"></i><span class="label-count">2</span> </a>
                <ul class="dropdown-menu">
                    <li class="header">COSAS PENDIENTES</li>
                    <li class="body">
                        <ul class="menu tasks">
                            <li> <a href="javascript:void(0);">
                                <h4> Contrato de ortodoncia <small>32%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%"> </div>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <h4>Implementar via web <small>45%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%"> </div>
                                </div>
                                </a> </li>                                                    
                        </ul>
                    </li>
                    <li class="footer"> <a href="javascript:void(0);">Ver todas las cosas pendientes</a> </li>
                </ul>
            </li>
            <!-- #END# Tasks -->
            <li><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings"></i></a></li>
        </ul>
    </div>
</nav>
<!-- #Top Bar -->
<section> 
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar"> 
        <!-- User Info -->
        <div class="user-info">
            <div class="admin-image"> <img src="assets/images/logo.png" alt=""> </div>
            <div class="admin-action-info"> <span>Clínica Odontológica</span>
                <h3>IBERICO</h3>
                <ul>
                    <li><a data-placement="bottom" title="Revisar e-mail" href="#"><i class="zmdi zmdi-email"></i></a></li>
                    <li><a data-placement="bottom" title="Ver perfil" href="#"><i class="zmdi zmdi-account"></i></a></li>                    
                    <li><a href="javascript:void(0);" title="Ir a configuración" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings"></i></a></li>
                    <li><a data-placement="bottom" title="Cerrar Sesión" href="#" ><i class="zmdi zmdi-sign-in"></i></a></li>
                </ul>
            </div>
            <!--div class="quick-stats">
                <h5>Redes sociales</h5>
                <ul>
                    <li >						
						<a href="#" class="fa fa-facebook"></a>
					</li>
                </ul>
				
            </div-->			
        </div>
        <!-- #User Info --> 
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MENÚ PRINCIPAL</li>
                <li class="active open"><a href="index.php"><i class="zmdi zmdi-home"></i><span>INICIO</span></a></li>                                               
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-calendar-check"></i><span>Calendario Citas</span> </a>
                    <ul class="ml-menu">
                        <li><a href="calendario-doctores.php">Calendario Doctores</a></li>                        
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-add"></i><span>Doctores</span> </a>
                    <ul class="ml-menu">
                        <li><a href="doctores.php">Todos los Doctores</a></li>
                        <li><a href="agregar-doctor.php">Agregar Doctor</a></li>                                               
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>Pacientes</span> </a>
                    <ul class="ml-menu">
                        <li><a href="pacientes.php">Todos los pacientes</a></li>
                        <li><a href="agregar-paciente.php">Agregar un paciente</a></li>                                                                  
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-balance-wallet"></i><span>Fichas</span> </a>
                    <ul class="ml-menu">
                        <li> <a href="fichas.php">Agregar Fichas</a></li>
                        <li> <a href="ver-fichas.php">Ver Fichas</a></li>                        
                    </ul>
                </li> 
				<li>
					<a href="informes.php"><i class="zmdi zmdi-balance-wallet"></i><span>Informes</span> </a>                   
                </li>    				
            </ul>
        </div>
        <!-- #Menu -->
    </aside>
    
	
	
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#skins">Colores</a></li>            
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings">Configuración</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane in active in active" id="skins">
                <ul class="demo-choose-skin">
                    <li data-theme="red">
                        <div class="red"></div>
                        <span>Rojo</span> </li>
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Morado</span> </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Azul</span> </li>
                    <li data-theme="cyan" class="active">
                        <div class="cyan"></div>
                        <span>Verde Agua</span> </li>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Plomo</span> </li>
                    <li data-theme="deep-orange">
                        <div class="deep-orange"></div>
                        <span>Anaranjado</span> </li>
                    <li data-theme="blue-grey">
                        <div class="blue-grey"></div>
                        <span>Plomizo</span> </li>
                    <li data-theme="black">
                        <div class="black"></div>
                        <span>Negro</span> </li>
                    <li data-theme="blush">
                        <div class="blush"></div>
                        <span>Rosado</span> </li>
                </ul>
            </div>
      
            <div role="tabpanel" class="tab-pane" id="settings">
                <div class="demo-settings">
                    <p>CONFIGURACIÓN GENERAL</p>
                    <ul class="setting-list">
                        <li> <span>Panel de usuarios</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                        <li> <span>Redirigir e-mails</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>CONFIGURACIÓN DEL SISTEMA</p>
                    <ul class="setting-list">
                        <li> <span>Notificaciones</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                        <li> <span>Actualizaciones</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>CONFIGURACIÓN DE CUENTAS</p>
                    <ul class="setting-list">
                        <li> <span>Remoto</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                        <li> <span>Dar permisos auto</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <!-- #END# Right Sidebar --> 
</section>

<section class="content home">
    <div class="container-fluid">
		<div class="block-header">
            <h2>VER FICHAS</h2>
			<br />
            <big class="text-muted">Se puede ver las fichas ordenadas por la primera letra del apellido de los pacientes</big> <br />
			<small>				
				<li>Simplemente hacer clic en la letra de interés</li>				
				
			</small>
        </div>
	 <div class="contenedorNumeros">
			<ul class="list-group-item">
			<li class="list-group-item g-bg-cyan"><a href="ver-fichas-ordenadas.php?letra=A">A</a></li>
			<li class="list-group-item g-bg-cyan"><a href="ver-fichas-ordenadas.php?letra=B">B</a></li>
			<li class="list-group-item g-bg-cyan"><a href="ver-fichas-ordenadas.php?letra=C">C</a></li>
			<li class="list-group-item g-bg-cyan"><a href="ver-fichas-ordenadas.php?letra=D">D</a></li>
			<li class="list-group-item g-bg-cyan"><a href="ver-fichas-ordenadas.php?letra=E">E</a></li>
			<li class="list-group-item g-bg-cyan"><a href="ver-fichas-ordenadas.php?letra=F">F</a></li>
			<li class="list-group-item g-bg-cyan"><a href="ver-fichas-ordenadas.php?letra=G">G</a></li>
			<li class="list-group-item g-bg-cyan"><a href="ver-fichas-ordenadas.php?letra=H">H</a></li>
			<li class="list-group-item g-bg-cyan"><a href="ver-fichas-ordenadas.php?letra=I">I</a></li>
			<li class="list-group-item g-bg-cyan"><a href="ver-fichas-ordenadas.php?letra=J">J</a></li>
			<li class="list-group-item g-bg-cyan"><a href="ver-fichas-ordenadas.php?letra=K">K</a></li>
			<li class="list-group-item g-bg-cyan"><a href="ver-fichas-ordenadas.php?letra=L">L</a></li>
			<li class="list-group-item g-bg-cyan"><a href="ver-fichas-ordenadas.php?letra=M">M</a></li>
			<li class="list-group-item g-bg-cyan"><a href="ver-fichas-ordenadas.php?letra=N">N</a></li>
			<li class="list-group-item g-bg-cyan"><a href="ver-fichas-ordenadas.php?letra=Ñ">Ñ</a></li>
			<li class="list-group-item g-bg-cyan"><a href="ver-fichas-ordenadas.php?letra=O">O</a></li>
			<li class="list-group-item g-bg-cyan"><a href="ver-fichas-ordenadas.php?letra=P">P</a></li>
			<li class="list-group-item g-bg-cyan"><a href="ver-fichas-ordenadas.php?letra=Q">Q</a></li>
			<li class="list-group-item g-bg-cyan"><a href="ver-fichas-ordenadas.php?letra=R">R</a></li>
			<li class="list-group-item g-bg-cyan"><a href="ver-fichas-ordenadas.php?letra=S">S</a></li>
			<li class="list-group-item g-bg-cyan"><a href="ver-fichas-ordenadas.php?letra=T">T</a></li>
			<li class="list-group-item g-bg-cyan"><a href="ver-fichas-ordenadas.php?letra=U">U</a></li>
			<li class="list-group-item g-bg-cyan"><a href="ver-fichas-ordenadas.php?letra=V">V</a></li>
			<li class="list-group-item g-bg-cyan"><a href="ver-fichas-ordenadas.php?letra=W">W</a></li>
			<li class="list-group-item g-bg-cyan"><a href="ver-fichas-ordenadas.php?letra=X">X</a></li>
			<li class="list-group-item g-bg-cyan"><a href="ver-fichas-ordenadas.php?letra=Y">Y</a></li>
			<li class="list-group-item g-bg-cyan"><a href="ver-fichas-ordenadas.php?letra=Z">Z</a></li>
			</ul>
		</div>
		
<!-- PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP-->
        <div class="row clearfix">
		
		<?php
			$mysqli = new mysqli("localhost", "root", "chazon2020", "iberico");			
		
			if ($mysqli->connect_errno) {
			echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
			}
			
			$sql = "SELECT * FROM  fichas";
			$resultado=mysqli_query($mysqli,$sql) or die ('Error en el query database');
			
			$nomDoctor="";
			$apellDoctor="";
			$nomPaciente="";
			$apellPaciente="";
			$nomTratamiento="";
			$moneda="";
			$sexo="";						
			
			$dia=0;
			$mes=0;
			$ano=0;
			?>
			<table id="fichas" class='table table-responsive-sm'>
						<thead class="thead-dark">							 
							<tr>
							<th scope="col">Género</th>							
							<th scope="col">Doctor</th>
							<th scope="col">Paciente</th>
							<th scope="col">Debe</th>
							<th scope="col">Haber</th>
							<th scope="col">Saldo</th>
							<th scope="col">Moneda</th>
							<th scope="col">Fecha</th>
							<th scope="col">Tratamiento</th>
							<th scope="col">Observaciones</th>
							<th scope="col"> </th>
							</tr>
						</thead>
						<tbody>
			<?php
			while( $fila = $resultado->fetch_assoc()){
				
				$idDoctor=$fila['idDoctor'];	
				$idPaciente=$fila['idPaciente'];
				$idTratamiento=$fila['tratamiento'];
				include 'mostrar-Doctores.php';
				
				$fecha=$fila['fecha'];
				$ano=substr($fecha, -10, -6);
				$mes=substr($fecha, -5, -3);
				$dia=substr($fecha, -2);
				
				?>
				
							<tr>
								<td>
								<?php
									if ( $sexo != 10){
										echo"<a href='#' class='p-profile-pix'><img src='assets/images/sm/avatar4.jpg' alt='user' class='img-thumbnail img-fluid'></a>";}									
									else{
										echo"<a href='#' class='p-profile-pix'><img src='assets/images/sm/avatar1.jpg' alt='user' class='img-thumbnail img-fluid'></a>";}
								?>		
								</td>
							
								<?php
								echo"<form  method='post' action='borrar-fichas.php' id='f3' name='fmodfichas' class='formulario'>";/*FORMULARIO EDICION DOCTORES*/									
								/*echo"<td width=40px>";									
										echo"<input style='border: none; background: transparent; width:40px;' type='text' name='idFicha' value='".$fila['idFicha']."'>";																			
								echo"</td>";*/
								echo"<td>";								
									
										echo"<input style='border: none; background: transparent; width:90%;' type='text' name='Apellidos' value='".$nomDoctor." ".$apellDoctor."'>";										
																
								echo"</td>";
								echo"<td>";								
																		
										echo"<input style='border: none; background: transparent; width:90%;' type='text' name='direccion' value='".$nomPaciente." ".$apellPaciente."'>";										
									
								echo"</td>";
								echo"<td width=50px>";
																		
										echo"<input style='border: none; background: transparent; width:50px;' type='text' name='telefono' value='".$fila['Debe']."'>";						
									
								echo"</td>";
								echo"<td width=50px>";
									
										echo"<input style='border: none; background: transparent; width:50px;' type='text' name='telefono' value='".$fila['Haber']."'>";						
									
								echo"</td>";
								echo"<td width=60px>";
									
										echo"<input style='border: none; background: transparent; width:60px;' type='text' name='telefono' value='".$fila['Saldo']."'>";						
									
								echo"</td>";
								echo"<td width=60px>";
									
										echo"<input style='border: none; background: transparent; width:60px;' type='text' name='telefono' value='".$moneda."'>";						
									
								echo"</td>";
								echo"<td width=98px>";
									
										echo"<input style='border: none; background: transparent; width:98px;' type='text' name='ciudad' value='".$dia."/".$mes."/".$ano."'>";						
									
								echo"</td>";
								echo"<td>";
									
										echo"<input style='border: none; background: transparent; width:90%;' type='text' name='ciudad' value='".$nomTratamiento."'>";						
									
								echo"</td>";
								echo"<td width=250px>";
																			
										echo"<input style='border: none; background: transparent; width:90%;' type='text' name='ciudad' value='".$fila['observacion']."'>";						
									
								echo"</td>";															
								echo"<td>";	
									echo"<input type='hidden' name='idDoctor' value='".$fila['idFicha']."'>";									
									
									echo"<button type='submit' class='btn btn-raised g-bg-cyan'>BORRAR</button>";
								echo"</td>";
									echo"</form>"; /* FORMULARIO */
								echo"</div>";
							echo"</tr>";
									
			}
					echo"</tbody>";
				echo"</table>";	
			mysqli_close( $mysqli );
         ?>   
        </div>     
       <!-- PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP-->
	</div>
</section>

<div class="color-bg"></div>


<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/morphingsearchscripts.bundle.js"></script> <!-- morphing search Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script> <!-- Sparkline Plugin Js -->
<script src="assets/plugins/chartjs/Chart.bundle.min.js"></script> <!-- Chart Plugins Js --> 

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/bundles/morphingscripts.bundle.js"></script><!-- morphing search page js --> 
<script src="assets/js/pages/index.js"></script>
<script src="assets/js/pages/charts/sparkline.min.js"></script>
</body>
</html>