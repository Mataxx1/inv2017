<?php
include("conectar.php");
mysql_select_db($db,$conexion);
$id_grupo = $_GET['q'];

retorna_tabla($id_grupo,$conexion);

function retorna_tabla($idGrupo,$conexion){
$sql="select p.id as 'idp', p.nombre as 'np', p.apaterno as 'app', p.amaterno as 'amp',TIMESTAMPDIFF(YEAR, p.fecha_nacimiento, NOW()) as edad,p.estado, p.municipio, p.localidad, p.calle,p.telefono, c.nombre, c.apaterno, c.amaterno, gru.id as 'idg',gru.nombre, gru.horario, aag.asistio from paciente as p inner join asistencia_a_grupo as aag on p.id = aag.paciente_id inner join grupo as gru on gru.id = aag.grupo_id inner join colaborador as c on c.id = gru.colaborador_id where gru.id = '$idGrupo'";

$sqlAcomp="select a.id as 'ida', a.nombre as 'na', a.apaterno as 'apa', a.amaterno as 'ama', a.domicilio, a.localidad, a.estado, a.municipio, a.telefono, c.nombre, c.apaterno, c.amaterno, gru.id as 'idg',gru.nombre, gru.horario, aaag.asistio from acompanante as a inner join asistencia_acomp_grupo as aaag on a.id = aaag.acompanante_id inner join grupo as gru on gru.id = aaag.grupo_id inner join colaborador as c on c.id = gru.colaborador_id where gru.id = '$idGrupo'";

$sqlPersona = "select p.id as 'idpers', p.nombre as 'npers',TIMESTAMPDIFF(YEAR, p.fecha_nac, NOW()) as edad,p.estado, p.municipio, p.localidad, p.domicilio,p.telefono,p.acompanante,p.problema_fisico, c.nombre, c.apaterno, c.amaterno, gru.id as 'idg',gru.nombre, gru.horario, aag.asistio from persona as p inner join grupo_asist_persona as aag on p.id = aag.persona_id inner join grupo as gru on gru.id = aag.grupo_id inner join colaborador as c on c.id = gru.colaborador_id where gru.id = '$idGrupo'";

if(mysql_query($sql,$conexion)){
	$asistentes = mysql_query($sql,$conexion);
	$acompanantes = mysql_query($sqlAcomp,$conexion);
	$personas = mysql_query($sqlPersona,$conexion);
	if(mysql_num_rows($asistentes)>0 || mysql_num_rows($acompanantes)>0 || mysql_num_rows($personas)>0){
		echo '<table width="700" border="1" cellspacing="0">';
		caption($idGrupo,$conexion);
		cabeceras();
		while($rw = mysql_fetch_array($asistentes)){
			generaFilas($rw['idp'],$rw['np'],$rw['app'],$rw['amp'],$rw['edad'],$rw['calle'],$rw['municipio'],$rw['localidad'],$rw['estado'],$rw['telefono'],$rw['idg'],$rw['asistio']);
			}
		while($rwa=mysql_fetch_array($acompanantes)){
			generaFilaAcompanante($rwa['ida'],$rwa['na'],$rwa['apa'],$rwa['ama'],$rwa['domicilio'],$rwa['municipio'],$rwa['localidad'],$rwa['estado'],$rwa['telefono'],$rwa['idg'],$rwa['asistio']);
			
			}
			while($rwp = mysql_fetch_array($personas)){
			generaFilaPersona($rwp['idpers'],$rwp['npers'],$rwp['edad'],$rwp['domicilio'],$rwp['municipio'],$rwp['localidad'],$rwp['estado'],$rwp['telefono'],$rwp['acompanante'],$rwp['problema_fisico'],$rwp['idg'],$rwp['asistio']);
			}
			
			echo '</table>';
		}else{
			echo 'No hay inscripciones en éste grupo.'.mysql_error();
			}
	
	}else{
		echo 'Error : '.mysql_error();
		}
}
function caption($idGrupo,$conexion){
	$sql = "select g.id, g.nombre, g.horario,g.lugar, c.nombre as 'nombrec', c.apaterno, c.amaterno from grupo as g inner join colaborador as c on c.id = g.colaborador_id where g.id='$idGrupo'";
	$resCab = mysql_query($sql,$conexion);
	$objCaption = mysql_fetch_object($resCab);
	echo '<caption style="background-color:#999; font-weight:bold">'.$objCaption->nombre.' ('.$objCaption->horario.'-'.$objCaption->lugar.') '.$objCaption->nombrec.' '.$objCaption->apaterno.' '.$objCaption->amaterno.'</caption>';
	}
function cabeceras(){
	echo '<th>Nombre</th><th>Edad</th><th>Domicilio</th><th>Teléfono</th><th>Acompañante</th><th>Problema físico</th><th>Asistencia</th>';
	}

function generaFilaPersona($ida,$np,$edad,$dom,$mun,$loc,$est,$tel,$acomp,$pf,$idG,$asistencia){
	echo '<tr class="fila_iluminada"><td>'.$np.'</td><td>'.$edad.'</td><td>'.$dom.', '.$loc.', '.$mun.', '.$est.'</td><td>'.$tel.'</td><td>'.$acomp.'</td><td>'.$pf.'</td><td>'.$asistencia.'</td></tr>';
	}

function generaFilas($idP,$nomP,$apP,$amP,$edad,$calle,$mun,$loc,$est,$tel,$idG,$asistencia){
	echo '<tr class="fila_iluminada"><td>'.$nomP,' '.$apP.' '.$amP.'</td><td>'.$edad.' años</td><td>'.$calle.', '.$loc.', '.$mun.', '.$est.'</td><td>'.$tel.'</td><td></td><td></td><td>'.$asistencia.'</td></tr>';
	
	}
function generaFilaAcompanante($ida,$na,$apa,$ama,$dom,$mun,$loc,$est,$tel,$idG,$asistencia){
	echo '<tr class="fila_iluminada"><td>'.$na,' '.$apa.' '.$ama.'</td><td></td><td>'.$dom.', '.$loc.', '.$mun.', '.$est.'</td><td>'.$tel.'</td><td></td><td></td><td>'.$asistencia.'</td></tr>';
	}
?>