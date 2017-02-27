<?php
session_start();

@$id_grupo = $_POST['id_grupo'];
@$id_paciente= $_POST['id_paciente'];



include ("conectar.php");
mysql_select_db($db,$conexion);

if(guardarInscripcion($id_grupo,$id_paciente,$conexion)){
	mensaje("Inscripci\u003fn exitosa","registrar_a_grupo.php");
	}else{
		mensaje("Error en la inscripci\u003fn: ".mysql_error(),"registrar_a_grupo.php");
		}

function guardarInscripcion($id_grupo,$id_paciente,$conexion){

	$sql="INSERT INTO `asistencia_a_grupo`(`grupo_id`, `paciente_id`,asistio) VALUES ('$id_grupo','$id_paciente','no')";
	if(mysql_query($sql,$conexion)){
		return true;
	}else{
		return false;
		}
	
	}

?>