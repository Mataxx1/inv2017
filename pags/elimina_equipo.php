<?php

include("conectar.php");
mysql_select_db($db,$conexion);
$id=base64_decode($_GET['id']);

if(eliminarEquipo($id,$conexion)){
	mensaje("".$id." Eliminado exitosamente","eliminar_equipo.php");
	}else{
		if(mysql_errno() == 1451){
			mensaje("No se puede eliminar ".$id." porque está vinculado a algún préstamo","eliminar_equipo.php");
			}else{
				mensaje("Error desconocido, no se pudo eliminar","eliminar_equipo.php");
				}
		}


function eliminarEquipo($id,$conexion){
	$sql="DELETE FROM `equipo` WHERE idequipo='$id'";
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			return false;
			}
	}

?>