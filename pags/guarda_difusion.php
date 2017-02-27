<?php
include("conectar.php");
$nombre = $_POST['difusion'];

mysql_select_db($db,$conexion);
if(!$conexion){
	echo mysql_error();
	}else{
		if(guarda_difusion($nombre,$conexion)){
			mensaje("Medio de difusi\u00f3n agregado exitosamente","alta_difusion.php");
			}else{
				mensaje("Ocurri\u00f3 un error: ".mysql_error(),"alta_difusion.php");
				}
		}
function guarda_difusion($nombre, $conexion){
	$sql="INSERT INTO `difusion`(`nombre`) VALUES ('$nombre')";
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			return false;
			}
	}

?>