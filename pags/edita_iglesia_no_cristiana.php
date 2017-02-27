<?php
include("conectar.php");
mysql_select_db($db,$conexion);
$nombre = $_POST['nomb_iglesianc'];
$id = $_POST['id_iglesianc'];

if(cambiaNombreIglesiaNc($id,$nombre,$conexion)){
	mensaje("Se cambi\u00f3 el nombre de la iglesia no cristiana exitosamente","editar_iglesia_no_cristiana.php");	
	}else{
		mensaje("No se pudo cambiar el nombre de la iglesia no cristiana","editar_iglesia_no_cristiana.php");
		}


function cambiaNombreIglesiaNc($id,$nombre,$conexion){
	$sql = "UPDATE `iglesia` SET `nombre`='$nombre' WHERE id='$id'";
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			return false;
			}
	}

?>