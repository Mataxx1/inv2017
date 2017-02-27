
<!DOCTYPE HTML>
<html>
<?php
session_start();
?>
<head>
  <title>Invitados Lucas:14</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php"><span class="logo_colour">Invitados</span> Lucas:14</a></h1>
          <h2>Ameca, Jalisco, México <?php $dt = time();
		  $fc=date("Y",$dt); echo $fc;?></h2>
          
        </div>
      </div>
      <nav>
        <ul class="sf-menu" id="nav">
         
         <?php
		if(isset($_SESSION['tipo'])){
			 if($_SESSION['tipo'] == "administrador" ||$_SESSION['tipo'] == "medico" || $_SESSION['tipo'] == "capturista"){	
         echo' <li><a href="#">Citas</a>
          <ul>';
		  		if($_SESSION['tipo'] == "administrador" || $_SESSION['tipo'] == "capturista"){
          		echo '<li><a href="pags/nueva_cita.php">Nueva cita</a></li>';
				}
				if($_SESSION['tipo'] == "administrador" || $_SESSION['tipo'] == "medico"){
				echo '<li><a href="pags/consultar_citas.php">Consultar citas</a></li>';
				}
				if($_SESSION['tipo'] == "administrador"){
				echo '<li><a href="pags/detalle_cita.php">Detalle de citas</a></li>';
				echo '<li><a href="pags/editar_cita.php">Editar citas</a></li>';
				}
         	echo '</ul>
          </li>';
          	if($_SESSION['tipo'] == "administrador" || $_SESSION['tipo'] == "capturista"){
          echo '<li><a href="#">Personas</a>
          	<ul>
		  	<li><a href="#">Pacientes</a>
		  		<ul>
          			<li><a href="pags/alta_paciente.php">Alta paciente</a></li>
          			<li><a href="pags/consultar_pacientes.php">Consultar pacientes</a>
					<li><a href="pags/editar_paciente.php">Editar pacientes</a></li></ul>
          	</li>
			<li><a href="#">Pastores</a>
		  		<ul>
          			<li><a href="pags/alta_pastor.php">Alta pastor</a></li>
					<li><a href="pags/consultar_pastores.php">Consultar pastores</a></li>
					<li><a href="pags/editar_pastor.php">Editar pastores</a></li>
          			</ul>
          	</li>
			<li><a href="#">Acompañantes</a>
          		<ul>
          			<li><a href="pags/alta_acompanante.php">Alta acompañantes</a></li>';
					
					if($_SESSION['tipo'] == "administrador"){
          			echo '<li><a href="pags/consultar_acompaniantes.php">Consultar acompañantes</a></li>';
					echo '<li><a href="pags/editar_acompanante.php">Editar acompañantes</a></li>';
					}//el que se abrió en personas
					echo'</ul>
          	</li>';
			
		  	echo '<li><a href="#">Médicos</a>
          		<ul>
          			<li><a href="pags/alta_medico.php">Alta medico</a></li>';
					if($_SESSION['tipo'] == "administrador"){
          			echo '<li><a href="pags/consultar_medicos.php">Consultar médicos</a></li><li><a href="pags/editar_medico.php">Editar médicos</a></li>';
					}//se cierra el de consultar médicos
					echo '</ul>
          	</li>';
			 }
				}//encierra capturista, medico y administrador
				
			if($_SESSION['tipo'] == "administrador" || $_SESSION['tipo'] == "capturista"){//de aquí en adelante, solo el administrador puede acceder		
			echo '<li><a href="#">Colaboradores</a>
          		<ul>
				
          			<li><a href="pags/alta_colaborador.php">Alta colaboradores</a></li>
          			<li><a href="pags/alta_tipo_colaborador.php">Alta tipo de colaborador</a></li>';
					if($_SESSION['tipo'] == "administrador"){
					echo '<li><a href="pags/consultar_colaboradores.php">Consultar colaboradores</a></li>';
					echo '<li><a href="pags/editar_colaborador.php">Editar colaboradores</a></li>';
					echo '<li><a href="pags/editar_tipo_colaborador.php">Editar tipo de colaborador</a></li>';
					}
				echo '</ul>
          	</li>
			</ul></li>
          <li><a href="#">Especialidades</a>
          <ul>
          <li><a href="pags/alta_padecimiento.php">Nueva especialidad</a></li>
          <li><a href="pags/consultar_padecimiento.php">Consultar especialidades</a></li>
		  <li><a href="pags/editar_padecimiento.php">Editar especialidades</a></li>
		  <li><a href="pags/alta_diagnostico.php">Dar de alta diagnóstico</a></li>
		  <li><a href="pags/consultar_diagnostico.php">Consultar diagnósticos</a></li>
		  <li><a href="pags/editar_diagnostico.php">Editar diagnósticos</a></li></ul></li>
		  
		  <li><a href="#">Iglesias</a>
          <ul>
		  <li><a href="pags/alta_iglesia_cristiana.php">Alta iglesia cristiana</a></li>';
		  if($_SESSION['tipo'] == "administrador"){
		  echo '<li><a href="pags/consultar_iglesia_cristiana.php">Directorio de iglesias cristianas</a></li>';
		   echo '<li><a href="pags/editar_iglesia_cristiana.php">Editar iglesias cristianas</a></li>';
		  }
          echo '<li><a href="pags/alta_iglesia.php">Alta iglesia no cristiana</a></li>';
			if($_SESSION['tipo'] == "administrador"){
			echo'<li><a href="pags/consultar_iglesia_no_cristiana.php">Directorio  iglesias no cristianas</a></li>';
			echo'<li><a href="pags/editar_iglesia_no_cristiana.php">Editar  iglesias no cristianas</a></li>';
			}
		  		 echo '</ul></li>

		  <li><a href="#">Grupos</a>
          <ul>
          <li><a href="pags/nuevo_grupo.php">Nuevo grupo</a></li>';
          if($_SESSION['tipo'] == "administrador"){
		  echo '<li><a href="pags/registrar_a_grupo.php">Inscribir paciente a un grupo</a></li>
		  <li><a href="registrar_acomp_grupo.php">Inscribir acompañante a un grupo</a></li>
		  <li><a href="autoregistrar_a_grupo.php">Inscribir persona a un grupo</a></li>
		  <li><a href="pags/ver_grupos.php">Ver grupos</a></li>
		  <li><a href="pags/asistencia_grupos.php">Registrar asistencia</a></li>
		  <li><a href="pags/lista_asistentes.php">Lista de asistencias</a></li>
		  <li><a href="pags/editar_grupo.php">Renombrar grupo</a></li>';
		  }
		  echo '</ul></li>
          <li><a href="#">Equipo</a>
            <ul>
			  <li><a href="pags/alta_equipo.php">Dar de alta equipo</a></li>
			  <li><a href="pags/alta_categoria_equipo.php">Dar de alta categoría</a></li>
              ';
			 if($_SESSION['tipo'] == "administrador"){
			  echo'
              <li><a href="pags/consultar_equipo.php">Consultar equipo</a></li>
			   <li><a href="pags/editar_equipo.php">Editar equipo</a></li>
			   <li><a href="pags/prestamo.php">Nueva entrega</a></li>
		   <li><a href="pags/editar_prestamo.php">Editar entrega</a></li>
		   <li><a href="pags/consultar_prestamos.php">Consultar entregas</a></li>';
			 }
           echo ' </ul>
          </li>
          
          
		  <li><a href="#">Sistema</a>
		  <ul>
		  <li><a href="pags/alta_difusion.php">Alta medio de difusión</a></li>
		  <li><a href="pags/alta_usuario.php">Dar de alta usuarios</a></li>';
		  if($_SESSION['tipo'] == "administrador"){
		  echo '<li><a href="pags/editar_usuario.php">Editar usuarios</a></li>
		  <li><a href="pags/consultar_usuarios.php">Ver a los usuarios</a></li>
		  <li><a href="pags/estadisticas.php">Estadísticas</a></li>';
		  }
		  echo '<li><a href="pags/cambia_contra.php">Cambiar mi contraseña</a></li>
		 ';// </ul>
		  //</li>
			}
			echo '';
		 }
		  if(isset($_SESSION['tipo'])){
			  if($_SESSION['tipo']=='medico'){
				  echo '</li> <li><a href="pags/salir.php">Salir</a></li>';
				  }else{
         echo '</ul></li> <li><a href="pags/salir.php">Salir</a></li>';
				  }
		  }else{
			  echo '<li class="selected"><a href="index.php">Inicio</a></li>';
			  
			  echo '<li><a href="login.php">Ingresar</a></li>';
			  }
			  
          ?>
        </ul>
      </nav>
    </header>
    <div id="site_content">
      <ul id="images">
        <li><img src="images/1.jpg" width="600" height="150" alt="seascape_one" /></li>
        <li><img src="images/2.jpg" width="600" height="150" alt="seascape_two" /></li>
        <li><img src="images/3.jpg" width="600" height="150" alt="seascape_three" /></li>
        <li><img src="images/4.jpg" width="600" height="150" alt="seascape_four" /></li>
        <li><img src="images/5.jpg" width="600" height="150" alt="seascape_five" /></li>
        <li><img src="images/6.jpg" width="600" height="150" alt="seascape_seascape" /></li>
      </ul>
      <div id="sidebar_container">
        <div class="sidebar">
          <h3>Acerca de nosotros</h3>
          <h4>Origen del nombre</h4>
          <h5></h5>
          <p>Origen del nombre<br /><a target="_blank" href="https://www.biblegateway.com/passage/?search=Luke+14&version=RVR1960">Ir a la Biblia</a></p>
          <h4>Otro enlace</h4>
          <h5>Año-mes-día</h5>
          <p>Pequeña descripción de algún enlace de interés, como acceso a un mapa con la ubicación.<br /><a href="#">Leer más</a></p>
        </div>
      </div>
      <div class="content">
        <h1>¿Por qué el nombre?</h1>
       <p><a target="_blank" href="https://www.biblegateway.com/passage/?search=Luke+14&version=RVR1960">Ir a la Biblia</a>.</p>
       <p>¿cómo surgió? ¿Dónde?, etcétera.</p>
       <h1>Registro de cambios</h1>
       <p>se llevará un registro de cambios aquí:</p>
       <p>&nbsp;</p>
		<h2>28/sep/2014</h2>
		<ul>
        <li>Se inicia el registro de cambios</li>
        <li>Se incorporó la base de datos al sitio</li>
        <li>El formulario para guardar pacientes ya guarda pacientes</li>
        <li>El formulario para guardar categorías de equipo, ya guarda categorías</li>
        <li>Ya se registran equipos</li>
        <li>Faltan las validaciones de campos vacíos</li>
        <li>Faltan los acentos de las alertas de mensajes de confirmación</li>
        </ul>
        <h2>11-12 Octubre 2014</h2>
        <ul>
        <li>La navegación desde cualquier página funciona</li>
        <li>Se agregó la consulta de pacientes (ver los pacientes registrados)</li>
        <li>Se agregó la consulta de equipos</li>
        <li>Se agregó la consulta de padecimientos</li>
        <li>Cabe destacar que los elementos que se muestran no son los finales, las tablas, los formularios y las pçaginas en general aún no se ven como se tienen que ver finalmente.</li>
        </ul>
        </div>
    </div>
    <footer>
      <p> &copy; Invitados Lucas:14 |<a target="_blank" href="http://www.joniandfriends.org/">Joni and Friends</a></p>
    </footer>
  </div>
  <p>&nbsp;</p>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="js/jquery.kwicks-1.5.1.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#images').kwicks({
        max : 600,
        spacing : 2
      });
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>