<?php
include("conectar.php");
$tipo = $_POST['tipo_colaborador'];

mysql_select_db($db,$conexion);
if(!$conexion){
	echo mysql_error();
	}else{
		if(guarda_tipo_colaborador($tipo,$conexion)){
			mensaje("Tipo de colaborador agregado exitosamente","alta_tipo_colaborador.php");
			}else{
				mensaje("Ocurrió un error: ".mysql_error(),"alta_tipo_colaborador.php");
				}
		}
function guarda_tipo_colaborador($tipo, $conexion){
	$sql="INSERT INTO `tipo_colaborador`(`tipo`) VALUES ('$tipo')";
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			return false;
			}
	}

?>