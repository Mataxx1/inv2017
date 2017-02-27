<?php
session_start();
if(!isset($_SESSION['ife'])){
	header("Location:../index.php");
	}
include("navegacion_pags.php");
$tipo = $_SESSION['tipo'];
include("conectar.php");
$cita= base64_decode($_GET['cita']);
$sql="select paciente.id, paciente.nombre,paciente.apaterno, paciente.amaterno, cita.numero, cita.fecha_inicio from paciente inner join cita on paciente.id = cita.paciente_id where cita.numero = '".$cita."'";
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Invitados Lucas:14</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="../js/modernizr-1.5.min.js"></script>
  <script type="text/javascript" src="../js/validaciones.js"></script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="../index.php"><span class="logo_colour">Invitados</span> Lucas:14</a></h1>
          <h2>Ameca, Jalisco, México <?php $dt = time();
		  $fc=date("Y",$dt); echo $fc;?></h2>
        </div>
      </div>
      <nav>
        <ul class="sf-menu" id="nav">
          <?php
		navegacion_dentro_pags();
          ?>
        </ul>
      </nav>
    </header>
    <div id="site_content">
      <ul id="images">
       <li><img src="../images/1.jpg" width="600" height="150" alt="seascape_one" /></li>
        <li><img src="../images/2.jpg" width="600" height="150" alt="seascape_two" /></li>
        <li><img src="../images/3.jpg" width="600" height="150" alt="seascape_three" /></li>
        <li><img src="../images/4.jpg" width="600" height="150" alt="seascape_four" /></li>
        <li><img src="../images/5.jpg" width="600" height="150" alt="seascape_five" /></li>
        <li><img src="../images/6.jpg" width="600" height="150" alt="seascape_seascape" /></li>
      </ul>
      
      <div class="content">
        <h1>Registrar datos de la cita</h1>
        <p>Se muestra la información de la cita.</p>
       
        
        <p>&nbsp;</p>
        <?php
		//echo 'cita: '.$cita;
        mysql_select_db($db,$conexion);
		if(mysql_query($sql,$conexion)){
			$datosCita = mysql_query($sql,$conexion);
			
			
			$datos=mysql_fetch_object($datosCita);
			historial_medico($datos->id,$conexion);
			genera_formulario($datos->numero,$datos->id,$datos->nombre,$datos->apaterno,$datos->amaterno,$datos->fecha_inicio);
			
			
		}else{
				echo 'error;:'.mysql_error();
				
				}
		
		
		function genera_fila_historial($fecha, $observaciones){
			echo '<tr><td>Fecha: '.$fecha.'</td><td>observaciones de la cita: '.$observaciones.'</td></tr>';
			}
		
		function genera_formulario($cita,$ife,$nombre,$apaterno,$amaterno,$fecha){
			echo '<form name="guardar_cita" action="guarda_datos_cita.php" method="post">
        <table width="600" border="1">
          <tr>
            <td>Número de cita: <br>
               <input type="text" name="cita" id="cita" value="'.$cita.'"></td>
            <td>IFE paciente: <br><input type="text" name="ife" id="ife" value="'.$ife.'"></td>
          </tr>
          <tr>
            <td colspan="2">Nombre paciente:<br> <input type="text" name="nombre" id="nombre" value="'.$nombre.' '.$apaterno.' '.$amaterno.'" disabled size="50"></td>
            
          </tr>
          <tr>
            <td>Fecha cita: <br><input type="text" name="fecha" id="fecha" value="'.$fecha.'" disabled></td>
            <td>¿Asistió? <br><select name="asistio" id="asistio"><option value="no">No</option><option value="si">Sí</option></select></td>
          </tr>
		  <tr>
		  <td><td>¿Visita a casa? <br><select name="visita" id="visita"><option value="no">No</option><option value="si">Sí</option></select></td></td>
		  </tr>
          <tr>
            <td colspan="2">Observaciones:<br><textarea name="observaciones" id="observaciones" cols="70" rows="7"></textarea></td>
            
          </tr>
		  <tr>
		  	<td colspan="3" align="right"><input type="submit" onClick="return validaLlenadoCita();" value="Registrar información de la cita"/></td></tr>
        </table>
        </form>';
			}
		
		function historial_medico($id,$conexion){
			$sqlPaciente = "select nombre, apaterno, amaterno, (YEAR(curdate())-YEAR(paciente.fecha_nacimiento)) as 'edad' from paciente where id = '$id'";
						$sqlHistorial="select historial_medico.fecha, historial_medico.observaciones from paciente inner join historial_medico on paciente.id = historial_medico.paciente_id where historial_medico.paciente_id = '$id'";
			if(mysql_query($sqlPaciente,$conexion)){
				$datosPac=mysql_query($sqlPaciente,$conexion);
				$datosPaciente = mysql_fetch_object($datosPac);
				echo '<table width="600" border="1"><caption style="background-color:#999; font-weight:bold">Datos del paciente</caption>
          <tr>
            <td>Nombre: '.$datosPaciente->nombre.' '.$datosPaciente->apaterno.' '.$datosPaciente->amaterno.'</td>
            <td>Edad: '.$datosPaciente->edad.'</td>
          </tr>
          <tr>
            <td colspan="2">
           	<table border="1" width="100%">
            <caption style="background-color:#999; font-weight:bold">Historial médico</caption>';
            if(mysql_query($sqlHistorial,$conexion)){
				$todoHistorial = mysql_query($sqlHistorial,$conexion);
				if(mysql_num_rows($todoHistorial)>0){
				while($rowHistorial = mysql_fetch_array($todoHistorial)){
					genera_fila_historial($rowHistorial['fecha'],$rowHistorial['observaciones']);
					}
					}else{
					echo '<tr><td>No existe un historial médico del paciente'.mysql_error().'</td></tr>';	
						}
				}else{
					echo '<tr><td>Algo salió mal: '.mysql_error().'</td></tr>';
					}
            
            echo '</table></td>
            
          </tr>
        </table>';
				}

			
			}
			
			
		?>
		
        </div>
    </div>
     <footer>
      <?php
      pie_pagina();
	  ?>
    </footer>
  </div>
  <p>&nbsp;</p>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="../js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="../js/jquery.kwicks-1.5.1.js"></script>
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
<?php
function navegacion_dentro_pags(){
		 if(isset($_SESSION['tipo'])){
			 if($_SESSION['tipo'] == "administrador" ||$_SESSION['tipo'] == "medico" || $_SESSION['tipo'] == "capturista"){	
         echo' <li><a href="#">Citas</a>
          <ul>';
		  		if($_SESSION['tipo'] == "administrador" || $_SESSION['tipo'] == "capturista"){
          		echo '<li><a href="nueva_cita.php">Nueva cita</a></li>';
				}
				if($_SESSION['tipo'] == "administrador" || $_SESSION['tipo'] == "medico"){
				echo '<li><a href="consultar_citas.php">Consultar citas</a></li>';
				}
				if($_SESSION['tipo'] == "administrador"){
				echo '<li><a href="detalle_cita.php">Detalle de citas</a></li>';
				echo '<li><a href="editar_cita.php">Editar citas</a></li>';
				}
         	echo '</ul>
          </li>';
          	if($_SESSION['tipo'] == "administrador" || $_SESSION['tipo'] == "capturista"){
          echo '<li><a href="#">Personas</a>
          	<ul>
		  	<li><a href="#">Pacientes</a>
		  		<ul>
          			<li><a href="alta_paciente.php">Alta paciente</a></li>
          			<li><a href="consultar_pacientes.php">Consultar pacientes</a>
					<li><a href="editar_paciente.php">Editar pacientes</a></li></ul>
          	</li>
			<li><a href="#">Pastores</a>
		  		<ul>
          			<li><a href="alta_pastor.php">Alta pastor</a></li>
					<li><a href="consultar_pastores.php">Consultar pastores</a></li>
					<li><a href="editar_pastor.php">Editar pastores</a></li>
          			</ul>
          	</li>
			<li><a href="#">Acompañantes</a>
          		<ul>
          			<li><a href="alta_acompanante.php">Alta acompañantes</a></li>';
					
					if($_SESSION['tipo'] == "administrador"){
          			echo '<li><a href="consultar_acompaniantes.php">Consultar acompañantes</a></li>';
					echo '<li><a href="editar_acompanante.php">Editar acompañantes</a></li>';
					}//el que se abrió en personas
					echo'</ul>
          	</li>';
			
		  	echo '<li><a href="#">Médicos</a>
          		<ul>
          			<li><a href="alta_medico.php">Alta medico</a></li>';
					if($_SESSION['tipo'] == "administrador"){
          			echo '<li><a href="consultar_medicos.php">Consultar médicos</a></li><li><a href="editar_medico.php">Editar médicos</a></li>';
					}//se cierra el de consultar médicos
					echo '</ul>
          	</li>';
			 }
				}//encierra capturista, medico y administrador
				
			if($_SESSION['tipo'] == "administrador" || $_SESSION['tipo'] == "capturista"){//de aquí en adelante, solo el administrador puede acceder		
			echo '<li><a href="#">Colaboradores</a>
          		<ul>
				
          			<li><a href="alta_colaborador.php">Alta colaboradores</a></li>
          			<li><a href="alta_tipo_colaborador.php">Alta tipo de colaborador</a></li>';
					if($_SESSION['tipo'] == "administrador"){
					echo '<li><a href="consultar_colaboradores.php">Consultar colaboradores</a></li>';
					echo '<li><a href="editar_colaborador.php">Editar colaboradores</a></li>';
					echo '<li><a href="editar_tipo_colaborador.php">Editar tipo de colaborador</a></li>';
					}
				echo '</ul>
          	</li>
			</ul></li>
          <li><a href="#">Especialidades</a>
          <ul>
          <li><a href="alta_padecimiento.php">Nueva especialidad</a></li>
          <li><a href="consultar_padecimiento.php">Consultar especialidades</a></li>
		  <li><a href="editar_padecimiento.php">Editar especialidades</a></li>
		  <li><a href="alta_diagnostico.php">Dar de alta diagnóstico</a></li>
		  <li><a href="consultar_diagnostico.php">Consultar diagnósticos</a></li>
		  <li><a href="editar_diagnostico.php">Editar diagnósticos</a></li></ul></li>
		  
		  <li><a href="#">Iglesias</a>
          <ul>
		  <li><a href="alta_iglesia_cristiana.php">Alta iglesia cristiana</a></li>';
		  if($_SESSION['tipo'] == "administrador"){
		  echo '<li><a href="consultar_iglesia_cristiana.php">Directorio de iglesias cristianas</a></li>';
		   echo '<li><a href="editar_iglesia_cristiana.php">Editar iglesias cristianas</a></li>';
		  }
          echo '<li><a href="alta_iglesia.php">Alta iglesia no cristiana</a></li>';
			if($_SESSION['tipo'] == "administrador"){
			echo'<li><a href="consultar_iglesia_no_cristiana.php">Directorio  iglesias no cristianas</a></li>';
			echo'<li><a href="editar_iglesia_no_cristiana.php">Editar  iglesias no cristianas</a></li>';
			}
		  		 echo '</ul></li>

		  <li><a href="#">Grupos</a>
          <ul>
          <li><a href="nuevo_grupo.php">Nuevo grupo</a></li>';
          if($_SESSION['tipo'] == "administrador"){
		  echo '<li><a href="registrar_a_grupo.php">Inscribir paciente a un grupo</a></li>
		  <li><a href="registrar_acomp_grupo.php">Inscribir acompañante a un grupo</a></li><li><a href="../autoregistrar_a_grupo.php">Inscribir persona a un grupo</a></li>
		  <li><a href="ver_grupos.php">Ver grupos</a></li>
		  <li><a href="asistencia_grupos.php">Registrar asistencia</a></li>
		  <li><a href="lista_asistentes.php">Lista de asistencias</a></li>
		  <li><a href="editar_grupo.php">Renombrar grupo</a></li>';
		  }
		  echo '</ul></li>
          <li><a href="#">Equipo</a>
            <ul>
			  <li><a href="alta_equipo.php">Dar de alta equipo</a></li>
			  <li><a href="alta_categoria_equipo.php">Dar de alta categoría</a></li>
              ';
			 if($_SESSION['tipo'] == "administrador"){
			  echo'
              <li><a href="consultar_equipo.php">Consultar equipo</a></li>
			  <li><a href="eliminar_equipo.php">Eliminar equipo</a></li>
			   <li><a href="editar_equipo.php">Editar equipo</a></li>
			   <li><a href="prestamo.php">Nueva entrega</a></li>
		   <li><a href="editar_prestamo.php">Editar entrega</a></li>
		   <li><a href="consultar_prestamos.php">Consultar entregas</a></li>';
			 }
           echo ' </ul>
          </li>
          
          
		  <li><a href="#">Sistema</a>
		  <ul>
		  <li><a href="alta_difusion.php">Alta medio de difusión</a></li>
		  <li><a href="alta_usuario.php">Dar de alta usuarios</a></li>';
		  if($_SESSION['tipo'] == "administrador"){
		  echo '<li><a href="editar_usuario.php">Editar usuarios</a></li>
		  <li><a href="consultar_usuarios.php">Ver a los usuarios</a></li>
		  <li><a href="estadisticas.php">Estadísticas</a></li>';
		  }
		  echo '<li><a href="cambia_contra.php">Cambiar mi contraseña</a></li>
		 ';// </ul>
		  //</li>
			}
			echo '';
		 }
		  if(isset($_SESSION['tipo'])){
			  if($_SESSION['tipo']=='medico'){
				  echo '</li> <li><a href="salir.php">Salir</a></li>';
				  }else{
         echo '</ul></li> <li><a href="salir.php">Salir</a></li>';
				  }
		  }else{
			  echo ' <li class="selected"><a href="../index.php">Inicio</a></li>';
			  echo '<li><a href="../login.php">Ingresar</a></li>';
			  }
			  
}

?>