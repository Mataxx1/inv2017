<?php
session_start();
if(!isset($_SESSION['ife'])){
	header("Location:../index.php");
	}
include("navegacion_pags.php");
include("conectar.php");
mysql_select_db($db,$conexion);

$sqlPac = "select * from medico";
$resPac = mysql_query($sqlPac,$conexion);
$sqlMun = "select distinct(ciudad) from medico order by ciudad asc";
$resMun = mysql_query($sqlMun,$conexion);
$sqlLoc = "select distinct(colonia) from medico order by colonia asc";
$resLoc = mysql_query($sqlLoc,$conexion);
$sqlDiag = "select * from especialidad";
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
      <div id="sidebar_container">
        <div class="sidebar">
          <h3>Acciones para médicos</h3>
          <h4>Consultar médicos</h4>
          
          <p>Ver información de los médicos almacenados en el sistema.<br /><a href="consultar_medicos.php">Consultar</a></p>
          <h4>Editar médicos</h4>
          
          <p>Editar la información básica de los pacientes.<br /><a href="editar_medico.php">Ir a editar</a></p>
        </div>
      </div>
      
      <div class="content">
        <h1>Consultar datos de los médicos</h1>
        <form name="consulta" action="consultar_medicos.php" method="get">
       <p><table width="400" border="0">
          <tr>
            <td align="right"><input type="checkbox" name="todo" id="todo"></td><td><label for="todo"> Consultar todos los médicos</label></td>
            
          </tr>
         <tr>
         	<td>Nombre:</td><td><select name="id" id="id" style="width:100%"><option value="">Seleccione el nombre</option>
            <?php
            while($arrPac=mysql_fetch_array($resPac)){
				echo '<option value="'.$arrPac['cedula'].'">'.$arrPac['nombre'].' '.$arrPac['apaterno'].' '.$arrPac['amaterno'].'</option>';
				}
			?>
            
            </select></td>
         </tr>
         <tr>
         <td>Municipio</td><td><select name="mun" id="mun" style="width:100%"><option value="">Seleccione el municipio</option>
         <?php
         while($arrMun=mysql_fetch_array($resMun)){
			 echo '<option value="'.$arrMun['ciudad'].'">'.$arrMun['ciudad'].'</option>';
			 }
		 ?>
         </select></td>
         </tr>
        <tr>
         <td>Localidad</td><td><select name="loc" id="loc" style="width:100%"><option value="">Seleccione la localidad</option>
         <?php
         while($arrLoc=mysql_fetch_array($resLoc)){
			 echo '<option value="'.$arrLoc['colonia'].'">'.$arrLoc['colonia'].'</option>';
			 }
		 ?>
         </select></td>
         </tr>
         <tr>
         <td>Especialidad:</td><td><select name="esp" id="esp" style="width:100%"><option value="">Seleccione la especialidad</option>
         <?php
         while($arrDiag=mysql_fetch_array($resDiag)){
			 echo '<option value="'.$arrDiag['idespecialidad'].'">'.$arrDiag['nombre'].'</option>';
			 }
		 ?>
         </select></td>
         </tr>
          <tr align="right">
          <td colspan="3"><input type="submit" value="Consultar médicos"></td>
          </tr>
        </table></p></form>
	<?php
//



$registros=10;

@$pagina = $_GET['num'];

if(is_numeric($pagina)){
	$inicio=(($pagina-1)*$registros);
	}else{
		$inicio=0;
		}
		

if(isset($_GET['todo'])){
	$sql="SELECT * from medico LIMIT $inicio,$registros";
	$sql1="SELECT * from medico";
	$paginas = ceil((mysql_num_rows(mysql_query($sql1,$conexion))/$registros));
	tablaconDatos($sql,$sql1,$pagina,$paginas,'todo',$_GET['todo'],$conexion);
	
	}
if(isset($_GET['id']) && !empty($_GET['id'])){
	$sql="SELECT * from medico where cedula= ".$_GET['id']." LIMIT $inicio,$registros";
	$sql1="SELECT * from medico where cedula= ".$_GET['id']."";
	$paginas = ceil((mysql_num_rows(mysql_query($sql1,$conexion))/$registros));
	tablaconDatos($sql,$sql1,$pagina,$paginas,'id',$_GET['id'],$conexion);
	}
if(isset($_GET['mun']) && !empty($_GET['mun'])){
	$sql="SELECT * from medico where ciudad= '".$_GET['mun']."' LIMIT $inicio,$registros";
	$sql1="SELECT * from medico where ciudad= '".$_GET['mun']."'";
	$paginas = ceil((mysql_num_rows(mysql_query($sql1,$conexion))/$registros));
	tablaconDatos($sql,$sql1,$pagina,$paginas,'mun',$_GET['mun'],$conexion);
	
	}
if(isset($_GET['loc']) && !empty($_GET['loc'])){
	$sql="SELECT * from medico where colonia= '".$_GET['loc']."' LIMIT $inicio,$registros";
	$sql1="SELECT * from medico where colonia= '".$_GET['loc']."'";
	$paginas = ceil((mysql_num_rows(mysql_query($sql1,$conexion))/$registros));
	tablaconDatos($sql,$sql1,$pagina,$paginas,'loc',$_GET['id'],$conexion);
	
	}
	//por especialidad
if(isset($_GET['esp']) && !empty($_GET['esp'])){
	$sql="select * from medico as m inner join medico_has_especialidad as mhe on m.cedula = mhe.medico_cedula inner join especialidad as e on e.idespecialidad = mhe.especialidad_idespecialidad where e.idespecialidad = '".$_GET['esp']."' LIMIT $inicio,$registros";
	$sql1="select * from medico as m inner join medico_has_especialidad as mhe on m.cedula = mhe.medico_cedula inner join especialidad as e on e.idespecialidad = mhe.especialidad_idespecialidad where e.idespecialidad = '".$_GET['esp']."'";
	$paginas = ceil((mysql_num_rows(mysql_query($sql1,$conexion))/$registros));
	tablaconDatos($sql,$sql1,$pagina,$paginas,'esp',$_GET['esp'],$conexion);
	
	}


//falta municipio y localidad, y la función de contar los resultados en el caption pa que se vea chido :v


function tablaconDatos($sql,$sql1,$pagina,$paginas,$criterio,$valor,$conexion){

	if(mysql_query($sql,$conexion)){
		$res=mysql_query($sql,$conexion);
		$res1=mysql_query($sql1,$conexion);
		
		
		echo '<table cellpadding="0" border="1" cellspacing="0"><caption>Se muestran: '.numeroResultados($res).' médicos de <b>'.numeroResultados($res1).'</b>. <a href="excelMedicos.php?qry='.base64_encode($sql1).'"><img src="../images/excel.png" width="25" height="25"></a></caption>';
		while($arrDatos = mysql_fetch_array($res)){
			
			
			
			molde_datos_usuario($arrDatos['cedula'],$arrDatos['nombre'],$arrDatos['apaterno'],$arrDatos['amaterno'],$arrDatos['calle'],$arrDatos['telefono'],$arrDatos['ciudad'],$arrDatos['estado'],$arrDatos['colonia'],$conexion);
			
			}
			
		}else{
			mysql_error();
			}
			paginacion($pagina,$paginas,$criterio,$valor);
	
echo '</table>';



	
	}

function paginacion($pagina,$paginas,$criterio,$val){
	echo '<tr><td colspan="4" align="center">';
	if($pagina>1){
		echo'<a href="consultar_medicos.php?num='.($pagina-1).'&'.$criterio.'='.$val.'">'.'Anterior'.'</a> ';
		}
for($cont = 1; $cont <=$paginas;$cont++){
	
	if($cont==$pagina){
		echo $cont.' ';
		}else{
	echo'<a href="consultar_medicos.php?num='.$cont.'&'.$criterio.'='.$val.'">'.$cont.'</a> ';
	
		}
		
	}
	if($pagina<$paginas){
		echo'<a href="consultar_medicos.php?num='.($pagina+1).'&'.$criterio.'='.$val.'">'.' Siguiente'.'</a>';
		}
	}
	
	
function molde_datos_usuario($ced,$nombre,$ap,$am,$dom,$tel,$mun,$estado,$loc,$conexion){
	echo '<tr class="fila_iluminada"><td><table width="600" border="1" cellspacing="0"><caption style="background-color:#999; font-weight:bold">'.$nombre.' '.$ap.' '.$am.'</caption>
  <tr>
    <td width="162"><b>Cédula:</b> '.$ced.'</td>
    <td colspan="3">Nombre: '.$nombre.' '.$ap.' '.$am.'</td>
    
  </tr>
  <tr>
    <td colspan="3">Domicilio: '.$dom.', '.$loc.', '.$mun.', '.$estado.'</td><td>Teléfono: '.$tel.'</td>
    
  </tr>
 
  <tr>
  <td colspan="5">';
  //datos del contacto
 // datosContacto($contacto_id,$conexion);
  echo '</td></tr>';
  echo '<tr><td colspan="6">';
  //datos de especialidades
  datosEspecialidades($ced,$conexion);
   echo '</td></tr>';
echo '</table></td></tr>';
	}
	
function datosEspecialidades($cedula,$conex){
	$sql = "select e. nombre from especialidad as e inner join medico_has_especialidad on e.idespecialidad=medico_has_especialidad.especialidad_idespecialidad inner join medico on medico.cedula = medico_has_especialidad.medico_cedula where medico.cedula ='$cedula'";
	if(mysql_query($sql,$conex)){
		$res=mysql_query($sql,$conex);
		echo '<table cellspacing="0" border="1" style="width:100%"><caption style="background-color:#999; font-weight:bold">ESPECIALIDAD (ES)</caption>';
	while($arrEs=mysql_fetch_array($res)){
		
		echo'<tr><td>'.$arrEs['nombre'].'</td></tr>';
		
	
	}//while
	echo '</table>';
	}//if
	else{
		echo ''.mysql_error();
		}
	}
	//falta el teléfono
function datosAcompanantes($id,$conexion){
	$sql="select a.nombre as n, a.apaterno as ap, a.amaterno as am, a.telefono as t, a.estado as e, a.municipio as m, a.domicilio as d, a.localidad as l, a.desicion as crey, a.evangelio as ev, a.sexo as s from acompanante as a inner join paciente on a.paciente_id = paciente.id where paciente.id='$id'";
	if(mysql_query($sql,$conexion)){
		$res=mysql_query($sql,$conexion);
		echo '<table border="1" cellspacing="0"><caption style="background-color:#999; font-weight:bold">DATOS DE ACOMPAÑANTES:</caption>';
		while($a = mysql_fetch_array($res)){
			echo '<tr>
			<td>'.$a['n'].' '.$a['am'].' '.$a['ap'].'. </td><td>Otros datos: Creyente:'.$a['crey'].'<br> ¿Escuchó el evangelio?: '.$a['ev'].'</td><td>Sexo: '.$a['s'].'</td>
			</tr>
			<tr>
			<td colspan="3">'.$a['d'].', '.$a['l'].', '.$a['m'].'<br>Teléfono: '.$a['t'].'</td>
			</tr>';
			}
		echo '</table>';
		}
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