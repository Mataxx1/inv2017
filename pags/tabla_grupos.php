<?php
include("conectar.php");
mysql_select_db($db,$conexion);
$id_grupo = $_GET['q'];

retorna_tabla($id_grupo,$conexion);

function retorna_tabla($idGrupo,$conexion){
$sql="select p.id as 'idp', p.nombre as 'np', p.apaterno as 'app', p.amaterno as 'amp', c.nombre, c.apaterno, c.amaterno, gru.id as 'idg',gru.nombre, gru.horario from paciente as p inner join asistencia_a_grupo as aag on p.id = aag.paciente_id inner join grupo as gru on gru.id = aag.grupo_id inner join colaborador as c on c.id = gru.colaborador_id = '$idGrupo' WHERE aag.asistio='no'";

$sqlAcomp="select a.id as 'ida', a.nombre as 'na', a.apaterno as 'apa', a.amaterno as 'ama', c.nombre, c.apaterno, c.amaterno, gru.id as 'idg',gru.nombre, gru.horario from acompanante as a inner join asistencia_acomp_grupo as aaag on a.id = aaag.acompanante_id inner join grupo as gru on gru.id = aaag.grupo_id inner join colaborador as c on c.id = gru.colaborador_id = '$idGrupo' WHERE aaag.asistio='no'";


if(mysql_query($sql,$conexion)){
	$asistentes = mysql_query($sql,$conexion);
	$acompanantes=mysql_query($sqlAcomp,$conexion);
	if(mysql_num_rows($asistentes)>0){
		echo '<table width="600" border="1" cellspacing="0">';
		caption($idGrupo,$conexion);
		cabeceras();
		while($rw = mysql_fetch_array($asistentes)){
			generaFilas($rw['idp'],$rw['np'],$rw['app'],$rw['amp'],$rw['idg']);
			}
			
		while($rwa=mysql_fetch_array($acompanantes)){
			generaFilaAcompanante($rwa['ida'],$rwa['na'],$rwa['apa'],$rwa['ama'],$rwa['idg']);
			
			}
			echo '</table>';
		}else{
			echo 'Aún no hay inscripciones en éste grupo.';
			}
	
	}else{
		echo 'Error en la consulta: '.mysql_error();
		}
}
function caption($idGrupo,$conexion){
	$sql = "select g.id, g.nombre, g.horario, c.nombre as 'nombrec', c.apaterno, c.amaterno from grupo as g inner join colaborador as c on c.id = g.colaborador_id where g.id='$idGrupo'";
	$resCab = mysql_query($sql,$conexion);
	$objCaption = mysql_fetch_object($resCab);
	echo '<caption style="background-color:#999; font-weight:bold">'.$objCaption->nombre.' ('.$objCaption->horario.')- '.$objCaption->nombrec.' '.$objCaption->apaterno.' '.$objCaption->amaterno.'</caption>';
	}
function cabeceras(){
	echo '<th>Nombre del paciente</th><th>Asistencia</th>';
	}

function generaFilas($idP,$nomP,$apP,$amP,$idG){
	echo '<tr><td>'.$nomP,' '.$apP.' '.$amP.'</td><td><a href="guarda_asistencia.php?id_paciente='.$idP.'&id_grupo='.$idG.'">Registrar asistencia</a></td></tr>';
	
	}
	
function generaFilaAcompanante($ida,$na,$apa,$ama,$idG){
	echo '<tr><td>'.$na,' '.$apa.' '.$ama.'</td><td><a href="guarda_asistencia_acomp.php?id_acomp='.$ida.'&id_grupo='.$idG.'">Registrar asistencia</a></td></tr>';
	}
?>