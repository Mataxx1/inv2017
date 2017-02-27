<?php
session_start();
if(!isset($_SESSION['ife'])){
	header("Location:../index.php");
	}
include("navegacion_pags.php");
include("conectar.php");
mysql_select_db($db,$conexion);
//WHERE YEAR(fecha_registro) = 2015
$sqlPac = "select * from paciente";
$resPac = mysql_query($sqlPac,$conexion);
$sqlMun = "select distinct(municipio) from paciente order by municipio asc";
$resMun = mysql_query($sqlMun,$conexion);
$sqlLoc = "select distinct(localidad) from paciente order by localidad asc";
$resLoc = mysql_query($sqlLoc,$conexion);
$sqlDiag = "select * from diagnostico";
$resDiag = mysql_query($sqlDiag,$conexion);
$sqlyr = "SELECT distinct(YEAR(fecha_registro)) as years FROM `paciente` order by years DESC";
$resyrs = mysql_query($sqlyr,$conexion);
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
      
      <div class="content">
        <h1>Sección para consultar pacientes</h1>
        <form name="agrega" action="consultar_pacientes.php" method="get">
       <p><table width="400" border="0">
       <tr>
       <td>Año:</td><td><select name="anio" id="anio"><?php
       while($arrAnio = mysql_fetch_array($resyrs)){
		   echo '<option value="'.$arrAnio[0].'">'.$arrAnio[0].'</option>';
		   }
	   ?></select></td>
       </tr>
          <tr>
            <td width="121" align="right"><input type="checkbox" name="todo" id="todo"></td><td width="269"><label for="todo"> Consultar todos los pacientes</label></td>
            
          </tr>
         <tr>
         	<td>ID y nombre:</td><td><select name="id" id="id" style="width:100%"><option value="">Seleccione el nombre</option>
            <?php
            while($arrPac=mysql_fetch_array($resPac)){
				echo '<option value="'.$arrPac['id'].'">'.$arrPac['id'].'-'.$arrPac['apaterno'].' '.$arrPac['amaterno'].' '.$arrPac['nombre'].'</option>';
				}
			?>
            
            </select></td>
         </tr>
         <tr>
         	<td>Conicidir nombre o apellidos:</td><td><input type="text" name="nombre" id="nombre" style="width:100%"/></td>
         </tr>
         <tr>
         <td>Municipio</td><td><select name="mun" id="mun" style="width:100%"><option value="">Seleccione el municipio</option>
         <?php
         while($arrMun=mysql_fetch_array($resMun)){
			 echo '<option value="'.$arrMun['municipio'].'">'.$arrMun['municipio'].'</option>';
			 }
		 ?>
         </select></td>
         </tr>
        <tr>
         <td>Localidad</td><td><select name="loc" id="loc" style="width:100%"><option value="">Seleccione la localidad</option>
         <?php
         while($arrLoc=mysql_fetch_array($resLoc)){
			 echo '<option value="'.$arrLoc['localidad'].'">'.$arrLoc['localidad'].'</option>';
			 }
		 ?>
         </select></td>
         </tr>
         <tr>
         <td>Diagnóstico:</td><td><select name="diag" id="diag" style="width:100%"><option value="">Seleccione el diagnóstico</option>
         <?php
         while($arrDiag=mysql_fetch_array($resDiag)){
			 echo '<option value="'.$arrDiag['id'].'">'.$arrDiag['nombre'].'</option>';
			 }
		 ?>
         </select></td>
         </tr>
         <tr>
         <td>Solicitud:</td><td><select name="solic" id="solic" style="width:100%"><option value="">Seleccione el estado de solicitud</option>
         <?php
		 $estatusSolicitud = array("En espera","Aprobada","Rechazada");
         foreach($estatusSolicitud as $solicitud){
			 echo '<option value="'.$solicitud.'">'.$solicitud.'</option>';
			 }
		 ?>
         </select></td>
         </tr>
          <tr align="right">
          <td colspan="3"><input type="submit" value="Consultar pacientes"></td>
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
	$sql="SELECT p.id, p.nombre as nombre_p, p.apaterno, p.amaterno, DATE_FORMAT( FROM_DAYS( TO_DAYS( NOW( ) ) - TO_DAYS( fecha_nacimiento ) ) , '%Y' ) +0 AS edad, p.telefono as telefono_p, p.estado, p.municipio, p.localidad, p.calle, p.desicion, p.evangelio, p.sexo, p.contacto_id, p.fecha_registro as registro, p.espalda,p.cadera_rodilla,p.rodilla_talon,p.cintura, p.altura, p.peso, p.solicitud, p.causa_solicitud,p.requiere,p.axila_piso,p.codo_piso, i.nombre as nombre_i, d.nombre as nombre_d from paciente as p inner join iglesia as i on p.iglesia_id = i.id inner join diagnostico as d on p.diagnostico_id = d.id where YEAR(p.fecha_registro) = '".$_GET['anio']."' order by id asc LIMIT $inicio,$registros";
	$sql1="SELECT p.id, p.nombre as nombre_p, p.apaterno, p.amaterno, DATE_FORMAT( FROM_DAYS( TO_DAYS( NOW( ) ) - TO_DAYS( fecha_nacimiento ) ) , '%Y' ) +0 AS edad, p.telefono as telefono_p, p.estado, p.municipio, p.localidad, p.calle, p.desicion, p.evangelio, p.sexo, p.contacto_id, p.fecha_registro as registro, p.espalda,p.cadera_rodilla,p.rodilla_talon,p.cintura, i.nombre as nombre_i, d.nombre as nombre_d from paciente as p inner join iglesia as i on p.iglesia_id = i.id inner join diagnostico as d on p.diagnostico_id = d.id where YEAR(p.fecha_registro) = '".$_GET['anio']."'  order by id asc";
	$sql2="SELECT p.id, p.nombre as nombre_p, p.apaterno, p.amaterno, DATE_FORMAT( FROM_DAYS( TO_DAYS( NOW( ) ) - TO_DAYS( fecha_nacimiento ) ) , '%Y' ) +0 AS edad, p.localidad, p.fecha_registro as registro, d.nombre as nombre_d, p.requiere  from paciente as p inner join iglesia as i on p.iglesia_id = i.id inner join diagnostico as d on p.diagnostico_id = d.id where YEAR(p.fecha_registro) = '".$_GET['anio']."'  order by id asc";
	$paginas = ceil((mysql_num_rows(mysql_query($sql1,$conexion))/$registros));
	tablaconDatos($sql,$sql1,$sql2,$inicio,$paginas,'todo',$_GET['todo'],$_GET['anio'],$conexion);
	
	}
if(isset($_GET['id']) && !empty($_GET['id'])){
	$sql="SELECT p.id, p.nombre as nombre_p, p.apaterno, p.amaterno, DATE_FORMAT( FROM_DAYS( TO_DAYS( NOW( ) ) - TO_DAYS( fecha_nacimiento ) ) , '%Y' ) +0 AS edad, p.telefono as telefono_p, p.estado, p.municipio, p.localidad, p.calle, p.desicion, p.evangelio, p.sexo, p.contacto_id, p.fecha_registro as registro, p.espalda,p.cadera_rodilla,p.rodilla_talon,p.cintura, p.altura, p.peso, p.solicitud, p.causa_solicitud,p.requiere,p.axila_piso,p.codo_piso, i.nombre as nombre_i, d.nombre as nombre_d from paciente as p inner join iglesia as i on p.iglesia_id = i.id inner join diagnostico as d on p.diagnostico_id = d.id where p.id= ".$_GET['id']." AND YEAR(p.fecha_registro) = '".$_GET['anio']."' order by id asc LIMIT $inicio,$registros";
	$sql1="SELECT p.id, p.nombre as nombre_p, p.apaterno, p.amaterno, DATE_FORMAT( FROM_DAYS( TO_DAYS( NOW( ) ) - TO_DAYS( fecha_nacimiento ) ) , '%Y' ) +0 AS edad, p.telefono as telefono_p, p.estado, p.municipio, p.localidad, p.calle, p.desicion, p.evangelio, p.sexo, p.contacto_id, p.fecha_registro as registro, p.espalda,p.cadera_rodilla,p.rodilla_talon,p.cintura, i.nombre as nombre_i, d.nombre as nombre_d from paciente as p inner join iglesia as i on p.iglesia_id = i.id inner join diagnostico as d on p.diagnostico_id = d.id where p.id= ".$_GET['id']." AND YEAR(p.fecha_registro) = '".$_GET['anio']."' order by id asc";
	$sql2="SELECT p.id, p.nombre as nombre_p, p.apaterno, p.amaterno, DATE_FORMAT( FROM_DAYS( TO_DAYS( NOW( ) ) - TO_DAYS( fecha_nacimiento ) ) , '%Y' ) +0 AS edad, p.localidad, p.fecha_registro as registro, d.nombre as nombre_d, p.requiere  from paciente as p inner join iglesia as i on p.iglesia_id = i.id inner join diagnostico as d on p.diagnostico_id = d.id where  p.id= ".$_GET['id']." AND YEAR(p.fecha_registro) = '".$_GET['anio']."'  order by id asc";
	
	$paginas = ceil((mysql_num_rows(mysql_query($sql1,$conexion))/$registros));
	tablaconDatos($sql,$sql1,$sql2,$inicio,$paginas,'id',$_GET['id'],$_GET['anio'],$conexion);
	}
	
//coincidir

if(isset($_GET['nombre']) && !empty($_GET['nombre'])){
	$sql="SELECT p.id, p.nombre as nombre_p, p.apaterno, p.amaterno, DATE_FORMAT( FROM_DAYS( TO_DAYS( NOW( ) ) - TO_DAYS( fecha_nacimiento ) ) , '%Y' ) +0 AS edad, p.telefono as telefono_p, p.estado, p.municipio, p.localidad, p.calle, p.desicion, p.evangelio, p.sexo, p.contacto_id, p.fecha_registro as registro, p.espalda,p.cadera_rodilla,p.rodilla_talon,p.cintura, p.altura, p.peso, p.solicitud, p.causa_solicitud,p.requiere,p.axila_piso,p.codo_piso, i.nombre as nombre_i, d.nombre as nombre_d from paciente as p inner join iglesia as i on p.iglesia_id = i.id inner join diagnostico as d on p.diagnostico_id = d.id where CONCAT(p.nombre, p.apaterno, p.amaterno) LIKE '%".$_GET['nombre']."%' AND YEAR(p.fecha_registro) = '".$_GET['anio']."' order by id asc LIMIT $inicio,$registros";
	$sql1="SELECT p.id, p.nombre as nombre_p, p.apaterno, p.amaterno, DATE_FORMAT( FROM_DAYS( TO_DAYS( NOW( ) ) - TO_DAYS( fecha_nacimiento ) ) , '%Y' ) +0 AS edad, p.telefono as telefono_p, p.estado, p.municipio, p.localidad, p.calle, p.desicion, p.evangelio, p.sexo, p.contacto_id, p.fecha_registro as registro, p.espalda,p.cadera_rodilla,p.rodilla_talon,p.cintura, i.nombre as nombre_i, d.nombre as nombre_d from paciente as p inner join iglesia as i on p.iglesia_id = i.id inner join diagnostico as d on p.diagnostico_id = d.id where CONCAT(p.nombre, p.apaterno, p.amaterno) LIKE '%".$_GET['nombre']."%' AND YEAR(p.fecha_registro) = '".$_GET['anio']."' order by id asc";
	$sql2="SELECT p.id, p.nombre as nombre_p, p.apaterno, p.amaterno, DATE_FORMAT( FROM_DAYS( TO_DAYS( NOW( ) ) - TO_DAYS( fecha_nacimiento ) ) , '%Y' ) +0 AS edad, p.localidad, p.fecha_registro as registro, d.nombre as nombre_d, p.requiere  from paciente as p inner join iglesia as i on p.iglesia_id = i.id inner join diagnostico as d on p.diagnostico_id = d.id where  CONCAT(p.nombre, p.apaterno, p.amaterno) LIKE '%".$_GET['nombre']."%' AND  YEAR(p.fecha_registro) = '".$_GET['anio']."'  order by id asc";
	$paginas = ceil((mysql_num_rows(mysql_query($sql1,$conexion))/$registros));
	tablaconDatos($sql,$sql1,$sql2,$inicio,$paginas,'id',$_GET['id'],$_GET['anio'],$conexion);
	}


if(isset($_GET['mun']) && !empty($_GET['mun'])){
	$sql="SELECT p.id, p.nombre as nombre_p, p.apaterno, p.amaterno, DATE_FORMAT( FROM_DAYS( TO_DAYS( NOW( ) ) - TO_DAYS( fecha_nacimiento ) ) , '%Y' ) +0 AS edad, p.telefono as telefono_p, p.estado, p.municipio, p.localidad, p.calle, p.desicion, p.evangelio, p.sexo, p.contacto_id, p.fecha_registro as registro, p.espalda,p.cadera_rodilla,p.rodilla_talon,p.cintura, p.altura, p.peso, p.solicitud, p.causa_solicitud,p.requiere,p.axila_piso,p.codo_piso, i.nombre as nombre_i, d.nombre as nombre_d from paciente as p inner join iglesia as i on p.iglesia_id = i.id inner join diagnostico as d on p.diagnostico_id = d.id where p.municipio= '".$_GET['mun']."' AND YEAR(p.fecha_registro) = '".$_GET['anio']."' order by id asc LIMIT $inicio,$registros";
	$sql1="SELECT p.id, p.nombre as nombre_p, p.apaterno, p.amaterno, DATE_FORMAT( FROM_DAYS( TO_DAYS( NOW( ) ) - TO_DAYS( fecha_nacimiento ) ) , '%Y' ) +0 AS edad, p.telefono as telefono_p, p.estado, p.municipio, p.localidad, p.calle, p.desicion, p.evangelio, p.sexo, p.contacto_id, p.fecha_registro as registro, p.espalda,p.cadera_rodilla,p.rodilla_talon,p.cintura, i.nombre as nombre_i, d.nombre as nombre_d from paciente as p inner join iglesia as i on p.iglesia_id = i.id inner join diagnostico as d on p.diagnostico_id = d.id where p.municipio= '".$_GET['mun']."' AND YEAR(p.fecha_registro) = '".$_GET['anio']."'  order by id asc";
	$sql2="SELECT p.id, p.nombre as nombre_p, p.apaterno, p.amaterno, DATE_FORMAT( FROM_DAYS( TO_DAYS( NOW( ) ) - TO_DAYS( fecha_nacimiento ) ) , '%Y' ) +0 AS edad, p.localidad, p.fecha_registro as registro, d.nombre as nombre_d, p.requiere  from paciente as p inner join iglesia as i on p.iglesia_id = i.id inner join diagnostico as d on p.diagnostico_id = d.id where  p.municipio= '".$_GET['mun']."' AND  YEAR(p.fecha_registro) = '".$_GET['anio']."'  order by id asc";
	$paginas = ceil((mysql_num_rows(mysql_query($sql1,$conexion))/$registros));
	tablaconDatos($sql,$sql1,$sql2,$inicio,$paginas,'mun',$_GET['mun'],$_GET['anio'],$conexion);
	
	}
if(isset($_GET['loc']) && !empty($_GET['loc'])){
	$sql="SELECT p.id, p.nombre as nombre_p, p.apaterno, p.amaterno, DATE_FORMAT( FROM_DAYS( TO_DAYS( NOW( ) ) - TO_DAYS( fecha_nacimiento ) ) , '%Y' ) +0 AS edad, p.telefono as telefono_p, p.estado, p.municipio, p.localidad, p.calle, p.desicion, p.evangelio, p.sexo, p.contacto_id, p.fecha_registro as registro, p.espalda,p.cadera_rodilla,p.rodilla_talon,p.cintura, p.altura, p.peso, p.solicitud, p.causa_solicitud,p.requiere,p.axila_piso,p.codo_piso, i.nombre as nombre_i, d.nombre as nombre_d from paciente as p inner join iglesia as i on p.iglesia_id = i.id inner join diagnostico as d on p.diagnostico_id = d.id where p.localidad= '".$_GET['loc']."'  AND YEAR(p.fecha_registro) = '".$_GET['anio']."' order by id asc LIMIT $inicio,$registros";
	$sql1="SELECT p.id, p.nombre as nombre_p, p.apaterno, p.amaterno, DATE_FORMAT( FROM_DAYS( TO_DAYS( NOW( ) ) - TO_DAYS( fecha_nacimiento ) ) , '%Y' ) +0 AS edad, p.telefono as telefono_p, p.estado, p.municipio, p.localidad, p.calle, p.desicion, p.evangelio, p.sexo, p.contacto_id, p.fecha_registro as registro, p.espalda,p.cadera_rodilla,p.rodilla_talon,p.cintura, i.nombre as nombre_i, d.nombre as nombre_d from paciente as p inner join iglesia as i on p.iglesia_id = i.id inner join diagnostico as d on p.diagnostico_id = d.id where p.localidad= '".$_GET['loc']."' AND YEAR(p.fecha_registro) = '".$_GET['anio']."' order by id asc";
		$sql2="SELECT p.id, p.nombre as nombre_p, p.apaterno, p.amaterno, DATE_FORMAT( FROM_DAYS( TO_DAYS( NOW( ) ) - TO_DAYS( fecha_nacimiento ) ) , '%Y' ) +0 AS edad, p.localidad, p.fecha_registro as registro, d.nombre as nombre_d, p.requiere  from paciente as p inner join iglesia as i on p.iglesia_id = i.id inner join diagnostico as d on p.diagnostico_id = d.id where p.localidad= '".$_GET['loc']."' AND  YEAR(p.fecha_registro) = '".$_GET['anio']."'  order by id asc";
	
	$paginas = ceil((mysql_num_rows(mysql_query($sql1,$conexion))/$registros));
	tablaconDatos($sql,$sql1,$sql2,$inicio,$paginas,'loc',$_GET['loc'],$_GET['anio'],$conexion);
	
	}
	//por diangóstico
if(isset($_GET['diag']) && !empty($_GET['diag'])){
	$sql="SELECT p.id, p.nombre as nombre_p, p.apaterno, p.amaterno, DATE_FORMAT( FROM_DAYS( TO_DAYS( NOW( ) ) - TO_DAYS( fecha_nacimiento ) ) , '%Y' ) +0 AS edad, p.telefono as telefono_p, p.estado, p.municipio, p.localidad, p.calle, p.desicion, p.evangelio, p.sexo, p.contacto_id, p.fecha_registro as registro, p.espalda,p.cadera_rodilla,p.rodilla_talon,p.cintura, p.altura, p.peso, p.solicitud, p.causa_solicitud,p.requiere,p.axila_piso,p.codo_piso, i.nombre as nombre_i, d.nombre as nombre_d from paciente as p inner join iglesia as i on p.iglesia_id = i.id inner join diagnostico as d on p.diagnostico_id = d.id where p.diagnostico_id= '".$_GET['diag']."' AND YEAR(p.fecha_registro) = '".$_GET['anio']."' order by id asc LIMIT $inicio,$registros";
	$sql1="SELECT p.id, p.nombre as nombre_p, p.apaterno, p.amaterno, DATE_FORMAT( FROM_DAYS( TO_DAYS( NOW( ) ) - TO_DAYS( fecha_nacimiento ) ) , '%Y' ) +0 AS edad, p.telefono as telefono_p, p.estado, p.municipio, p.localidad, p.calle, p.desicion, p.evangelio, p.sexo, p.contacto_id, p.fecha_registro as registro, p.espalda,p.cadera_rodilla,p.rodilla_talon,p.cintura, i.nombre as nombre_i, d.nombre as nombre_d from paciente as p inner join iglesia as i on p.iglesia_id = i.id inner join diagnostico as d on p.diagnostico_id = d.id where p.diagnostico_id= '".$_GET['diag']."' AND YEAR(p.fecha_registro) = '".$_GET['anio']."' order by id asc";
			$sql2="SELECT p.id, p.nombre as nombre_p, p.apaterno, p.amaterno, DATE_FORMAT( FROM_DAYS( TO_DAYS( NOW( ) ) - TO_DAYS( fecha_nacimiento ) ) , '%Y' ) +0 AS edad, p.localidad, p.fecha_registro as registro, d.nombre as nombre_d, p.requiere  from paciente as p inner join iglesia as i on p.iglesia_id = i.id inner join diagnostico as d on p.diagnostico_id = d.id where p.diagnostico_id= '".$_GET['diag']."' AND  YEAR(p.fecha_registro) = '".$_GET['anio']."'  order by id asc";
	
	$paginas = ceil((mysql_num_rows(mysql_query($sql1,$conexion))/$registros));
	tablaconDatos($sql,$sql1,$sql2,$inicio,$paginas,'diag',$_GET['diag'],$_GET['anio'],$conexion);
	
	}
if(isset($_GET['solic']) && !empty($_GET['solic'])){
	$sql="SELECT p.id, p.nombre as nombre_p, p.apaterno, p.amaterno, DATE_FORMAT( FROM_DAYS( TO_DAYS( NOW( ) ) - TO_DAYS( fecha_nacimiento ) ) , '%Y' ) +0 AS edad, p.telefono as telefono_p, p.estado, p.municipio, p.localidad, p.calle, p.desicion, p.evangelio, p.sexo, p.contacto_id, p.fecha_registro as registro, p.espalda,p.cadera_rodilla,p.rodilla_talon,p.cintura, p.altura, p.peso, p.solicitud, p.causa_solicitud,p.requiere,p.axila_piso,p.codo_piso, i.nombre as nombre_i, d.nombre as nombre_d from paciente as p inner join iglesia as i on p.iglesia_id = i.id inner join diagnostico as d on p.diagnostico_id = d.id where p.solicitud= '".$_GET['solic']."'  AND YEAR(p.fecha_registro) = '".$_GET['anio']."' order by id asc LIMIT $inicio,$registros";
	$sql1="SELECT p.id, p.nombre as nombre_p, p.apaterno, p.amaterno, DATE_FORMAT( FROM_DAYS( TO_DAYS( NOW( ) ) - TO_DAYS( fecha_nacimiento ) ) , '%Y' ) +0 AS edad, p.telefono as telefono_p, p.estado, p.municipio, p.localidad, p.calle, p.desicion, p.evangelio, p.sexo, p.contacto_id, p.fecha_registro as registro, p.espalda,p.cadera_rodilla,p.rodilla_talon,p.cintura, i.nombre as nombre_i, d.nombre as nombre_d from paciente as p inner join iglesia as i on p.iglesia_id = i.id inner join diagnostico as d on p.diagnostico_id = d.id where p.solicitud= '".$_GET['solic']."' AND YEAR(p.fecha_registro) = '".$_GET['anio']."'  order by id asc";
				$sql2="SELECT p.id, p.nombre as nombre_p, p.apaterno, p.amaterno, DATE_FORMAT( FROM_DAYS( TO_DAYS( NOW( ) ) - TO_DAYS( fecha_nacimiento ) ) , '%Y' ) +0 AS edad, p.localidad, p.fecha_registro as registro, d.nombre as nombre_d, p.requiere  from paciente as p inner join iglesia as i on p.iglesia_id = i.id inner join diagnostico as d on p.diagnostico_id = d.id where  p.solicitud= '".$_GET['solic']."' AND  YEAR(p.fecha_registro) = '".$_GET['anio']."'  order by id asc";
	$paginas = ceil((mysql_num_rows(mysql_query($sql1,$conexion))/$registros));
	tablaconDatos($sql,$sql1,$sql2,$inicio,$paginas,'solic',$_GET['solic'],$_GET['anio'],$conexion);
	
	}

//falta municipio y localidad, y la función de contar los resultados en el caption pa que se vea chido :v


function tablaconDatos($sql,$sql1,$sql2,$pagina,$paginas,$criterio,$valor,$anio,$conexion){

	if(mysql_query($sql,$conexion)){
		$res=mysql_query($sql,$conexion);
		$res1=mysql_query($sql1,$conexion);
		
		
		echo '<table cellpadding="0" border="1" cellspacing="0"><caption>Se muestran: '.numeroResultados($res).' pacientes de <b>'.numeroResultados($res1).'</b>'; if(numeroResultados($res1) > 0){echo'  Pacientes<a href="excelPaciente.php?qry='.base64_encode($sql1).'"><img src="../images/excel.png" width="25" height="25"></a> Solicitudes: <a href="excel_solicitud_pacientes.php?qry='.base64_encode($sql2).'"><img src="../images/excel.png" width="25" height="25"></a>';}else{} echo '</caption>';
		while($arrDatos = mysql_fetch_array($res)){
			
			
			
			molde_datos_usuario($arrDatos['id'],$arrDatos['nombre_p'],$arrDatos['apaterno'],$arrDatos['amaterno'],$arrDatos['calle'],$arrDatos['edad'],$arrDatos['telefono_p'],$arrDatos['municipio'],$arrDatos['estado'],$arrDatos['localidad'],$arrDatos['desicion'],$arrDatos['evangelio'],$arrDatos['nombre_i'],$arrDatos['nombre_d'],$arrDatos['contacto_id'],$arrDatos['registro'],$arrDatos['espalda'],$arrDatos['cadera_rodilla'],$arrDatos['rodilla_talon'],$arrDatos['cintura'], $arrDatos['altura'],$arrDatos['peso'],$arrDatos['solicitud'],$arrDatos['causa_solicitud'],$arrDatos['requiere'],$arrDatos['codo_piso'],$arrDatos['axila_piso'],$conexion);
			
			}
			
		}else{
			mysql_error();
			}
			//$total_registros=mysql_num_rows($res);
		//	$numero_paginas = $total_registros/$paginas
			paginacion($pagina,$paginas,$criterio,$valor,$anio);
	
echo '</table>';



	
	}

function paginacion($pagina,$paginas,$criterio,$val,$anio){
	echo '<tr><td colspan="4" align="center">';
	if($pagina>1){
		echo'<a href="consultar_pacientes.php?num='.($pagina-1).'&'.$criterio.'='.$val.'&anio='.$anio.'">'.'Anterior'.'</a> ';
		}
for($cont = 1; $cont <=$paginas;$cont++){
	
	if($cont==$pagina){
		echo $cont.' ';
		}else{
	echo'<a href="consultar_pacientes.php?num='.$cont.'&'.$criterio.'='.$val.'&anio='.$anio.'">'.$cont.'</a> ';
	
		}
	
}
if($pagina<$paginas){
		echo'<a href="consultar_pacientes.php?num='.($pagina+1).'&'.$criterio.'='.$val.'&anio='.$anio.'">'.' Siguiente'.'</a>';
		}

	}
	
	
function molde_datos_usuario($id,$nombre,$ap,$am,$dom,$edad,$tel,$mun,$estado,$loc,$crey,$evangelio,$iglesia,$diag,$contacto_id,$fecha_r,$espalda,$cadera_rodilla,$rodilla_talon,$cintura,$altura,$peso,$solicitud,$causa_solicitud,$requiere,$codo_piso,$axila_piso,$conexion){
	echo '<tr class="fila_iluminada"><td><table width="600" border="1" cellspacing="0"><caption style="background-color:#999; font-weight:bold">DATOS DEL PACIENTE <a href="editar_paciente.php?q='.$id.'" target="_blank">Editar</a></caption>
  <tr>
    <td width="162"><b>ID:</b> '.$id.'<br>REGISTRADO: '.$fecha_r.'</td>
    <td colspan="2">'.$nombre.' '.$ap.' '.$am.'</td>
    <td rowspan="3" colspan="3"><a class="popup" href="../fotos_pacientes/'.$id.'.jpg"><img src="../fotos_pacientes/'.$id.'.jpg" width="108px" height="120px"></a></td>
  </tr>
  <tr>
    <td colspan="3">'.$dom.', '.$loc.', '.$mun.', '.$estado.'</td>
    
  </tr>
  <tr>
  <td>Desición: '.$crey.'</td>
  <td>¿Escuchó el evangelio?: '.$evangelio.'</td>
  <td>Iglesia: '.$iglesia.'</td>
  </tr>
  <tr>
  <td colspan="3">Diagnóstico: '.$diag.'</td><td>Edad: '.$edad.' años</td>
  </tr>
  <tr>
  <td colspan="5" align="center" style="background-color:#999; font-weight:bold">MEDIDAS DEL PACIENTE</td>
  </tr>
  <tr>
  <td>Espalda: '.$espalda.' cms.</td><td>Cadera a rodilla: '.$cadera_rodilla.' cms.</td><td>Rodilla a talón: '.$rodilla_talon.' cms.</td><td colspan="2">Ancho de cadera: '.$cintura.' cms.</td>
  </tr>
  <tr>
  <td colspan="2">Altura: '.$altura.' cms.</td><td colspan="2">Peso: '.$peso.' kilogramos</td>
  </tr>
  <tr>
  <td colspan="2">Del codo al piso: '.$codo_piso.' pulgadas.</td><td colspan="2">De la axila al piso: '.$axila_piso.' pulgadas.</td>
  </tr>
  <tr>
  <td colspan="5" align="center" style="background-color:#999; font-weight:bold">SOLICITUD</td>
  <tr>
  <td colspan="5">Requiere: '.$requiere.'</td>
  </tr>
  <tr>
  <td colspan="2">Solicitud: <b>'.$solicitud.'</b></td><td colspan="3">Causa: '.$causa_solicitud.'</td>
  </tr>
  </tr>
  <tr><td colspan="5">';
  //datos del contacto
  datosContacto($contacto_id,$conexion);
  echo '</td></tr>';
  echo '<tr><td colspan="6">';
  //datos del acompañante
  datosAcompanantes($id,$conexion);
   echo '</td></tr>';
echo '</table></td></tr>';
	}
	
function datosContacto($id_contacto,$conex){
	$sql = "select c.nombre as nombre_c, c.tel_casa, c.tel_celular, ic.nombre as nombre_ic, ic.domicilio, ic.municipio, ic.localidad, ic.telefono from contacto as c inner join iglesia_cristiana as ic where c.id='$id_contacto'";
	if(mysql_query($sql,$conex)){
		$res=mysql_query($sql,$conex);
	$obC=mysql_fetch_object($res);
		echo '<table cellspacing="0" border="1" style="width:100%"><caption style="background-color:#999; font-weight:bold">DATOS DE CONTACTO</caption>
		<tr><td> '.$obC->nombre_c.', Teléfono de casa:'.$obC->tel_casa.', Celular: '.$obC->tel_celular.'</td></tr>
		<tr><td>Iglesia: '.$obC->nombre_ic.', Teléfono: '.$obC->telefono.', Domicilio: '.$obC->domicilio.', '.$obC->localidad.', '.$obC->municipio.'. </td></tr>
		</table>';
	
	}else{
		echo ''.mysql_error();
		}
	}
	//falta el teléfono
function datosAcompanantes($id,$conexion){
	$sql="select a.nombre as n, a.apaterno as ap, a.amaterno as am, a.telefono as t, a.estado as e, a.municipio as m, a.domicilio as d, a.localidad as l, a.desicion as crey, a.evangelio as ev, a.sexo as s from acompanante as a inner join paciente on a.paciente_id = paciente.id where paciente.id='$id'";
	if(mysql_query($sql,$conexion)){
		$res=mysql_query($sql,$conexion);
		echo '<table border="1" cellspacing="0" style="width:100%"><caption style="background-color:#999; font-weight:bold">DATOS DE ACOMPAÑANTES:</caption>';
		while($a = mysql_fetch_array($res)){
			echo '<tr>
			<td>'.$a['n'].' '.$a['ap'].' '.$a['am'].'. </td><td>Otros datos: Creyente:'.$a['crey'].'<br> ¿Escuchó el evangelio?: '.$a['ev'].'</td><td>Sexo: '.$a['s'].'</td>
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
  <link rel="stylesheet" href="../css/magnific-popup.css"> 
<script src="../js/jquery.js"></script>
<!-- Magnific Popup core JS file -->
<script src="../js/jquery.magnific-popup.js"></script>
  <script type="text/javascript" src="../js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="../js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="../js/jquery.kwicks-1.5.1.js"></script>
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