<?php
include("conectar.php");
mysql_select_db($db,$conexion);

$idPaciente = $_GET['id_paciente'];
$idGrupo = $_GET['id_grupo'];

if(guardaAsistencia($idPaciente,$idGrupo,$conexion)){
	mensaje("Se guard\u00f3 la asistencia","asistencia_grupos.php");
	}else{
	mensaje("No se guard\u00f3 la asistencia.","asistencia_grupos.php");
		}



function guardaAsistencia($idPaciente,$idGrupo,$conexion){
	$sql = "UPDATE `asistencia_a_grupo` SET `asistio`='si' WHERE paciente_id = '$idPaciente' AND grupo_id='$idGrupo'";
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			return false;
			}
	}

?>