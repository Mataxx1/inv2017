<?php
session_start();
if(!isset($_SESSION['ife'])){
	header("Location:../index.php");
	}
include("navegacion_pags.php");
include("conectar.php");
mysql_select_db($db,$conexion);

//tipo de equipo
$sqlTE="SELECT * FROM tipo_equipo";
$resTE=mysql_query($sqlTE,$conexion);
//año
$sqlYr="SELECT distinct(anio) FROM equipo";
$resYr=mysql_query($sqlYr,$conexion);
//alto
$sqlAlt="SELECT distinct(alto) FROM equipo";
$resAlt=mysql_query($sqlAlt,$conexion);
//ancho
$sqlAnc="SELECT distinct(ancho) FROM equipo";
$resAnc=mysql_query($sqlAnc,$conexion);

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
          <h3>Acciones para equipo</h3>
          <h4>Consultar equipo</h4>
          
          <p>Vea información sobre el equipo almacenado<br /><a href="consultar_equipo.php">Ir a consultar</a></p>
          <h4>Editar equipo</h4>
          
          <p>Edite el equipo almacenado anteriormente en el sistema.<br /><a href="editar_equipo.php">Ir a editar</a></p>
        </div>
      </div>
      <div class="content">
        <h1>Sección para consultar equipo.</h1>
        <form name="agrega" action="consultar_equipo.php" method="post">
       <p><table width="400" border="0">
          <tr>
            <td align="right"><input type="checkbox" name="todo" id="todo"> </td>
            <td><label for="todo">Consultar todo el equipo</label></td>
          </tr>
          <tr>
            <td>Tipo</td>
            <td><select name="tipo" id="tipo" style="width:100%"><option value="ti">Seleccione el tipo de equipo</option>
            <?php
            while($rwTE=mysql_fetch_array($resTE)){
				echo '<option value="'.$rwTE['idtipo_equipo'].'">'.$rwTE['nombre'].'</option>';
				}
			?>
            </select></td>
          </tr>
          <tr>
            <td>Estatus</td>
            <td><select name="estatus" id="estatus" style="width:100%"><option value="es">Seleccione el estatus del equipo</option>
            <option value="disponible">Disponibles</option>
            <option value="prestado">Entregados</option></select></td>
          </tr>
          <tr>
            <td>Año en que se adquirió</td>
            <td><select name="anio" id="anio" style="width:100%"><option value="ad">Seleccione el año en el que se aquirió el equipo</option>
            <?php
            while($rwYr=mysql_fetch_array($resYr)){
				echo '<option value="'.$rwYr['anio'].'">'.$rwYr['anio'].'</option>';
				}
			?></select></td>
          </tr>
          <tr>
            <td>Alto</td>
            <td><select name="alto" id="alto" style="width:100%"><option value="al">Seleccione el alto del equipo</option>
             <?php
            while($rwAlt=mysql_fetch_array($resAlt)){
				echo '<option value="'.$rwAlt['alto'].'">'.$rwAlt['alto'].'</option>';
				}
			?></select></td>
          </tr>
          <tr>
            <td>Ancho</td>
            <td><select name="ancho" id="ancho" style="width:100%"><option value="an">Seleccione el ancho del equipo</option>
             <?php
            while($rwAnc=mysql_fetch_array($resAnc)){
				echo '<option value="'.$rwAnc['ancho'].'">'.$rwAnc['ancho'].'</option>';
				}
			?></select></td>
          </tr>
         
          <tr align="right">
          <td colspan="3"><input type="submit" value="Consultar equipo"></td>
          </tr>
        </table></p></form>
        
        <?php

if(isset($_POST['todo']) && !empty($_POST['todo'])&& $_POST['tipo']=='ti' && $_POST['estatus'] == "es" && $_POST['anio'] == "ad" && $_POST['alto'] == "al" && $_POST['ancho'] == "an"){
$sql="select e.idequipo as id_eq, e.estatus, e.descripcion, e.alto, e.ancho,e.profundo, e.anio, t_e.nombre as n_tipo from equipo as e inner join tipo_equipo as t_e on e.tipo_equipo_idtipo_equipo = t_e.idtipo_equipo";
    generaTabla($sql,$conexion);
    
}

if(isset($_POST['tipo']) && $_POST['tipo']!='ti' && $_POST['estatus'] == "es" && $_POST['anio'] == "ad" && $_POST['alto'] == "al" && $_POST['ancho'] == "an"){
	$tipo=$_POST['tipo'];
$sql="select e.idequipo as id_eq, e.estatus, e.descripcion, e.alto, e.ancho,e.profundo, e.anio, t_e.nombre as n_tipo from equipo as e inner join tipo_equipo as t_e on e.tipo_equipo_idtipo_equipo = t_e.idtipo_equipo WHERE t_e.idtipo_equipo='$tipo'";
    generaTabla($sql,$conexion);
    
}

if(isset($_POST['estatus']) && $_POST['tipo']=='ti' && $_POST['estatus'] != "es" && $_POST['anio'] == "ad" && $_POST['alto'] == "al" && $_POST['ancho'] == "an"){
	$estatus=$_POST['estatus'];
$sql="select e.idequipo as id_eq, e.estatus, e.descripcion, e.alto, e.ancho,e.profundo, e.anio, t_e.nombre as n_tipo from equipo as e inner join tipo_equipo as t_e on e.tipo_equipo_idtipo_equipo = t_e.idtipo_equipo WHERE e.estatus='$estatus'";
    generaTabla($sql,$conexion);
    
}
//combina tipo y estatus
if($_POST['tipo']!='ti' && $_POST['estatus'] != "es" && $_POST['anio'] == "ad" && $_POST['alto'] == "al" && $_POST['ancho'] == "an"){
	$tipo=$_POST['tipo'];
	$estatus=$_POST['estatus'];
$sql="select e.idequipo as id_eq, e.estatus, e.descripcion, e.alto, e.ancho,e.profundo, e.anio, t_e.nombre as n_tipo from equipo as e inner join tipo_equipo as t_e on e.tipo_equipo_idtipo_equipo = t_e.idtipo_equipo WHERE t_e.idtipo_equipo='$tipo' AND e.estatus='$estatus'";
    generaTabla($sql,$conexion);
    
}

//tipo estatus anio
if($_POST['tipo']!='ti' && $_POST['estatus'] != "es" && $_POST['anio'] != "ad" && $_POST['alto'] == "al" && $_POST['ancho'] == "an"){
	$tipo=$_POST['tipo'];
	$estatus=$_POST['estatus'];
	$anio = $_POST['anio'];
$sql="select e.idequipo as id_eq, e.estatus, e.descripcion, e.alto, e.ancho,e.profundo, e.anio, t_e.nombre as n_tipo from equipo as e inner join tipo_equipo as t_e on e.tipo_equipo_idtipo_equipo = t_e.idtipo_equipo WHERE t_e.idtipo_equipo='$tipo' AND e.estatus='$estatus' AND e.anio = '$anio'";
    generaTabla($sql,$conexion);
    
}


if(isset($_POST['anio']) && $_POST['tipo']=='ti' && $_POST['estatus'] == "es" && $_POST['anio'] != "ad" && $_POST['alto'] == "al" && $_POST['ancho'] == "an"){
	$anio=$_POST['anio'];
$sql="select e.idequipo as id_eq, e.estatus, e.descripcion, e.alto, e.ancho,e.profundo, e.anio, t_e.nombre as n_tipo from equipo as e inner join tipo_equipo as t_e on e.tipo_equipo_idtipo_equipo = t_e.idtipo_equipo WHERE e.anio='$anio'";
    generaTabla($sql,$conexion);
    
}

if(isset($_POST['alto']) && $_POST['tipo']=='ti' && $_POST['estatus'] == "es" && $_POST['anio'] == "ad" && $_POST['alto'] != "al" && $_POST['ancho'] == "an"){
	$alto=$_POST['alto'];
$sql="select e.idequipo as id_eq, e.estatus, e.descripcion, e.alto, e.ancho,e.profundo, e.anio, t_e.nombre as n_tipo from equipo as e inner join tipo_equipo as t_e on e.tipo_equipo_idtipo_equipo = t_e.idtipo_equipo WHERE e.alto='$alto'";
    generaTabla($sql,$conexion);
    
}

if(isset($_POST['ancho']) && $_POST['tipo']=='ti' && $_POST['estatus'] == "es" && $_POST['anio'] == "ad" && $_POST['alto'] == "al" && $_POST['ancho'] != "an"){
	$ancho=$_POST['ancho'];
$sql="select e.idequipo as id_eq, e.estatus, e.descripcion, e.alto, e.ancho,e.profundo, e.anio, t_e.nombre as n_tipo from equipo as e inner join tipo_equipo as t_e on e.tipo_equipo_idtipo_equipo = t_e.idtipo_equipo WHERE e.ancho='$ancho'";
    generaTabla($sql,$conexion);
    
}

function generaTabla($sql,$conexion){
echo '<table border="1">';
    if(mysql_query($sql,$conexion)){
    $res=mysql_query($sql,$conexion);
	echo '<caption style="background-color:#999; font-weight:bold">Se han encontrado: '.numero($res).' equipos. <a href="excelEquipo.php?qry='.base64_encode($sql).'"><img src="../images/excel.png" width="25" height="25"></a></caption>';
	cabeceras();
        while($row=mysql_fetch_array($res)){
        generaFila($row['id_eq'],$row['estatus'],$row['descripcion'],$row['alto'],$row['ancho'],$row['profundo'],$row['anio'],$row['n_tipo'],$conexion);
        }
        echo '</table>';
    }else{
    echo 'error :"v '.mysql_error();
    }
    

}

function cabeceras(){
echo '
<th>ID</th>
<th>Tipo</th>
<th>Estatus</th>
<th>Alto</th>
<th>Ancho</th>
<th>Profundo</th>
<th>Observaciones</th>
<th>Año en que se adquirió</th>
<th>Foto del equipo</th>
<th>Resguardante</th>';
}
function numero($res){
	return mysql_num_rows($res);
	}

function generaFila($id,$estatus,$descripcion,$alto,$ancho,$profundo,$anio,$tipo,$conexion){
echo '<tr class="fila_iluminada"><td>'.$id.'</td><td>'.$tipo.'</td><td>'.$estatus.'</td><td>'.$alto.' cms.</td><td>'.$ancho.' cms.</td><td>'.$profundo.' cms.</td><td>'.$descripcion.'</td><td>'.$anio.'</td><td><a class="popup" href="../fotos_equipo/'.$id.'.jpg" title="'.$id.'"><img src="../fotos_equipo/'.$id.'.jpg" width="50" height="50"/></a></td><td>';if($estatus=='prestado'){ muestraResguardante($id,$conexion);}else{ echo 'Está en bodega.';} echo '</td></tr>';

}

function muestraResguardante($idEquipo,$conexion){
	$sql="Select pac.id,pac.nombre, pac.apaterno, pac.amaterno, pres.fecha_prestamo, pres.estado from paciente as pac inner join prestamo as pres on pac.id = pres.paciente_id inner join equipo_prestamo on pres.id_prestamo = equipo_prestamo.prestamo_id_prestamo inner join equipo on equipo.idequipo = equipo_prestamo.equipo_idequipo where equipo.idequipo = '".$idEquipo."' and pres.estado='activo'";
	$res=mysql_query($sql,$conexion);
	$obj=mysql_fetch_object($res);
	echo '<a target="_blank" href="consultar_pacientes.php?id='.$obj->id.'&mun=&loc=&diag=">'.$obj->nombre.' '.$obj->apaterno.' '.$obj->amaterno.'</a>';
	}
        
        ?>
	<!--iframe height="500" width="500" name="carga_consultas_equipo" id="carga_consultas_equipo" src="iframe_consultar_equipo.php" scrolling="no" frameborder="0"><iframe--><br><br><br><br><br><br>
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