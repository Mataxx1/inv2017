<?php
session_start();
if(!isset($_SESSION['ife'])){
	header("Location:../index.php");
	}
include("navegacion_pags.php");
include("conectar.php");
mysql_select_db($db,$conexion);

$sqlPac = "select * from paciente";
$resPac = mysql_query($sqlPac,$conexion);
$sqlEsp = "select * from especialidad order by nombre asc";
$resEsp = mysql_query($sqlEsp,$conexion);
$sqlLoc = "select distinct(localidad) from paciente order by localidad asc";
$resLoc = mysql_query($sqlLoc,$conexion);
$sqlDiag = "select * from diagnostico";
$resDiag = mysql_query($sqlDiag,$conexion);
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Invitados Lucas:14</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <link type="text/css" href="../css/jquery.datetimepicker.css" rel="stylesheet" />
  <!-- modernizr enables HTML5 elements and feature detects -->
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
      
      <div class="content">
        <h1>Sección para consultar el reporte de las citas.</h1>
        <form name="agrega" action="detalle_cita.php" method="get">
       <p><table width="400" border="0">
          <tr>
            <td width="121" align="right"><input type="checkbox" name="todo" id="todo"></td><td width="269"><label for="todo"> Consultar todas las citas</label></td>
            
          </tr>
         <tr>
         	<td>ID y nombre:</td><td><select name="id" id="id" style="width:100%"><option value="id">Seleccione el nombre</option>
            <?php
            while($arrPac=mysql_fetch_array($resPac)){
				echo '<option value="'.$arrPac['id'].'">'.$arrPac['id'].'-'.$arrPac['apaterno'].' '.$arrPac['amaterno'].' '.$arrPac['nombre'].'</option>';
				}
			?>
            
            </select></td>
         </tr>
         <tr>
         <td>Especialidades</td><td><select name="esp" id="esp" style="width:100%"><option value="es">Seleccione la especialidad</option>
         <?php
         while($arrEsp=mysql_fetch_array($resEsp)){
			 echo '<option value="'.$arrEsp['idespecialidad'].'">'.$arrEsp['nombre'].'</option>';
			 }
		 ?>
         </select></td>
         </tr>
        <tr>
         <td>Asistencia</td><td><select name="asis" id="asis" style="width:100%"><option value="as">Seleccione</option>
         <option value="si">Sí</option>
         <option value="no">No</option>
         </select></td>
         </tr>
         <tr>
         <td>Entre las fechas:</td><td><input type="text" name="f_min" id="f_min"> y <input type="text" name="f_max" id="f_max"></td>
         </tr>
          <tr align="right">
          <td colspan="3"><input type="submit" value="Consultar las citas"></td>
          </tr>
        </table></p></form>
	<?php
//



$registros=1000;

@$pagina = $_GET['num'];

if(is_numeric($pagina)){
	$inicio=(($pagina-1)*$registros);
}else{
		$inicio=0;
}
		

if(isset($_GET['todo']) && $_GET['id'] =="id" && $_GET['esp']=="es" && $_GET['asis']=="as"){
	$sql="select paciente.nombre as 'nom_pac', paciente.apaterno as 'ap_pac', paciente.amaterno as 'am_pac', paciente.telefono, cita.numero, cita.fecha_inicio, medico.nombre as 'nom_med', medico.apaterno as 'ap_med', medico.amaterno as 'am_med', es.nombre as 'n_esp', cita.asistio
from paciente inner join cita on paciente.id = cita.paciente_id inner join medico on medico.cedula = cita.medico_cedula inner join medico_has_especialidad on medico.cedula = medico_has_especialidad.medico_cedula inner join especialidad as es on es.idespecialidad = medico_has_especialidad.especialidad_idespecialidad LIMIT $inicio,$registros";
	$sql1="select paciente.nombre as 'nom_pac', paciente.apaterno as 'ap_pac', paciente.amaterno as 'am_pac', paciente.telefono, cita.numero, cita.fecha_inicio, medico.nombre as 'nom_med', medico.apaterno as 'ap_med', medico.amaterno as 'am_med', es.nombre as 'n_esp', cita.asistio
from paciente inner join cita on paciente.id = cita.paciente_id inner join medico on medico.cedula = cita.medico_cedula inner join medico_has_especialidad on medico.cedula = medico_has_especialidad.medico_cedula inner join especialidad as es on es.idespecialidad = medico_has_especialidad.especialidad_idespecialidad;";
	$paginas = ceil((mysql_num_rows(mysql_query($sql1,$conexion))/$registros));
	tablaconDatos($sql,$sql1,$inicio,$paginas,'todo',$_GET['todo'],$conexion);
	
	}
if($_GET['id'] !="id" && $_GET['esp']=="es" && $_GET['asis']=="as"){
	$sql="select paciente.nombre as 'nom_pac', paciente.apaterno as 'ap_pac', paciente.amaterno as 'am_pac', paciente.telefono, cita.numero, cita.fecha_inicio, medico.nombre as 'nom_med', medico.apaterno as 'ap_med', medico.amaterno as 'am_med', es.nombre as 'n_esp', cita.asistio
from paciente inner join cita on paciente.id = cita.paciente_id inner join medico on medico.cedula = cita.medico_cedula inner join medico_has_especialidad on medico.cedula = medico_has_especialidad.medico_cedula inner join especialidad as es on es.idespecialidad = medico_has_especialidad.especialidad_idespecialidad where paciente.id= ".$_GET['id']." order by id asc LIMIT $inicio,$registros";
	$sql1="select paciente.nombre as 'nom_pac', paciente.apaterno as 'ap_pac', paciente.amaterno as 'am_pac', paciente.telefono, cita.numero, cita.fecha_inicio, medico.nombre as 'nom_med', medico.apaterno as 'ap_med', medico.amaterno as 'am_med', es.nombre as 'n_esp', cita.asistio
from paciente inner join cita on paciente.id = cita.paciente_id inner join medico on medico.cedula = cita.medico_cedula inner join medico_has_especialidad on medico.cedula = medico_has_especialidad.medico_cedula inner join especialidad as es on es.idespecialidad = medico_has_especialidad.especialidad_idespecialidad where paciente.id= ".$_GET['id']." order by id asc";
	$paginas = ceil((mysql_num_rows(mysql_query($sql1,$conexion))/$registros));
	tablaconDatos($sql,$sql1,$inicio,$paginas,'id',$_GET['id'],$conexion);
	}
if($_GET['id'] =="id" && $_GET['esp']!="es" && $_GET['asis']=="as"){
	$sql="select paciente.nombre as 'nom_pac', paciente.apaterno as 'ap_pac', paciente.amaterno as 'am_pac', paciente.telefono, cita.numero, cita.fecha_inicio, medico.nombre as 'nom_med', medico.apaterno as 'ap_med', medico.amaterno as 'am_med', es.nombre as 'n_esp', cita.asistio
from paciente inner join cita on paciente.id = cita.paciente_id inner join medico on medico.cedula = cita.medico_cedula inner join medico_has_especialidad on medico.cedula = medico_has_especialidad.medico_cedula inner join especialidad as es on es.idespecialidad = medico_has_especialidad.especialidad_idespecialidad where es.idespecialidad = '".$_GET['esp']."' order by cita.fecha_inicio asc LIMIT $inicio,$registros";
	$sql1="select paciente.nombre as 'nom_pac', paciente.apaterno as 'ap_pac', paciente.amaterno as 'am_pac', paciente.telefono, cita.numero, cita.fecha_inicio, medico.nombre as 'nom_med', medico.apaterno as 'ap_med', medico.amaterno as 'am_med', es.nombre as 'n_esp', cita.asistio
from paciente inner join cita on paciente.id = cita.paciente_id inner join medico on medico.cedula = cita.medico_cedula inner join medico_has_especialidad on medico.cedula = medico_has_especialidad.medico_cedula inner join especialidad as es on es.idespecialidad = medico_has_especialidad.especialidad_idespecialidad where es.idespecialidad = '".$_GET['esp']."' order by cita.fecha_inicio asc";
	
	$paginas = ceil((mysql_num_rows(mysql_query($sql1,$conexion))/$registros));
	tablaconDatos($sql,$sql1,$inicio,$paginas,'esp',$_GET['esp'],$conexion);
	die(mysql_error());
	}
if($_GET['id'] =="id" && $_GET['esp']=="es" && $_GET['asis']!="as" && empty($_GET['f_max']) && empty($_POST['f_min'])){
	echo 'Se muestran las personas que <b>'.$_GET['asis'].' asistieron a su cita</b>';
	$sql="select paciente.nombre as 'nom_pac', paciente.apaterno as 'ap_pac', paciente.amaterno as 'am_pac', paciente.telefono, cita.numero, cita.fecha_inicio, medico.nombre as 'nom_med', medico.apaterno as 'ap_med', medico.amaterno as 'am_med', es.nombre as 'n_esp', cita.asistio
from paciente inner join cita on paciente.id = cita.paciente_id inner join medico on medico.cedula = cita.medico_cedula inner join medico_has_especialidad on medico.cedula = medico_has_especialidad.medico_cedula inner join especialidad as es on es.idespecialidad = medico_has_especialidad.especialidad_idespecialidad where cita.asistio= '".$_GET['asis']."' order by cita.fecha_inicio asc LIMIT $inicio,$registros";
	$sql1="select paciente.nombre as 'nom_pac', paciente.apaterno as 'ap_pac', paciente.amaterno as 'am_pac', paciente.telefono, cita.numero, cita.fecha_inicio, medico.nombre as 'nom_med', medico.apaterno as 'ap_med', medico.amaterno as 'am_med', es.nombre as 'n_esp', cita.asistio
from paciente inner join cita on paciente.id = cita.paciente_id inner join medico on medico.cedula = cita.medico_cedula inner join medico_has_especialidad on medico.cedula = medico_has_especialidad.medico_cedula inner join especialidad as es on es.idespecialidad = medico_has_especialidad.especialidad_idespecialidad where cita.asistio= '".$_GET['asis']."' order by id asc";
	
	$paginas = ceil((mysql_num_rows(mysql_query($sql1,$conexion))/$registros));
	tablaconDatos($sql,$sql1,$inicio,$paginas,'asis',$_GET['asis'],$conexion);
	die(mysql_error());
	}

	
if(isset($_GET['f_min']) && !empty($_GET['f_min']) && isset($_GET['f_max']) && !empty($_GET['f_max']) && $_GET['id'] =="id" && $_GET['esp']=="es" && $_GET['asis']=="as"){
		

	$sql="select paciente.nombre as 'nom_pac', paciente.apaterno as 'ap_pac', paciente.amaterno as 'am_pac', paciente.telefono, cita.numero, cita.fecha_inicio, medico.nombre as 'nom_med', medico.apaterno as 'ap_med', medico.amaterno as 'am_med', es.nombre as 'n_esp', cita.asistio
from paciente inner join cita on paciente.id = cita.paciente_id inner join medico on medico.cedula = cita.medico_cedula inner join medico_has_especialidad on medico.cedula = medico_has_especialidad.medico_cedula inner join especialidad as es on es.idespecialidad = medico_has_especialidad.especialidad_idespecialidad where cita.fecha_inicio BETWEEN '".$_GET['f_min']."' AND '".$_GET['f_max']."' order by cita.fecha_inicio asc LIMIT $inicio,$registros";
	$sql1="select paciente.nombre as 'nom_pac', paciente.apaterno as 'ap_pac', paciente.amaterno as 'am_pac', paciente.telefono, cita.numero, cita.fecha_inicio, medico.nombre as 'nom_med', medico.apaterno as 'ap_med', medico.amaterno as 'am_med', es.nombre as 'n_esp', cita.asistio
from paciente inner join cita on paciente.id = cita.paciente_id inner join medico on medico.cedula = cita.medico_cedula inner join medico_has_especialidad on medico.cedula = medico_has_especialidad.medico_cedula inner join especialidad as es on es.idespecialidad = medico_has_especialidad.especialidad_idespecialidad where cita.fecha_inicio BETWEEN '".$_GET['f_min']."' AND '".$_GET['f_max']."' order by cita.fecha_inicio asc";
	
	$paginas = ceil((mysql_num_rows(mysql_query($sql1,$conexion))/$registros));
	tablaconDatos($sql,$sql1,$inicio,$paginas,'f_min',$_GET['f_min'],$conexion);
	
	}

//asistencia y fecha:
if(!empty($_GET['f_min']) && !empty($_GET['f_max']) && $_GET['id'] == "id" && $_GET['esp']== "es" && $_GET['asis']!="as"){
echo 'Se muestran las personas que <b>'.$_GET['asis'].'</b> asistieron a su cita entre las fechas <b>'.$_GET['f_min'].' y '.$_GET['f_max'].'</b>';
	$sql="select paciente.nombre as 'nom_pac', paciente.apaterno as 'ap_pac', paciente.amaterno as 'am_pac', paciente.telefono, cita.numero, cita.fecha_inicio, medico.nombre as 'nom_med', medico.apaterno as 'ap_med', medico.amaterno as 'am_med', es.nombre as 'n_esp', cita.asistio
from paciente inner join cita on paciente.id = cita.paciente_id inner join medico on medico.cedula = cita.medico_cedula inner join medico_has_especialidad on medico.cedula = medico_has_especialidad.medico_cedula inner join especialidad as es on es.idespecialidad = medico_has_especialidad.especialidad_idespecialidad where cita.asistio='".$_GET['asis']."' AND cita.fecha_inicio BETWEEN '".$_GET['f_min']."' AND '".$_GET['f_max']."' order by cita.fecha_inicio asc LIMIT $inicio,$registros";

	$sql1="select paciente.nombre as 'nom_pac', paciente.apaterno as 'ap_pac', paciente.amaterno as 'am_pac', paciente.telefono, cita.numero, cita.fecha_inicio, medico.nombre as 'nom_med', medico.apaterno as 'ap_med', medico.amaterno as 'am_med', es.nombre as 'n_esp', cita.asistio
from paciente inner join cita on paciente.id = cita.paciente_id inner join medico on medico.cedula = cita.medico_cedula inner join medico_has_especialidad on medico.cedula = medico_has_especialidad.medico_cedula inner join especialidad as es on es.idespecialidad = medico_has_especialidad.especialidad_idespecialidad where cita.asistio='".$_GET['asis']."' AND cita.fecha_inicio BETWEEN '".$_GET['f_min']."' AND '".$_GET['f_max']."' order by cita.fecha_inicio asc";
	
	$paginas = ceil((mysql_num_rows(mysql_query($sql1,$conexion))/$registros));
	tablaconDatos($sql,$sql1,$inicio,$paginas,'f_min',$_GET['f_min'],$conexion);
	
	}


//falta municipio y localidad, y la función de contar los resultados en el caption pa que se vea chido :v


function tablaconDatos($sql,$sql1,$pagina,$paginas,$criterio,$valor,$conexion){

	if(mysql_query($sql,$conexion)){
		$res=mysql_query($sql,$conexion);
		$res1=mysql_query($sql1,$conexion);
		
		
		echo '<table cellpadding="0" border="1" cellspacing="0"><caption>Se muestran: '.numeroResultados($res).' citas de <b>'.numeroResultados($res1).'.</b></caption>';
		while($arrDatos = mysql_fetch_array($res)){
			
			
			
			molde_datos_usuario($arrDatos['numero'],$arrDatos['nom_pac'],$arrDatos['ap_pac'],$arrDatos['am_pac'],$arrDatos['telefono'],$arrDatos['nom_med'],$arrDatos['ap_med'],$arrDatos['am_med'],$arrDatos['fecha_inicio'],$arrDatos['n_esp'],$arrDatos['asistio']);
			
			}
			
		}else{
			mysql_error();
			}
			//$total_registros=mysql_num_rows($res);
		//	$numero_paginas = $total_registros/$paginas
			paginacion($pagina,$paginas,$criterio,$valor);
	
echo '</table>';



	
	}

function paginacion($pagina,$paginas,$criterio,$val){
	echo '<tr><td colspan="4" align="center">';
	if($pagina>1){
		echo'<a href="detalle_cita.php?num='.($pagina-1).'&'.$criterio.'='.$val.'">'.'Anterior'.'</a> ';
		}
for($cont = 1; $cont <=$paginas;$cont++){
	
	if($cont==$pagina){
		echo $cont.' ';
		}else{
	echo'<a href="detalle_cita.php?num='.$cont.'&'.$criterio.'='.$val.'">'.$cont.'</a> ';
	
		}
	
}
if($pagina<$paginas){
		echo'<a href="detalle_cita.php?num='.($pagina+1).'&'.$criterio.'='.$val.'">'.' Siguiente'.'</a>';
		}

	}
	
	
function molde_datos_usuario($num,$nom_pac,$ap_pac,$am_pac,$tel,$nommed,$apmed,$ammed,$feccita,$n_esp,$asistio){
	echo '<tr class="fila_iluminada"><td><table width="650" border="1">
          <tr>
            <td colspan="3">cita número: '.$num.'</td><td rowspan="4"><a href="llena_cita.php?cita='.base64_encode($num).'">Ver cita</a></td>';
            
            
          echo '</tr>
          <tr>
            <td colspan="2">Paciente: '.$nom_pac.' '.$ap_pac.' '.$am_pac.'</td>
            <td>Teléfono: '.$tel.'</td>
            
          </tr>
          <tr>
            <td colspan="2">Médico: '.$nommed.' '.$apmed.' '.$ammed.'</td>
            <td>Día y hora: '.$feccita.'</td>
            
          </tr>
		  <tr><td colspan="2">A la especialidad: <b>'.$n_esp.'</b></td><td>¿Asistió? <b>'.$asistio.'</b></td></tr>
        </table></td></tr>';
//echo '</table></td></tr>';
	}
	
function numeroResultados($res){
	return mysql_num_rows($res);
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
  <link rel="stylesheet" href="../css/magnific-popup.css"> 
<script src="../js/jquery.js"></script>
<!-- Magnific Popup core JS file -->
<script src="../js/jquery.magnific-popup.js"></script>
  <script type="text/javascript" src="../js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="../js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="../js/jquery.kwicks-1.5.1.js"></script>
  <script type="text/javascript" src="../js/jquery.datetimepicker.js"></script>
<script type="text/javascript">
$(function(){ 
$("#f_min").datetimepicker({
	lang:'es',
	format:'Y-m-d H:i:s',
	});
$("#f_max").datetimepicker({
	lang:'es',
	format:'Y-m-d H:i:s',
	});

}); 


</script>
  <script type="text/javascript">
$('.popup').magnificPopup({ 
  type: 'image'
	// other options
});
</script>
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