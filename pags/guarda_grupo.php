<?php
session_start();

@$nombre_grupo = $_POST['nombre_grupo'];
@$id_encargado= $_POST['id_encargado'];
@$fechayhora= $_POST['fecha'];
@$lugar = $_POST['lugar'];


include ("conectar.php");
mysql_select_db($db,$conexion);

if(guardarGrupo($nombre_grupo,$id_encargado,$fechayhora,$lugar,$conexion)){
	mensaje("Grupo agregado con \u00e9xito","nuevo_grupo.php");
	}else{
		mensaje("Error guardando grupo".mysql_error(),"nuevo_grupo.php");
		}

function guardarGrupo($nombre_grupo,$id_encargado,$fecha,$lugar,$conexion){

	$sql="INSERT INTO `grupo`(`nombre`, `horario`,lugar, `colaborador_id`) VALUES ('$nombre_grupo','$fecha','$lugar','$id_encargado')";
	if(mysql_query($sql,$conexion)){
		return true;
	}else{
		return false;
		}
	
	}

?>