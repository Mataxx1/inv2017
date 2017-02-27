<?php
include("conectar.php");
mysql_select_db($db,$conexion);
$nombre = $_POST['tipo_colaborador'];
$id = $_POST['id_tipo_colaborador'];

if(cambiaNombreDiagnostico($id,$nombre,$conexion)){
	mensaje("Se cambi\u00f3 el tipo de colaborador exitosamente","editar_tipo_colaborador.php");	
	}else{
		mensaje("No se pudo cambiar el tipo de colaborador","editar_tipo_colaborador.php");
		}


function cambiaNombreDiagnostico($id,$nombre,$conexion){
	$sql = "UPDATE `tipo_colaborador` SET `tipo`='$nombre' WHERE id = '$id'";
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			return false;
			}
	}

?>