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
            <h2>Añadir ficha</h2>
            <small class="text-muted">Rellenar los campos</small>
        </div>
        
       
		
	<!-- PHPHPHPH --->
	<?php 
		if ($_GET["idPaciente"] != ""){
	
			$idPaciente=$_GET['idPaciente'];
			$Nombres=$_GET['Nombres'];
			$Apellidos=$_GET['Apellidos'];
			
			$mysqli = new mysqli("localhost", "root", "chazon2020", "iberico");
	
			if ($mysqli->connect_errno) {
			echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
			}
			
			$sql = "SELECT * FROM  doctores";	

				$resultado=mysqli_query($mysqli,$sql) or die ('Error en el query database');			
				
			}
	?>
	
	
	
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>AÑADIR FICHA: <small>Llenar bien los datos. <small> </h2>						
					</div>
					<form action="agregado-ficha.php" method="post" id="f1" name="formulario" class="formulario">
					<div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-4 col-sm-12">
                                <div class="form-group">
									
                                    <div class="form-line">
										<?php 
											echo"<h3>".$Nombres."</h3>";											
											echo"<input name='idPaciente' value='".$idPaciente."' type='hidden'>";
										?>														                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <?php 
											echo"<h3>".$Apellidos."</h3>";											
										?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="haber" type="number" class="form-control"  placeholder="Haber (Cuanto dinero dejo)">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">                            
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="fecha" type="text" class="datepicker form-control"  placeholder="FECHA [DÍA/MES/AÑO]">
                                    </div>
                                </div>
                            </div>                                                    
							<div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group drop-custum">									
                                    <select name="tratamiento" class="form-control show-tick" id="selectBox" onchange="otroTratamiento()">
                                        <option value="">Tratamiento efectuado</option>
                                        <option value="1">Curacion Simple</option>
                                        <option value="2">Curacion Grande</option>
										<option value="4">Inicial Ortodoncia</option>
										<option value="5">Continuacion Ortodoncia</option>
										<option value="6">Mensualidad Ortodoncia</option>
										<option value="7">Exodoncia</option>
										<option value="8">Tercer molar</option>
										<option value="9">Protesis cromo cobalto</option>
										<option value="10">Protesis flexible</option>
										<option value="11">Mantenedor</option>
										<option value="12">Endodoncia</option>
										<option value="13">Corona de Porcelana</option>
										<option value="14">Corona de Zirconio</option>
										<option value="15">Placas miorelajantes</option>
										<option value="16">Fluor</option>
										<option value="17">Sellantes</option>
										<option value="18">Pulpectomia</option>
										<option value="19">Blanqueamiento</option>
										<option value="20">Placa expansora</option>
										<option value="21">Incrustacion</option>
										<option value="22">Otros</option>
                                    </select>
                                </div>
                            </div>  
							<div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group drop-custum">									
                                    <select name="idDoctor" class="form-control show-tick">
                                        <option value="">Doctor</option>
										
											<?php 										
											
												while( $fila = $resultado->fetch_assoc()){
													echo"<option value='".$fila[idDoctor]."'>".$fila['Nombres']."  ".$fila['Apellidos']."  </option>";
													
												}
											?>                                        
                                    </select>
                                </div>
                            </div>	
							
                        </div>		
						<div class="row clearfix">
                            <div id='observacion' class="col-lg-4 col-sm-12" style='display: none;'>
                                <div class="form-group">
									
                                    <div class="form-line">
										<input name="observacion" class="form-control"  placeholder="INGRESA ALGUNA OBSERVACION">													                                       
                                    </div>
                                </div>
                            </div>
							
                            <div id='otroTra' class="col-lg-4 col-sm-12" style="display: none;">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="costo" class="form-control"  placeholder="INGRESA EL COSTO DEL TRATAMIENTO">
                                    </div>
                                </div>
                            </div>
                            
                            
                                   
                        </div>						
                    </div>
					<div class="col-xs-12">
                                <button type="submit" class="btn btn-raised g-bg-cyan">Añadir</button>
                                <button type="submit" class="btn btn-raised">Cancelar</button>
                            </div>
					</form>
				</div>
			</div>
		</div>	
		
		<script>
			function otroTratamiento() {
			var selectBox = document.getElementById("selectBox");
			var valor = selectBox.options[selectBox.selectedIndex].value;			
			var num="22";
				if ( valor == num ){
					document.getElementById("otroTra").style.display="inline-block";										
					document.getElementById("observacion").style.display="inline-block";
					}
				else{
					document.getElementById("otroTra").style.display="none";										
					document.getElementById("observacion").style.display="none";
				}
			}
		</script>		
	
	
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