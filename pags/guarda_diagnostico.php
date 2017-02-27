<?php
include("conectar.php");
$diagnostico = $_POST['diagnostico'];

mysql_select_db($db,$conexion);
if(!$conexion){
	echo mysql_error();
	}else{
		if(guarda_nombreDiagnostico($diagnostico,$conexion)){
			mensaje("Diagn\u00f3stico agregado exitosamente","alta_diagnostico.php");
			}else{
				mensaje("Ocurrió un error: ".mysql_error(),"alta_diagnostico.php");
				}
		}
function guarda_nombreDiagnostico($nombre, $conexion){
	$sql="INSERT INTO `diagnostico`(`nombre`) VALUES ('$nombre')";
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			return false;
			}
	}

?>