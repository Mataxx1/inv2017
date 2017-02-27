<?php
include("conectar.php");
$especialidad = $_POST['especialidad'];
$id=substr($especialidad,0,5);
mysql_select_db($db,$conexion);
if(!$conexion){
	echo mysql_error();
	}else{
		if(guarda_especialidad($id,$especialidad,$conexion)){
			mensaje("Especialidad agregada exitosamente","alta_padecimiento.php");
			}else{
				mensaje("Ocurrió un error: ".mysql_error(),"alta_padecimiento.php");
				}
		}
function guarda_especialidad($id,$nombre, $conexion){
	$sql="INSERT INTO `especialidad`(`idespecialidad`, `nombre`) VALUES ('$id','$nombre')";
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			return false;
			}
	}

?>