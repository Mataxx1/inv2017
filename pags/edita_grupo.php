<?php
include("conectar.php");
mysql_select_db($db,$conexion);
$nombre = $_POST['nomb_grupo'];
$id = $_POST['id_grupo'];
$lugar = $_POST['lugar'];
$horario = $_POST['horario'];

if(cambiaNombreEspecialidad($id,$nombre,$lugar,$horario,$conexion)){
	mensaje("Se edit\u00f3 el grupo exitosamente","editar_grupo.php");	
	}else{
		mensaje("No se pudo editar el grupo","editar_grupo.php");
		}


function cambiaNombreEspecialidad($id,$nombre,$lugar,$horario,$conexion){
	$sql = "UPDATE `grupo` SET `nombre`='$nombre', lugar='$lugar', horario = '$horario' WHERE id='$id'";
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			return false;
			}
	}

?>