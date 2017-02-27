<?php
include("conectar.php");
mysql_select_db($db,$conexion);
$nombre = $_POST['nomb_espec'];
$id = $_POST['id_espec'];

if(cambiaNombreEspecialidad($id,$nombre,$conexion)){
	mensaje("Se cambió el nombre de la especialidad exitosamente","editar_padecimiento.php");	
	}else{
		mensaje("No se pudo cambiar el nombre de la especialidad","editar_padeciminento.php");
		}


function cambiaNombreEspecialidad($id,$nombre,$conexion){
	$sql = "UPDATE `especialidad` SET `nombre`='$nombre' WHERE idespecialidad = '$id'";
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			return false;
			}
	}

?>