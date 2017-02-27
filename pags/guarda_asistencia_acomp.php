<?php
include("conectar.php");
mysql_select_db($db,$conexion);

$idAcomp = $_GET['id_acomp'];
$idGrupo = $_GET['id_grupo'];

if(guardaAsistencia($idAcomp,$idGrupo,$conexion)){
	mensaje("Se guard\u00f3 la asistencia","asistencia_grupos.php");
	}else{
	mensaje("No se guard\u00f3 la asistencia.","asistencia_grupos.php");
		}



function guardaAsistencia($idAcomp,$idGrupo,$conexion){
	$sql = "UPDATE `asistencia_acomp_grupo` SET `asistio`='si' WHERE acompanante_id = '$idAcomp' AND grupo_id='$idGrupo'";
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			return false;
			}
	}

?>