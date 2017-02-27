<?php
$nombre = $_POST['nombre_iglesia_c'];
@$estado = $_POST['estado'];
@$municipio = $_POST['municipio'];
@$domicilio = $_POST['domicilio'];
@$telefono = $_POST['telefono'];
@$localidad = $_POST['localidad'];
@$seguimiento = $_POST['seguimiento'];
include ("conectar.php");



if($conexion){
	mysql_select_db($db,$conexion);
	
		if(add_IC($nombre,$domicilio,$municipio,$localidad,$estado,$telefono,$seguimiento,$conexion)){
			
			mensaje("La iglesia cristiana se ha agregado con \u00e9xito","alta_iglesia_cristiana.php");
			}else{
				mensaje("Algo salió mal: ".mysql_error(),"alta_iglesia_cristiana.php");
				}
		
	}else{
		echo "error conectando";
		}

function add_IC($nombre,$dom,$mun,$loc,$est,$tel,$seg,$conexion){
	$Sql= "INSERT INTO `iglesia_cristiana`(`nombre`, `domicilio`, `municipio`,localidad, `estado`, `telefono`,seguimiento, `iglesia_id`) VALUES ('$nombre','$dom','$mun','$loc','$est','$tel','$seg',1)";
	if(mysql_query($Sql,$conexion)){
		return true;
		}else{
			return false;
			}
		mysql_close($conexion);
	}


?>