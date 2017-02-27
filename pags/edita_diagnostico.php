<?php
include("conectar.php");
mysql_select_db($db,$conexion);
$nombre = $_POST['nomb_diagnostico'];
$id = $_POST['id_diagnostico'];

if(cambiaNombreDiagnostico($id,$nombre,$conexion)){
	mensaje("Se cambi\u00f3 el nombre del diagn\u00f3stico exitosamente","editar_diagnostico.php");	
	}else{
		mensaje("No se pudo cambiar el nombre del diagn\u00f3stico","editar_diagnostico.php");
		}


function cambiaNombreDiagnostico($id,$nombre,$conexion){
	$sql = "UPDATE `diagnostico` SET `nombre`='$nombre' WHERE id = '$id'";
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			return false;
			}
	}

?>