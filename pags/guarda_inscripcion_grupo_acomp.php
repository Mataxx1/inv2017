<?php
session_start();

@$id_grupo = $_POST['id_grupo'];
@$id_acomp= $_POST['id_acomp'];



include ("conectar.php");
mysql_select_db($db,$conexion);

if(guardarInscripcion($id_grupo,$id_acomp,$conexion)){
	mensaje("Inscripci\u00f3n exitosa","registrar_acomp_grupo.php");
	}else{
		mensaje("Error en la inscripci\u003fn: ".mysql_error(),"registrar_acomp_grupo.php");
		}

function guardarInscripcion($id_grupo,$id_acomp,$conexion){
	$sql="INSERT INTO `asistencia_acomp_grupo`(`acompanante_id`, `grupo_id`, `asistio`) VALUES ('$id_acomp','$id_grupo','no')";
	
	if(mysql_query($sql,$conexion)){
		return true;
	}else{
		return false;
		}
	
	}

?>