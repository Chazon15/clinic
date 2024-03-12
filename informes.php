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
        <a href="informes.php" data-mfb-label="Informes" class="mfb-component__button--child bg-purple">
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
        <div class="navbar-header"> <a href="javascript:void(0);" class="bars"></a> <a class="navbar-brand" href="index.php">Programa IBERICO 2020</a> </div>
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
            <div class="quick-stats">
                <h5>Datos de HOY:</h5>
                <ul>
                    <li><span>16<i>Pacientes</i></span></li>
                    <li><span>02<i>Pagos</i></span></li>
                    <li><span>04<i>Citas</i></span></li>
                </ul>
            </div>
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
                        <li> <a href="fichas.php">Fichas</a></li>
                        <li> <a href="ver-fichas.php">Ver Fichas</a></li>                        
                    </ul>
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
            <h2>INFORMES</h2>
            <big class="text-muted">Hacer clic en el botón correspondiente</big> <br />
			<small>
				<ul>
				<li>Al clickear se genera un archivo en excel con los datos</li>
				<li>Los archivos excel tienen nombre significativo y fecha</li>
				<li>Esos archivos se guardan en la carpeta "Descargas" por defecto</li>				
				</ul>
			</small>
        </div>
        
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="zmdi zmdi-account col-blue"></i> </div>
                    <div class="content">
							<div class="text"><a href="informes-doctores-mes.php">INFORME GENERAL - ÚLTIMO MES</a></div>
							<div class="number"><a href="informes-doctores-mes.php">dinero generado - último mes</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="zmdi zmdi-account col-green"></i> </div>
                    <div class="content">                        
						<div class="text"><a href="informes-doctores.php">INFORME GENERAL - HOY</a></div>
                        <div class="number"><a href="informes-doctores.php">dinero generado - hoy</a></div>
                    </div>
                </div>
            </div>
            <!--div class="col-lg-3 col-md-3 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="zmdi zmdi-account col-red"></i> </div>
                    <div class="content">
                        <div class="text"><a href="informes-pacientes-mes.php">INFORME PACIENTES - ÚLTIMO MES</a></div>
                        <div class="number"><a href="informes-pacientes-mes.php">detalles del último mes</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="zmdi zmdi-balance col-cyan"></i> </div>
                    <div class="content">
                        <div class="text"><a href="informes-pacientes.php">INFORME PACIENTES - ÚLTIMO MES</a></div>
                        <div class="number"><a href="informes-pacientes.php">datos de hoy</a></div>
                    </div>
                </div>
            </div-->
        </div>
		
<!-- PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP-->

        <div class="row clearfix">
		
		<?php
			$mysqli = new mysqli("localhost", "root", "chazon2020", "iberico");			
		
			if ($mysqli->connect_errno) {
			echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
			}
			
			//$sql = "SELECT * FROM  pacientes";

			//$resultado=mysqli_query($mysqli,$sql) or die ('Error en el query database');
			
			//while( $fila = $resultado->fetch_assoc()){
				
				
			//}
			echo"<div>Imprimir PDF <a href='pdf-ortodoncia.php'>Clic</a></div>";

			mysqli_close( $mysqli );
			
         ?>   
        </div>   

		<script>
		function eliminar(e){
			//var valor=this.value;
			
			var id=e.value;
			$.ajax({
				type: 'POST',
				url: 'borrar-paciente.php',
				data: 'id='+e.value,
				success: function(respuesta) {					
					alert("Se borro el paciente");					
					location.reload();
			   }
			});	
		}
		
		</script>
		
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