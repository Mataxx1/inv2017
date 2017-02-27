<?php
session_start();
if(!isset($_SESSION['ife'])){
	header("Location:../index.php");
	}
include("conectar.php");
mysql_select_db($db,$conexion);

$sqlTipoEquipo="Select * from tipo_equipo";
$resTe = mysql_query($sqlTipoEquipo,$conexion);


include("navegacion_pags.php");
?>

<!DOCTYPE HTML>
<html>

<head><title>Invitados Lucas:14</title><title>Yo estoy contigo</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
    
 <link rel="stylesheet" href="../css/magnific-popup.css"> 
<script src="../js/jquery.js"></script>
<!-- Magnific Popup core JS file -->
<script type="text/javascript" src="../js/jquery.magnific-popup.js"></script>   
    
  <script type="text/javascript" src="../js/modernizr-1.5.min.js"></script>
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
      <div id="sidebar_container">
        <div class="sidebar">
          <h3></h3>
          <h4></h4>
          <h5></h5>
          <p><br /><a href=""></a></p>
          <h4></h4>
          <h5></h5>
          <p><br /><a href=""></a></p>
        </div>
      </div>
      <div class="content">
        <h1>Estadísticas al día.</h1>
        
        
                <h2>Estadísticas equipo</h2>
        <table width="600" border="1" cellpadding="0" cellspacing="0">
        <th width="201">DESCRIPCIÓN</th><th width="133">INGRESO</th><th width="133">ENTREGADOS</th><th width="133">DISPONIBLES</th>
        
        <?php
        while($rwTE = mysql_fetch_array($resTe)){
			generaFila($rwTE[0],$rwTE[1],$conexion);
			}
		?>
        </table>
        <h2>Evangelismo</h2>
        <?php
        $pacEv = pacEvangelizados($conexion);
		$acompEv = acompEvangelizados($conexion);
		$pacEvCris = pacEvangelizadosCris($conexion);
		$acompEvCris = acompEvangelizadosCris($conexion);
		$totEv = $pacEv+$acompEv+$pacEvCris+$acompEvCris;
		?>
        <table width="600" cellspacing="0" border="1">
        <tr class="fila_iluminada"><td width="392">PACIENTES EVANGELIZADOS</td><td width="198" align="center"><?php echo $pacEv; ?></td></tr>
        <tr class="fila_iluminada"><td>ACOMPAÑANTES EVANGELIZADOS</td><td align="center"><?php echo $acompEv; ?></td></tr>
        <tr class="fila_iluminada"><td width="392">PACIENTES CRISTIANOS</td><td width="198" align="center"><?php echo $pacEvCris; ?></td></tr>
        <tr class="fila_iluminada"><td>ACOMPAÑANTES CRISTIANOS</td><td align="center"><?php echo $acompEvCris; ?></td></tr>
        <tr class="fila_iluminada"><td>TOTAL EVANGELIZADOS</td><td align="center"><b><?php echo $totEv; ?></b></td></tr>
        </table>
        <h2>Decisiones por Cristo</h2>
        <?php
        $DesicPac = DesicPacientes($conexion);
		$DesicAcom = DesicAcompanantes($conexion);
		$DesiPacCris = DesicPacientesCristianos($conexion);
		$DesiAcompCris = DesicAcompanantesCristianos($conexion);
		$totDesic = $DesicPac+$DesicAcom+$DesiPacCris+$DesiAcompCris;
		?>
        <table width="600" cellspacing="0" border="1">
        <tr class="fila_iluminada"><td width="392">PACIENTES DECIDIERON</td><td width="198" align="center"><?php echo $DesicPac; ?></td></tr>
        <tr class="fila_iluminada"><td>ACOMPAÑANTES DECIDIERON</td><td align="center"><?php echo $DesicAcom; ?></td></tr>
        <tr class="fila_iluminada"><td width="392">PACIENTES CRISTIANOS</td><td width="198" align="center"><?php echo $DesiPacCris; ?></td></tr>
        <tr class="fila_iluminada"><td>ACOMPAÑANTES CRISTIANOS</td><td align="center"><?php echo $DesiAcompCris; ?></td></tr>
        <tr class="fila_iluminada"><td>TOTAL DECISIONES</td><td align="center"><b><?php echo $totDesic; ?></b></td></tr>
        </table>
        <h2>Personas</h2>
        <table width="300" border="1" cellpadding="0" cellspacing="0"> <caption>Pacientes</caption>
        <tr class="fila_iluminada"><td>Hombres</td><td><?php echo pacHombres($conexion);?></td></tr>
        <tr class="fila_iluminada"><td>Mujeres</td><td><?php echo pacMujeres($conexion);?></td></tr>
        <tr class="fila_iluminada"><td align="right"><b>Total: </b></td><td><b><?php echo pacTodos($conexion);?></b></td></tr>
        </table>
        <p>&nbsp;</p>
        <table width="300" border="1" cellpadding="0" cellspacing="0"> <caption>Colaboradores</caption>
        <tr class="fila_iluminada"><td>Locales</td><td><?php echo colabLocales($conexion);?></td></tr>
        <tr class="fila_iluminada"><td>Extranjeros</td><td><?php echo colabExt($conexion);?></td></tr>
        <tr class="fila_iluminada"><td align="right"><b>Total: </b></td><td><b><?php echo colabTodos($conexion);?></b></td></tr>
        </table>
        
        <p>&nbsp;</p>
        <table width="300" border="1" cellspacing="0"><caption>Visitas a casa</caption><tr>
        <td align="right"><b>Total:</b></td><td><?php echo visitas($conexion);?></td>
        </tr></table>
        
        <p>
        <table width="300" cellspacing="0" border="1"><caption>Iglesias que participan en el seguimiento:</caption>
        <tr>
        <td align="right"><b>Totlal:</b></td><td><?php echo seguimientos($conexion); ?></td>
        </tr>
        </table>
        </p>
        <p>
          <?php
		  function seguimientos($conexion){
		$sql="select * from iglesia_cristiana where seguimiento='si'";
		$res=mysql_query($sql,$conexion);
		return contar($res);
		}
		  
		function visitas($conexion){
		$sql="select * from paciente where visita_casa='si'";
		$res=mysql_query($sql,$conexion);
		return contar($res);
		}
		function pacEvangelizados($conexion){
			$sql="select * from paciente where evangelio='si'";
			$res = mysql_query($sql,$conexion);
			return contar($res);
			}
			function acompEvangelizados($conexion){
			$sql="select * from acompanante where evangelio='si'";
			$res = mysql_query($sql,$conexion);
			return contar($res);
			}
			
		function pacEvangelizadosCris($conexion){
			$sql="select * from paciente where evangelio='Ya era'";
			$res = mysql_query($sql,$conexion);
			return contar($res);
			}
			function acompEvangelizadosCris($conexion){
			$sql="select * from acompanante where evangelio='Ya era'";
			$res = mysql_query($sql,$conexion);
			return contar($res);
			}
		function DesicPacientes($conexion){
			$sql="select * from paciente where desicion='si'";
			$res = mysql_query($sql,$conexion);
			return contar($res);
			}
			function DesicAcompanantes($conexion){
			$sql="select * from acompanante where desicion='si'";
			$res = mysql_query($sql,$conexion);
			return contar($res);
			}
		function DesicPacientesCristianos($conexion){
			$sql="select * from paciente where desicion='Ya era'";
			$res = mysql_query($sql,$conexion);
			return contar($res);
			}
			function DesicAcompanantesCristianos($conexion){
			$sql="select * from acompanante where desicion='Ya era'";
			$res = mysql_query($sql,$conexion);
			return contar($res);
			}
		function pacHombres($conexion){
			$sql="select * from paciente where sexo = 'hombre'";
			$res = mysql_query($sql,$conexion);
			return contar($res);
			}
		function pacMujeres($conexion){
			$sql="select * from paciente where sexo = 'mujer'";
			$res = mysql_query($sql,$conexion);
			return contar($res);
			}
		function pacTodos($conexion){
			$sql="select * from paciente";
			$res = mysql_query($sql,$conexion);
			return contar($res);
			}
		function colabLocales($conexion){
			$sql="select * from colaborador WHERE estado <> 'EUA'";
			$res = mysql_query($sql,$conexion);
			return contar($res);
			}
		function colabExt($conexion){
			$sql="select * from colaborador WHERE estado = 'EUA'";
			$res = mysql_query($sql,$conexion);
			return contar($res);
			}
		function colabTodos($conexion){
			$sql="select * from colaborador";
			$res = mysql_query($sql,$conexion);
			return contar($res);
			}
        function contar($res){
			return mysql_num_rows($res);
			}
			
		function generaFila($tipo_equipo,$nom_tipo,$conexion){
			$sqlAnios = "select distinct(anio) from equipo order by anio asc";
			$resAnio = mysql_query($sqlAnios,$conexion);
			
			echo '<tr class="fila_iluminada"><td>'.$nom_tipo.'</td><td colspan="3"><table cellspacing="0" border="1" width="399">';
			while($arrAnio = mysql_fetch_array($resAnio)){
				generaTablaFila($tipo_equipo,$arrAnio['anio'],$conexion);
				}
			//echo '<tr><td>año</td><td>entregados</td><td> disponibles </td></tr>';
			echo '</table></td></tr>';
			}
			
		function generaTablaFila($tipo,$anio,$conexion){
			$entregados = cuentaEquiposEntregados($tipo,$anio,$conexion);
			$disponibles = cuentaEquiposDisponibles($tipo,$anio,$conexion);
			echo '<tr class="fila_iluminada"><td width="133">'.$anio.'</td><td width="133">'.$entregados.'</td><td width="133">'.$disponibles.'</td></tr>';
			}
			
		function cuentaEquiposEntregados($tipo,$anio,$conexion){
			$sql="select * from equipo where tipo_equipo_idtipo_equipo = '".$tipo."' AND estatus = 'prestado' AND anio='".$anio."'";
			$res=mysql_query($sql,$conexion);
			return contar($res);
			}
			
		function cuentaEquiposDisponibles($tipo,$anio,$conexion){
						$sql="select * from equipo where tipo_equipo_idtipo_equipo = '".$tipo."' AND estatus = 'disponible' AND anio='".$anio."'";
						$res= mysql_query($sql,$conexion);
						return contar($res);
			}
		?>
          <!--iframe height="500" width="500" name="carga_consultas_equipo" id="carga_consultas_equipo" src="iframe_consultar_equipo.php" scrolling="no" frameborder="0"><iframe--><br><br><br><br><br><br>
        </p>
      </div>
    </div>
    <footer>
      <?php
      pie_pagina();
	  ?>
    </footer>
  </div>
  <p>&nbsp;</p>
    <script type="text/javascript">
$('.popup').magnificPopup({ 
  type: 'image'
	// other options
});
</script>
    
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